<?php
$titulo="Ejemplo";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';


  $queryTres = "SELECT * FROM pedidos";
 
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
      <th><a href="../ModuloCompras/Pedidos.php"><h5>Pedidos</h5></a></th>
    </tr>

     <tr>
      <th><a href="../ModuloCompras/Facturas.php"><h5>Facturas</h5></a></th>
    </tr>
  </thead>
		</table>
	</div>
  <div class= "col-md-1"> 
          <a href="../ModuloCompras/formulario_crear_Pedido.php" class="btn btn-primary btn-primary" style="margin-top: 10px;"><span class="glyphicon glyphicon-plus"></span> Crear</a><br><br>
      </div>
	<div class="col-md-8">
	<table class="table">
      <thead>
        <tr>
          <th>idpedido </th>
          <th>  direccion</th>
          <th>tiempo_maximo</th>
          <th>referencia_pedido</th>

        </tr>
      </thead>
      <tbody>
        
   
  <?php
  
   while ($filaTres = mysqli_fetch_row($EjecutarQueryTres)) {
     echo "<tr><td>$filaTres[0]</td><td>$filaTres[1]</td><td>$filaTres[2]</td><td>$filaTres[3]</td></tr>";
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