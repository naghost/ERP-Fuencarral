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
      <th><a href="../ModuloCompras/Reporte.php"><h5>Reporte</h5></a></th>
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
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>

     <tr>
      <th scope="row">4</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>

     <tr>
      <th scope="row">5</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>

     <tr>
      <th scope="row">6</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>

  </tbody>
</table>
	</div>
	</div>
</div>
<?php
include '../Plantilla/foot.php'
?>