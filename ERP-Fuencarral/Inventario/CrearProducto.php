<?php
include 'Plantilla/head.php';
?>
<form class="form-horizontal" action="Acciones/Producto/crear.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Crear Producto</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre">Nombre producto</label>  
  <div class="col-md-4">
  <input id="Nombre" name="Nombre" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Descripcion">Descripcion</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Descripcion" name="Descripcion"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Precio">Precio</label>  
  <div class="col-md-4">
  <input id="Precio" name="Precio" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Material">Material</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Material-0">
      <input name="Material" id="Material-0" value="1" type="checkbox">
      Yes
    </label>
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="PuntoVenta">Punto de venta</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="PuntoVenta-0">
      <input name="PuntoVenta" id="PuntoVenta-0" value="1" type="checkbox">
      yes
    </label>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="img">Imagen</label>
  <div class="col-md-4">
    <input id="img" name="img" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>
<?php
include 'Plantilla/foot.php';
?>