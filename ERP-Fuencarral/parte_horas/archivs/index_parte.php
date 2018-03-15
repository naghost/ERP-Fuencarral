<!--<html>

	<head>
		<title> Pagina Parte Horas </title>

		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/estilo_web.css">
	</head>


	<body style="background-color:   #73c6b6  ">-->

<?php
$titulo="Parte Horas";
include '../Plantilla/head.php';
?>

    <script type="text/javascript">

      function obtenerIDDD(){

          $('select#proyectss').click(function(){

              $('#tareas1').toggle();
              $('#tareas2').toggle();
          });
      }

    </script>

    <?php

            $phpVar2=0;

            /*if (isset($_GET["valor"])) {
             
                echo "<p>Parameters: " . $phpVar2 . "</p>";

            } else {

                echo "<p>No parameters</p>";
            }*/

            //echo "<p>Parameters: " . $phpVar2 . "</p>";


            $conexion = mysqli_connect('localhost', 'root', '') or die ("Hay un problema para la conexion!");

            mysqli_select_db($conexion, "prueba") or die("No se pudo seleccionar la base de datos!");

      $consulta_proyectos   = $conexion->query("select id_proyecto as 'id', nombre as 'nombre' from proyectos");
      $consulta_tareas = $conexion->query("select id_tarea as 'id', nombre as 'nombre' from tareas");

      //$consulta_tareas = $conexion->query("select tareas.id_tarea as 'id', tareas.nombre as 'nombre' from tareas inner join proyectos on proyectos.id_proyecto=tareas.id_proyecto_aux where tareas.id_proyecto_aux='".$phpVar2."'");
  ?>

<div class="row">

    <div class="col-sm-4"></div>
    <div class="col-sm-8">

		<hr width="0%" />

		<form action="funcion1.php" method="POST" class="form-horizontal" role="form">


		  <div class="form-group">
		    <label for="fecha" class="col-sm-5 control-label">Fecha</label>
		    <div class="col-sm-4">
		      <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="user" class="col-sm-5 control-label">Usuario</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="user" class="col-sm-5 control-label">Proyecto</label>
		    <div class="col-sm-6">
		  <div class="dropdown">
			<select id="proyectss" class="selectpicker" name="proyecto" onchange="obtenerIDDD()">
          <option value='' disabled="disabled">Seleccionar Proyecto</option>
            <?php
                while($row= $consulta_proyectos->fetch_object())
                {
                    echo "<option value='".$row->id."'>".$row->nombre."</option>";

                }

                    /*session_start();

                    $pr = $row->id;

                    $_SESSION['proyet'] = $pr;*/
            ?>
			</select>

			</div>
			</div>
		  </div>

		  <div class="form-group" id="tareas1" >
		    <label for="tarea" class="col-sm-5 control-label">Tarea</label>
		    <div class="col-sm-6">
        <div class="dropdown">
		    <select id="lista_tareas1" onchange="selector(this)" class="selectpicker" name="tarea">
          <option value='' disabled="disabled">Seleccionar Tarea</option>
          <option value='Hardware'>Hardware</option>
          <?php
            /*while($row= $consulta_tareas->fetch_object())
                {
                    echo "<option value='".$row->nombre."'>".$row->nombre."</option>";

                }*/
          ?>
        </select>
		    </div>
		    </div>
      </div>

      <div class="form-group" id="tareas2" style="display: none; visibility: none;">
        <label for="tarea" class="col-sm-5 control-label">Tarea</label>
        <div class="col-sm-6">
        <div class="dropdown">
        <select id="lista_tareas2" onchange="selector(this)" class="selectpicker" name="tarea">
          <option value='' disabled="disabled">Seleccionar Tarea</option>
          <option value='Software'>Software</option>
          <option value='Sistemas'>Sistemas</option>
        </select>
        </div>
        </div>
      </div>

		  <div class="form-group">
		    <label for="descripcion" class="col-sm-5 control-label">Descripcion</label>
		    <div class="col-sm-4">
		      <textarea class="form-control" rows="5" id="descripcion" placeholder="....." name="descripcion"></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="material" class="col-sm-5 control-label">Material utilizado</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="material" placeholder="material">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="duracion" class="col-sm-5 control-label">Duracion</label>
		    <div class="col-sm-4">
		      <input type="number" class="form-control" name="duracion" placeholder="duracion">
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-8 control-label">
		      <button type="submit" class="btn btn-default">Guardar</button>
		      <button type="reset" class="btn btn-default">Cancelar</button>
		    </div>
		  </div>

		</form>

  </div>

</div>

    	<hr width="100%"/>

    	<div class="pre-scrollable">
			<table class="table table-hover table-bordered">
    			<thead>
        			<tr>
            			<th>Id_parte</th>
            			<th>Fecha</th>
           			 	<th>Usuario</th>
            			<th>Proyecto</th>
            			<th>Tarea</th>
                  <th>Descripcion</th>
            			<th>Material Utilizado</th>
            			<th>Duracion</th>
        			</tr>
    			</thead>
    			<tbody>
                    
                    <?php

                        $link = mysqli_connect('localhost', 'root', '') or die ('Hay un problema para la conexion!');

                        mysqli_select_db($link, 'prueba') or die('No se pudo seleccionar la base de datos!');

                        //$resultado = mysqli_query($link, 'SELECT * FROM partes') or die('query');

                        $resultado = $conexion->query("select * from partes inner join proyectos on proyectos.id_proyecto=partes.id_proyecto_aux where partes.usuario='carla'");


                        while($fila = mysqli_fetch_array($resultado)) {

                          echo "
                          <tr>

                              <td width='200' height='50' align='center'><font color='#000'>".$fila['id_parte']."</font></td>
                              <td width='200' height='50' align='center'><font color='#000'>".$fila['fecha']."</font></td>
                              <td width='200' height='50' align='center'><font color='#000'>".$fila['usuario']."</font></td>
                              <td width='200' height='50' align='center'><font color='#000'>".$fila['id_proyecto_aux']."</font></td>
                              <td width='200' height='50' align='center'><font color='#000'>".$fila['tarea']."</font></td>
                              <td width='200' height='50' align='center'><font color='#000'>".$fila['descripcion']."</font></td>
                              <td width='200' height='50' align='center'><font color='#000'>".$fila['material']."</font></td>
                              <td width='200' height='50' align='center'><font color='#000'>".$fila['duracion']."</font></td>

                          </tr>" ;
                        }

                        mysqli_close($link);

                    ?>

    			</tbody>
			</table>
		</div>

      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    	<script src="../js/bootstrap.min.js"></script>

	<!--</body>

</html>-->

<?php
include '../Plantilla/foot.php'
?>