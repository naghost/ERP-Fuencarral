<?php
include 'Plantilla/head.php';
$id = $_GET['id'];
$query = "SELECT * FROM Productos WHERE IDProducto=$id";
$EjecutarQuery= mysqli_query($link,$query);
$fila=mysqli_fetch_row($EjecutarQuery);
?>
<div class="row">
  <div class="col-md-12">
    <h1><?php echo "$fila[1]" ?></h1>
  </div>
</div><br>
<div class="row">
  <div class="col-md-4">
    <img src="http://placehold.it/260x180" style="width: 100%; height: 100%;" alt="">
  </div>
  <div class="col-md-8">
    <p>
      <b>Descripcion:</b> <?php echo " $fila[2]"; ?>  
    </p>
    <p>
      <b>Precio:</b><?php echo " $fila[3]";?>€
    </p>
    <p>
      <b>Material:</b><?php if((int)$fila[4]==1){echo " Si";}else{echo " No";}?>
    </p>
    <p>
      <b>Punto de venta:</b><?php if((int)$fila[5]==1){echo " Si";}else{echo " No";}?>
    </p>
  </div>
</div><br>
<div class="row">
  <h2>Almacenes</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Almacen</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $queryDos = "SELECT Almacen.Nombre, AlmacenProductos.Cantidad FROM AlmacenProductos INNER JOIN Almacen ON AlmacenProductos.IDAlmacen=Almacen.IDAlmacen WHERE IDProducto=$id";
      $EjecutarQueryDos= mysqli_query($link, $queryDos);
      while ($filaDos = mysqli_fetch_row($EjecutarQueryDos)) {
        echo "<tr><td>$filaDos[0]</td><td>$filaDos[1]</td><tr/>";
      }
      ?>
    </tbody>
  </table>
</div>
<div class="row">
  <h2>Proveedores</h2>
  <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Numero</th>
          <th>Direccion</th>
          <th>Precio</th>
        </tr>
      </thead>
      <tbody>
        
   
  <?php
   $queryTres = "SELECT Proveedores.Nombre, Proveedores.Numero, Proveedores.direccion, ProveedoresProductos.Precio FROM ProveedoresProductos INNER JOIN Proveedores ON ProveedoresProductos.IDProveedor=Proveedores.IDProveedor WHERE IDProducto=$id";
   $EjecutarQueryTres=mysqli_query($link, $queryTres);
   while ($filaTres = mysqli_fetch_row($EjecutarQueryTres)) {
     echo "<tr><td>$filaTres[0]</td><td>$filaTres[1]</td><td>$filaTres[2]</td><td>$filaTres[3]€</td></tr>";
   }
  ?>
     </tbody>
  </table>
</div>
<?php
include 'Plantilla/foot.php'
?>