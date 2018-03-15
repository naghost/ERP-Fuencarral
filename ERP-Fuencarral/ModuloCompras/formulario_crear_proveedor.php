<?php
$titulo="Index";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';
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
    <form class="form-horizontal" action="../ModuloCompras/crearproveedor.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Añadir Proveedor</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre Proveedor</label>  
  <div class="col-md-4">
  <input id="nombre_proveedor" name="nombre_proveedor" type="text"  class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Telefono</label>  
  <div class="col-md-4">
  <input id="telefono" name="telefono" type="text"  class="form-control input-md"> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Direccion</label>  
  <div class="col-md-4">
  <input id="direccion" name="direccion" type="text"  class="form-control input-md"> 
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn_formproveedor"></label>
  <div class="col-md-4">
    <input type="submit" value="Crear">
  </div>
</div>

</fieldset>
</form>
  </div>
  </div>
</div>
<?php
include '../Plantilla/foot.php'
?>