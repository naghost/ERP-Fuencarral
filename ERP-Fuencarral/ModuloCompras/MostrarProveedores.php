<?php
$titulo="Almacen";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';
$id = $_GET['id'];
$query = "SELECT * FROM Proveedores WHERE IDProveedor=$id";
$EjecutarQuery= mysqli_query($link,$query);
$fila=mysqli_fetch_row($EjecutarQuery);

 	$queryTres = "SELECT Productos.NombreProducto, Productos.Descripcion, ProveedoresProductos.Precio FROM ProveedoresProductos INNER JOIN Productos ON ProveedoresProductos.IDProducto=Productos.IDProducto WHERE ProveedoresProductos.IDProveedor=$id";
  // $queryTres = "SELECT Productos.NombreProducto, Productos.Descripcion, Productos.Precio, AlmacenProductos.Cantidad FROM Proveedores INNER JOIN Productos ON AlmacenProductos.IDProducto=Productos.IDProducto WHERE IDProveedor=$id";
   $EjecutarQueryTres=mysqli_query($link, $queryTres);
?>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-2">
      <table class="table table-inverse">
  <thead>
    <tr>
      <th><a href="../ModuloCompras/Proveedores.php"><h5>Proveedores</h5></a></th>
    </tr>

     <tr>
      <th><a href="../ModuloCompras/Reporte.php"><h5>Reporte</h4¡5></a></th>
    </tr>

     <tr>
      <th><a href="../ModuloCompras/Pedidos.php"><h5>Pedidos</h5></a></th>
    </tr>
     <tr>
      <th><a href="../ModuloCompras/Facturas.php"><h5>Facturas</h5></a></th>
    </tr>
  </thead>
    </table>
  </div>
  <div class="col-md-10">
  <div class="row">
        <div class= "col-md-2"> 
          <a href="../ModuloCompras/formulario_crear_proveedor.php" class="btn btn-primary btn-primary" style="margin-top: 10px;"><span class="glyphicon glyphicon-plus"></span> Crear</a><br><br>
      </div>
      <div class="col-md-10">

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
        </tr>
      </thead>
      <tbody>
        
   
  <?php
  
   while ($filaTres = mysqli_fetch_row($EjecutarQueryTres)) {
     echo "<tr><td>$filaTres[0]</td><td>$filaTres[1]</td><td>$filaTres[2]€</td></tr>";
   }
  ?>
     </tbody>
  </table>
</div>
<?php
include '../Plantilla/foot.php';
?>