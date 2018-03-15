<?php

    $conexion = mysqli_connect('localhost', 'root', '') or die ("Hay un problema para la conexion!");

    mysqli_select_db($conexion, "prueba") or die("No se pudo seleccionar la base de datos!");

    echo "<a>hola</a>"

    if(!empty($_POST["id_proyecto"])) 
    {
       $sql ="SELECT tareas.id_tarea AS 'id', tareas.nombre AS 'nombre' FROM tareas INNER JOIN proyectos ON proyectos.id_proyecto=tareas.id_proyecto_aux WHERE tareas.id_proyecto_aux='"+$_POST["id_proyecto"]+"'";

       $consulta_tareas = $conexion->query($sql);
 
       
      ?>
      <option value="">Seleccionar Tarea</option>
      <?php
 
      while($tarea= $consulta_tareas->fetch_object())
        {
	   ?>
	      <option value="<?php echo $tarea->id_tarea; ?>"><?php echo $tarea->nombre; ?></option>
	   <?php
        }
      }
?>