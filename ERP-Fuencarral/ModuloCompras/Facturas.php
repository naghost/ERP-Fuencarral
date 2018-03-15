<?php
$titulo="Ejemplo";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';
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
      <th><a href="../ModuloCompras/Pedidos.php"><h5>Pedidos</h5></a></th>
    </tr>
     <tr>
	 
      <th><a href="../ModuloCompras/Facturas.php"><h5>Facturas</h5></a></th>
    </tr>
  </thead>
		</table>
	</div>
	<div class="col-md-10">
		<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th>Factura</th>
      <th>Fecha Cobro</th>
      <th>Cuantia</th>
    </tr>
  </thead>
  <tbody>
     <?php
  $query = "SELECT * FROM Factura";
  $EjecutarQuery = mysqli_query($link, $query) or die('Error en la ejecucion de la consulta');

  while($fila=mysqli_fetch_row($EjecutarQuery)){
  ?>
  <div class="col-sm-6 contpost">
    <div class="row">

      <div class="col PostTitle">
      <?php echo "<tr>
      <th scope='row'></th>
      <td>$fila[1]</td>
      <td>$fila[2]</td>
      <td>$fila[3]€</td>
      
    </tr>";?>

      </div>
    </div>

   
  <?php
}
  ?>
   

  </tbody>
</table>
	</div>
	</div>
</div>

<?php
include '../Plantilla/foot.php'
?>