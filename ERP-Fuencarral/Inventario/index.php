<?php
$titulo="Inventario";
include 'Plantilla/head.php';
?>

 <div class="row">
        <div class= "col-md-2"> 
          <a href="CrearProducto.php" class="btn btn-primary btn-primary" style="margin-top: 10px;"><span class="glyphicon glyphicon-plus"></span> Crear</a><br><br>
                   <form role="form" method="GET" action="Producto.php">
                   
                    <legend>Buscar Productos</legend>
                <div class="form-group">
                    <select id="basic-live" name="id" class="form-control" data-live-search="true">
                        <option selected="" value="0">Buscar Productos</option>
                       <?php
                       $query = "SELECT IDProducto, NombreProducto FROM Productos";
                       $EjecutarQuery = mysqli_query($link, $query)or die('Error en la ejecucion'); 
                       while ($fila=mysqli_fetch_row($EjecutarQuery)) {
                         echo "<option value='$fila[0]'>$fila[1]</option>";
                       }
                       ?>
                    </select><br>
                   <input type="submit" value="Mostrar producto"> 
                </div>
            </form>
      </div>
      <div class="col-md-10">

    <h2 class="card-header display-4 text-center"><i class="ion-person"></i>Lista de Productos</h2>
    
<div class="row p-2">
  <?php
  $query = "SELECT * FROM Productos";
  $EjecutarQuery = mysqli_query($link, $query) or die('Error en la ejecucion de la consulta');

  while($fila=mysqli_fetch_row($EjecutarQuery)){
  ?>
  <div class="col-sm-6 contpost">
    <div class="row">

      <div class="col PostTitle">
      <?php echo "<h4><a href='Producto.php?id=$fila[0]'>$fila[1]</a></h4>";?>
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
          <b>Descripcion: </b>
         <?php echo "$fila[2]"; ?>
        </p>
        <p>
         <b> Precio:</b> <?php echo "$fila[3]";?>€
        </p>
        <p>
          <b>Punto de venta:</b><?php if((int)$fila[5]==1){echo " Si";}else{echo " No";}?>
        </p>
        <p>
          <b>Material:</b><?php if((int)$fila[4]==1){echo " Si";}else{echo " No";}?>
        </p>
        <p><?php echo "<a class='btn btn-sm btn-danger' href='Acciones/Producto/eliminar.php?id=$fila[0]'>Eliminar</a>";?></p>
      </div>
    </div>
   
  </div>
  <?php
}
  ?>
  </div>

<?php

include 'Plantilla/foot.php';
?>

           <!-- <div class="col-lg-3">
            <h6 id="section-basic-live">"Basic" (liveSearch enabled)</h6>
            <form role="form">
                <div class="form-group">
                    <select id="basic-live" class="form-control" data-live-search="true">
                        <option>Rabbit</option>
                        <option selected>Cat</option>
                        <option class="get-class" disabled>Owl</option>
                        <optgroup label="Insects">
                            <option>Spider</option>
                            <option>Worm</option>
                            <option>Fly</option>
                        </optgroup>
                    </select>
                </div>
            </form>
        </div>
  </div>
  </div>-->