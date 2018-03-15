
<?php
	$titulo="Personal";
	include '../Plantilla/head.php';
	include '../Plantilla/BBDD.php';
?>

<?php 
	
	

	if(!isset($_SESSION["departamento"])){
		$_SESSION["departamento"]="";
   	}	
								   						
	if( isset($_POST['buscar'])){
						
		$result = mysqli_query($link,"SELECT * FROM Departamentos WHERE nombre='".$_POST['nombre']."'");
		
		
		$contador=0;
		while ($row = mysqli_fetch_array($result)){  
		
			
			$_SESSION["departamento"]= $row['nombre'];
			$contador=$contador+1;
		
		}
		if($contador=0){$_SESSION["departamento"]= "";}
	}
	
	
	if( isset($_POST['elimEmpleado'])) {
			
		$sql = "UPDATE Empleados SET idDepartamento=0 WHERE id_empleado=".$_POST['eliminarEmpleado']."";
				mysqli_query($link, $sql);	
	}
	
	if( isset($_POST['anadir'])) {

		$sql = "INSERT INTO `Departamentos`(`nombre`) VALUES ('".$_POST['nombre']. "')";
				mysqli_query($link, $sql);
				
			$_SESSION["departamento"]=$_POST['nombre'];
	}
	
	if( isset($_POST['modificar'])) {
		
		$sql = "UPDATE `Departamentos` SET `nombre`='".$_POST['nombre']. "' WHERE `nombre`='".$_SESSION["departamento"]. "'";
	
				mysqli_query($link, $sql);
				
			$_SESSION["departamento"]=$_POST['nombre'];
	}

	if( isset($_POST['eliminar'])) {

		$sql ="UPDATE `Empleados` SET `idDepartamento`=0 WHERE `idDepartamento`=(SELECT `id_departamento` FROM `Departamentos` WHERE `nombre`='".$_SESSION["departamento"]."')";
		
		mysqli_query($link, $sql);

		$sql = "DELETE FROM `Departamentos` WHERE `nombre`='".$_SESSION["departamento"]. "'";
		
		mysqli_query($link, $sql);
				
			$_SESSION["departamento"]="";
	}
	
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
		
	<?php
	
		if(isset($_POST['anadirEmpleado'])){
			
			
			$sql = "UPDATE Empleados SET idDepartamento=(SELECT id_departamento  FROM Departamentos WHERE nombre='".$_POST['nombre']. "') WHERE id_empleado=".$_POST['id_empleado']."";
			mysqli_query($link, $sql);
			
		}	
	?>

        <!-- Page Content -->
        
            <div class="container-fluid">
				<form action="departamentos1.php" method="post">

					<div class="row">
						<div class="col-md-4">
						</div>

						<div class="col-md-8">
					
						<h1>
							<?php 
									if(isset($_SESSION["departamento"])){
										
											echo " Esta entrando ".$_SESSION["departamento"];
											
								 }
								?>
						</h1>
						</div>				
					</div>

                	<div class="row">
											
						<div class="col-md-4" action="departamento.php" method="post">
                            <span class="input-group-addon label label-default" id="basic-addon1">Nombre del Departamento</span>
                            <input type="text" style="width:300px" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Departamento" value="<?php 
									if(isset($_SESSION["departamento"])){
										
											echo $_SESSION["departamento"];
									 }  
									 ?>">
                        </div>
							
					</div>

					<div class="row">	
	                  			
						<div class="col-md-6">
							<input type="submit" style="margin-top:17px; width:150px  " class="btn btn-primary" name="anadirEmpleado" value="Añadir Empleado">								
						</div>


						<div class="col-md-3">
							  <span class="input-group-addon label label-default" id="basic-addon1">Añadir Empleado</span>
						  		<select name="id_empleado" style=" height:34px; width:250px" size=1>
							<?php 
		
								if(isset($_POST['buscar']) || isset($_POST['anadirEmpleado']) || isset($_POST['elimEmpleado']) || isset($_POST['anadir']) || isset($_POST['modificar'])){
								
								$result = mysqli_query($link,"SELECT * FROM Empleados WHERE idDepartamento=0");
			
								while ($row = mysqli_fetch_array($result)){  
								
									echo "<option value ='".$row['id_empleado']."'>".$row['nombre']." ".$row['apellidos']."</option>";
								
								
								}																						
							}
							?>
						  		</select>
						</div>		

						<div class="col-md-3">
						  <span class="input-group-addon label label-default" id="basic-addon1">Empleados de Departamento</span>
						  <select name="eliminarEmpleado" style=" height:120px; width:400px" size=5>
								  
						  	<?php 
		
								if(isset($_POST['buscar']) || isset($_POST['anadirEmpleado']) || isset($_POST['elimEmpleado']) || isset($_POST['anadir']) || isset($_POST['modificar'])){
									
									$result = mysqli_query($link, "SELECT * FROM Empleados WHERE idDepartamento=(SELECT id_departamento  FROM Departamentos WHERE nombre='".$_SESSION['departamento']. "')");
				
									while ($row = mysqli_fetch_array($result)){  
									
										echo "<option value='".$row['id_empleado']."'>".$row['id_empleado']." ".$row['nombre']." ".$row['apellidos']."</option>";
									
								
									}																							
								}
							?>
									
						  </select>


						</div>
					</div>

					<div class="row">

						<div class="col-md-2">
						  	  <input type="submit" style="margin-top:17px; width:150px" class="btn btn-primary" name="elimEmpleado" value="Eliminar Empleado">
						</div>
						
	                	</div>	
	                </div>

	                <div class="row">
	                	<br>
	                </div>

						<div class="row">
							</br>                  

									<div class="form-group col-md-1">
									  
									  <input type="submit" style="margin-top:17px; width:150px;  " class="btn btn-primary" name="buscar" value="Buscar">
									  
									</div>

									<div class="form-group col-md-1">
									  
									  <input type="submit" style="margin-top:17px; width:150px;  " class="btn btn-primary" name="anadir" value="Añadir">
									  
									  
									</div>

									<div class="form-group col-md-1">						  
									  
									  <input type="submit" style="margin-top:17px; width:150px;  " class="btn btn-primary" name="modificar" value="Modificar">
									  
									</div>

									<div class="form-group col-md-1">
									  
									  <input type="submit" style="margin-top:17px; width:150px;  " class="btn btn-primary" name="eliminar" value="Eliminar">
									  
									  
									</div>
		                </div>					
					</div>

				</form>
            </div>
        
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
 <?php
    include '../Plantilla/foot.php'
 ?>