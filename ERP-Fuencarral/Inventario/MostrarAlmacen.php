<?php
$titulo="Almacen";
include 'Plantilla/head.php';
$id = $_GET['id'];
$query = "SELECT * FROM Almacen WHERE IDAlmacen=$id";
$EjecutarQuery= mysqli_query($link,$query);
$fila=mysqli_fetch_row($EjecutarQuery);
?>
<div class="row">
  <div class="col-md-12">
    <h1><?php echo "$fila[1]"; ?></h1>
  </div>
</div><br>
<div class="row">
 
  <div class="col-md-8">
    <p>
      <b>Direccion:</b> <?php echo " $fila[2]"; ?>  
    </p>
   
  </div>
</div><br>
<div class="row">
  <h2>Productos</h2>
  <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Cantidad</th>
        </tr>
      </thead>
      <tbody>
        
   
  <?php
   $queryTres = "SELECT Productos.NombreProducto, Productos.Descripcion, Productos.Precio, AlmacenProductos.Cantidad FROM AlmacenProductos INNER JOIN Productos ON AlmacenProductos.IDProducto=Productos.IDProducto WHERE IDAlmacen=$id";
   $EjecutarQueryTres=mysqli_query($link, $queryTres);
   while ($filaTres = mysqli_fetch_row($EjecutarQueryTres)) {
     echo "<tr><td>$filaTres[0]</td><td>$filaTres[1]</td><td>$filaTres[2]€</td><td>$filaTres[3]</td></tr>";
   }
  ?>
     </tbody>
  </table>
</div>
<?php
include 'Plantilla/foot.php';
?>