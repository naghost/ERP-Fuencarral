<?php
$titulo="Ejemplo";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';
?>
<?php 
		//include("conexion.php");
		//$link=Conectarse(); 
		session_start();
		
	if(!isset($_SESSION["departamento"])){
		
		

											$_SESSION["departamento"]="";
										   }	
										   
										   
		
	if( isset($_POST['buscar'])){
								
								$result = mysql_query("SELECT * FROM Departamentos WHERE nombre='".$_POST['nombre']."'", $link);
								
								
								$contador=0;
								while ($row = mysql_fetch_array($result)){  
								
									
									$_SESSION["departamento"]= $row['nombre'];
									$contador=$contador+1;
								
								}
								if($contador=0){$_SESSION["departamento"]= "";}
	}
	
	
	if( isset($_POST['elimEmpleado'])) {
		
		
	
		$sql = "UPDATE Empleados SET idDepartamento=0 WHERE id_empleado=".$_POST['eliminarEmpleado']."";
				mysql_query($sql, $link);
		
		
	}
	
	if( isset($_POST['anadir'])) {
		
		$sql = "INSERT INTO `Departamentos`(`nombre`) VALUES ('".$_POST['nombre']. "')";
				mysql_query($sql, $link);
				
			$_SESSION["departamento"]=$_POST['nombre'];
	}
	
	if( isset($_POST['modificar'])) {
		
		$sql = "UPDATE `Departamentos` SET `nombre`='".$_POST['nombre']. "' WHERE `nombre`='".$_SESSION["departamento"]. "')";
		echo "UPDATE `Departamentos` SET `nombre`='".$_POST['nombre']. "' WHERE `nombre`='".$_SESSION["departamento"]. "')";
				mysql_query($sql, $link);
				
			$_SESSION["departamento"]=$_POST['nombre'];
	}
	
		?>
	
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style='overflow-x : hidden;'>
                <ul class="sidebar-nav">
                    <li>
                        <a href="index.html"> Empleados </a>
                     </li>
                        <ul>
                            <li>
                                <a href="infopersonal.html"> Info. Personal </a>
                            </li>
                            <li>
                                <a href="vacaciones.html"> Vacaciones </a>
                            </li>
                            <li>
                                    <a href="checkeo.html"> Checkeo </a>
                            </li>
                        </ul>
                   
                    <li>
                        <a href=""> Departamentos </a>
                    </li>

                    <li>
                        <a href=""> Categorías </a>
                    </li>
                    
                </ul>

            </div>
        <!-- /#sidebar-wrapper -->
		
		<?php
		
			if(isset($_POST['anadirEmpleado'])){
				
				
				$sql = "UPDATE Empleados SET idDepartamento=(SELECT id_departamento  FROM Departamentos WHERE nombre='".$_POST['nombre']. "') WHERE id_empleado=".$_POST['id_empleado']."";
				mysql_query($sql, $link);
				
			}
			
			
			
		?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
				<form action="departamentos.php" method="post">
				<div class="row">
				<div class="col-md-4"></div>
					<div class="col-md-8">
					
						<h1><?php 
									if(isset($_SESSION["departamento"])){
										
											echo " Esta entrando ".$_SESSION["departamento"];
											
								 }
								?></h1>
					</div>
				
				</div>
                <div class="row">
                    <div class="col-md-12">
					</br>
                    <div class="form-group col-md-1">
                           
                        </div>
					
						<div class="form-group col-md-3" action="departamento.php method="post">
                            <span class="input-group-addon label label-default" id="basic-addon1">Nombre del Departamento</span>
                            <input type="text" style="width:300px" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Departamento" value="<?php 
									if(isset($_SESSION["departamento"])){
										
											echo $_SESSION["departamento"];
									 }  
									 ?>">
                        </div>
							<div class="form-group col-md-1">
							</div>
							<div class="form-group col-md-3">
							  <span class="input-group-addon label label-default" id="basic-addon1">Añadir Empleado</span>
								<br>
							  <select name="id_empleado" style=" height:34px; width:250px" size=1>
								<?php 
		
								if(isset($_POST['buscar']) || isset($_POST['anadirEmpleado']) || isset($_POST['elimEmpleado']) || isset($_POST['anadir']) || isset($_POST['modificar'])){
								
								$result = mysql_query("SELECT * FROM Empleados WHERE idDepartamento=0", $link);
			
								while ($row = mysql_fetch_array($result)){  
								
									echo "<option value ='".$row['id_empleado']."'>".$row['nombre']." ".$row['apellidos']."</option>";
								
								
								}
								
								
								
							}?>
							  </select>
							</div>
							<div class="form-group col-md-2">
							<input type="submit" style="margin-top:17px; width:150px  " class="btn btn-primary" name="anadirEmpleado" value="Añadir Empleado">
								
							</div>
						
						
						
					
					</div>
					
					<div class="col-md-12">
					</br>
                  			
						<div class="col-md-1">
                           
                        </div>
				
						<div class="form-group col-md-3">
							 
							  
						</div>
						
						<div class="col-md-1">
                           
                        </div>
							
							<div class="form-group col-md-3">
							  <span class="input-group-addon label label-default" id="basic-addon1">Empleados de Departamento</span>
								<br>
							  <select name="eliminarEmpleado" style=" height:120px; width:400px" size=5>
							  
							  <?php 
		
							if(isset($_POST['buscar']) || isset($_POST['anadirEmpleado']) || isset($_POST['elimEmpleado']) || isset($_POST['anadir']) || isset($_POST['modificar'])){
								
								$result = mysql_query("SELECT * FROM Empleados WHERE idDepartamento=(SELECT id_departamento  FROM Departamentos WHERE nombre='".$_SESSION['departamento']. "')", $link);
			
								while ($row = mysql_fetch_array($result)){  
								
									echo "<option value='".$row['id_empleado']."'>".$row['id_empleado']." ".$row['nombre']." ".$row['apellidos']."</option>";
								
								
								}
								
								
								
							}?>
								
							  </select>
							  <br/>
							  	  <input type="submit" style="margin-top:17px; width:150px; margin-left:260px " class="btn btn-primary" name="elimEmpleado" value="Eliminar Empleado">
						</div>
					</div>
                
				

				
				<div class="col-md-12">
					</br>
                    
						<div class="form-group col-md-2"></div>
							<div class="form-group col-md-2">
							  
							  <input type="submit" style="margin-top:17px; width:150px;  " class="btn btn-primary" name="buscar" value="Buscar">
							  
							</div>
							<div class="form-group col-md-2">
							  
							  <input type="submit" style="margin-top:17px; width:150px;  " class="btn btn-primary" name="anadir" value="Añadir">
							  
							  
							</div>
							<div class="form-group col-md-2">
							  
							  
							  <input type="submit" style="margin-top:17px; width:150px;  " class="btn btn-primary" name="modificar" value="Modificar">
							  
							</div>
							<div class="form-group col-md-2">
							  
							  <button type="button" style="margin-top:17px; width:150px;" class="btn btn-primary">Eliminar</button>
							  
							</div>
                </div>
				
				
				
				
				</div>
				
				
				
				
				</form>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
include '../Plantilla/foot.php'
?>