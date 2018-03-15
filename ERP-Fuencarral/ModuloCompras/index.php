<?php
$titulo="Index";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';
 header('Location: Proveedores.php' )
?>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
		<table class="table table-hover">
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
		<h1></h1>
	</div>
	</div>
</div>
<?php
include '../Plantilla/foot.php'
?>