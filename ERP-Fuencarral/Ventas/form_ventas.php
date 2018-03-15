<?php
$titulo="Ejemplo";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';
?>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

<script languaje="javascript" type="text/javascript">
function enviar(index){
  document.form1.action=index;
  document.form1.submit();
  
}

</script>
<div class="container-fluid">
    <div class="row">
    
    <div class="col-md-2 col-md-offset-1">

      <button id="singlebutton" type="submit" name="singlebutton"
      onclick="javascript:location.href='clientes.php'" class="btn btn-primary" >Clientes</button>
      <button id="singlebutton" type="submit" name="singlebutton"
      onclick="javascript:location.href='index.php'" class="btn btn-primary" >Ventas</button>
      <button id="singlebutton" type="submit" name="singlebutton"
      onclick="javascript:location.href='crearVentas.php'" class="btn btn-primary" >Producir ventas</button>

    </div>
<form class="form-horizontal" action="crearVentas.php" method="post">
  <fieldset>

    <!-- Form Name -->
    <legend>Generador Venta</legend>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Cliente </label>
      <div class="col-md-4">
        <select id="selectbasic" name="cliente" class="form-control">
          <?php
      
      

           //sentencia para recoger los datos  
            $mostrar_Cliente="Select * from Cliente";
            $mostrar_Clientef=mysqli_query($link,$mostrar_Cliente);
            //$mostrar_Clienteff=mysqli_fetch_array($mostrar_Clientef);


            //bucle generar la tabla con los datos recogidos

            while ($fila = mysqli_fetch_array($mostrar_Clientef) ){

              echo"<option value=".$fila['idCliente'].">".$fila['nombreEmpresa']."</option>";

            }

            
            
          ?>
        </select>
      </div>
    </div>

    <!-- producto -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Producto</label>
      <div class="col-md-4">
        <select id="selectbasic" name="producto" class="form-control">
          <!-- mostar pruductos -->

          <?php

           

           //sentencia para recoger los datos  
            $mostrar_producto="Select * from Productos";
            $mostrar_productof=mysqli_query($link,$mostrar_producto);
            //$mostrar_Clienteff=mysqli_fetch_array($mostrar_Clientef);


            //bucle generar la tabla con los datos recogidos

            while ($fila = mysqli_fetch_array($mostrar_productof) ){

              echo"<option value=".$fila['IDProductos'].">".$fila['NombreProducto']."</option>";

            }

?>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="introCantidad">Cantidad</label>  
      <div class="col-md-2">
      <input id="introCantidad" name="cantidad" placeholder="nº" class="form-control input-md" required="" type="text">
      <span class="help-block">Introduce valor numérico</span>  
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-primary" >aceptar</button>
      </div>
    </div>

  </fieldset>
</form>
</div></div>
<?php
include '../Plantilla/foot.php'
?>
