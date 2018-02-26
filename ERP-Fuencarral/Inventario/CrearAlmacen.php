<?php
$titulo="Almacen";
include 'Plantilla/head.php';

?>

<form class="form-horizontal" action="Acciones/Almacen/crear.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Crear Almacen</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre">Direccion</label>  
  <div class="col-md-4">
  <input id="Nombre" name="Nombre" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Direccion">Direccion</label>  
  <div class="col-md-4">
  <input id="Direccion" name="Direccion" placeholder="" class="form-control input-md" required="" type="text">
    
  </div><br>
  <div class="col-md-4">
  <input type="submit" value="Crear Almacen">
  </div>
<?php

include 'Plantilla/foot.php';
?>