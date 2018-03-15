<?php
$titulo="Almacen";
include 'Plantilla/head.php';
?>

 <div class="row">
        <div class= "col-md-2"> 
          <a href="CrearAlmacen.php" class="btn btn-primary btn-primary" style="margin-top: 10px;"><span class="glyphicon glyphicon-plus"></span> Crear</a><br><br>
                   <form role="form" method="GET" action="MostrarAlmacen.php">
                   
                    <legend>Buscar Almacen</legend>
                <div class="form-group">
                    <select id="basic-live" name="id" class="form-control" data-live-search="true">
                        <option selected="" value="0">Buscar almacen</option>
                       <?php
                       $query = "SELECT IDAlmacen, Nombre FROM Almacen";
                       $EjecutarQuery = mysqli_query($link, $query)or die('Error en la ejecucion'); 
                       while ($fila=mysqli_fetch_row($EjecutarQuery)) {
                         echo "<option value='$fila[0]'>$fila[1]</option>";
                       }
                       ?>
                    </select><br>
                   <input type="submit" value="Mostrar almacen"> 
                </div>
            </form>
      </div>
      <div class="col-md-10">

    <h2 class="card-header display-4 text-center"><i class="ion-person"></i>Lista de Almacenes</h2>
    
<div class="row p-2">
  <?php
  $query = "SELECT * FROM Almacen";
  $EjecutarQuery = mysqli_query($link, $query) or die('Error en la ejecucion de la consulta');

  while($fila=mysqli_fetch_row($EjecutarQuery)){
  ?>
  <div class="col-sm-6 contpost">
    <div class="row">

      <div class="col PostTitle">
      <?php echo "<h4><a href='MostrarAlmacen.php?id=$fila[0]'>$fila[1]</a></h4>";?>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">      
        <p>
          <b>Direccion: </b>
         <?php echo "$fila[2]"; ?>
        </p>
        
        <p><?php echo "<a class='btn btn-sm btn-danger' href='Acciones/Almacen/eliminar.php?id=$fila[0]'>Eliminar</a>";?></p>
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