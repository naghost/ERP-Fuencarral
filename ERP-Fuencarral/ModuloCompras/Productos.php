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
      <th>
      		<a href="../ModuloCompras/Productos.php"><h5>Productos</h5></a>
      </th>
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
		  		<a href="#" class="btn btn-primary btn-primary" style="margin-top: 10px;"><span class="glyphicon glyphicon-plus"></span> Crear</a><br><br>
				<a href="#" class="btn btn-primary btn-danger" style="margin-top: 5px;"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
			</div>
			<div class="col-md-10">

    <h2 class="card-header display-4 text-center"><i class="ion-person"></i>Lista de Productos</h2>
    
<div class="row p-2">
  <div class="col-sm-6 contpost">
    <div class="row">

      <div class="col PostTitle">
        <h4><a href="#">Tornillos</a></h4>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
        </a>
      </div>
      <div class="col-sm-6">      
        <p>
          Una descripción breve para decirle al usuario que es lo que contiene el post!
        </p>
        <p><a class="btn btn-sm btn-success" href="#">Leer más</a></p>
      </div>
    </div>
   
  </div>
<!-- ESTE ES EL SEGUNDO ITEM DE LA LISTA-->

   <div class="col-sm-6 contpost">
    <div class="row">

      <div class="col PostTitle">
        <h4><a href="#">Clavos</a></h4>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
        </a>
      </div>
      <div class="col-sm-6">      
        <p>
          Una descripción breve para decirle al usuario que es lo que contiene el post!
        </p>
        <p><a class="btn btn-sm btn-success" href="#">Leer más</a></p>
      </div>
    </div>
   
  </div>
</div>
</div>
  </div>
  </div>
  </div>
	</div>
	</div>
</div>
<?php
include '../Plantilla/foot.php'
?>