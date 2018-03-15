
<?php
    $titulo="Personal";
    include '../Plantilla/head.php';
    include '../Plantilla/BBDD.php';
?>

    <div id="wrapper">

        <nav id="sidebar">
                    <!-- Sidebar Links -->
                    <ul class="list-unstyled components">

                        <li><!-- Link with dropdown items -->
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Personal</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="infopersonal.php">Info. Personal</a></li>
                            <li><a href="departamentos1.php">Departamentos</a></li>
                            <li><a href="checkeo1.php">Control de asistencia</a></li>
                        </ul>
                    </ul>
                </nav>
        <!-- Page Content -->
        <div id="page-content-wrapper">


            <div class="container-fluid">
				<form action="checkeo1.php" method="post">

                    <div class="row">
                        <br>
                    </div>
					<div class="row">

							<div class="form-group col-md-1">
                           	</div>

							<div class="form-group col-md-3">
								<span class="input-group-addon label label-default" id="basic-addon1">Id de Empleados</span>
								<input type="text" style="width:300px" class="form-control" name="dni" id="dni" placeholder="Id de Empleado">
							</div>
						
							<div class="form-group col-md-4">
								<span class="input-group-addon label label-default" id="basic-addon1">Fecha de Inicio</span>
								<input type="date" style="width:300px" class="form-control" name="fechainicio" id="dni" placeholder="Fecha de Inicio">
							</div>
                            <div class="form-group col-md-4">
                                <span class="input-group-addon label label-default" id="basic-addon1">Fecha de Fin</span>
                                <input type="date" style="width:300px" class="form-control" name="fechafin" id="dni" placeholder="Fecha de Fin">
                                <input type="submit" style="margin-top:17px; width:150px  " class="btn btn-primary" name="consulta" value="Consultar">
                            </div>
							
					</div>
									
						<div class="col-md-12" style="margin-top:50px">
						<div class="form-group col-md-1">
                           
                        </div>
					 <div class="form-group col-md-12">
                        <label for="usuarios">Resultados de búsqueda</label>
						 <div style="height:200px; overflow-y:scroll">
                            <table class="table">                            
                                <thead>
                                    <tr>
                                        <th>Id Cliente</th>
                                        <th>Nombre Cliente</th>
                                        <th> Fecha Entrada</th>
										<th> Hora Entrada</th>
										<th> Fecha Salida</th>
										<th> Hora Salida</th>
                                       
                                    </tr>



<?php

            if(isset($_POST['fechafin']) && isset($_POST['fechainicio']) && isset($_POST['dni'])){


                     $sql = "SELECT * FROM `Checkeo` INNER JOIN Empleados ON Empleados.id_empleado = Checkeo.idEmpleado WHERE `idEmpleado`= ".$_POST['dni']." AND `fechaInicio`>='".$_POST['fechainicio']."' AND `fechaFin`<='".$_POST['fechafin']."'";
                // $sql = "SELECT `idCheckeo`, `idEmpleado`, `horaInicio`, `horaFin`, `fechaInicio`, `fechaFin` FROM `Checkeo` WHERE `idEmpleado`= ".$_POST['dni']." AND `fechaInicio`>='".$_POST['fechainicio']."' AND `fechaFin`<='".$_POST['fechafin']."'" ;
                $result = mysqli_query($link, $sql);

                    if (mysqli_num_rows($result) > 0) {
                 while($row = mysqli_fetch_assoc($result)) {

                            echo "<tr>
                                        <th>" . $row["idEmpleado"]. "</th>
                                        <th>" . $row["nombre"]. " ". $row["apellidos"]."</th>
                                        <th>" . $row["fechaInicio"]. "</th>
                                        <th>" . $row["horaInicio"]. "</th>
                                        <th>" . $row["fechaFin"]. "</th>
                                        <th> " . $row["horaFin"]. "</th>
                                       
                                    </tr>";


               
            }
         } else {
           
         }




            }

?>
									
									
									
									
									
                                </thead>
                            </table>
						</div>	
                  </div>
              </div>
					</div>
				</form>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
  <?php
    include '../Plantilla/foot.php'
 ?>