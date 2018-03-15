	<?php
		$titulo="Ejemplo";
		include '../Plantilla/head.php';
		include '../Plantilla/BBDD.php';
	?>

		<?php
			session_start();

			if($_SESSION['log'] == false){
				header('location: index.html');
			}
		?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<button type="button" class="btn btn-primary" onclick="javascript:location.href='index.php'">Listado de Ordenes</button>
				</div>

				<div class="col-md-10">
					<form method="POST" action="add.php">
						<div class="form-group">
							<div class="col-md-10">
								<table class="table">
							  		<thead>
							    		<tr>
									      <th scope="col"></th>
									      <th scope="col">Nombre</th>
									      <th scope="col">Descripcion</th>
									      <th scope="col">Precio</th>
									      <th scope="col">Material</th>
									      <th scope="col">Punto de venta</th>
									      <!--<th scope="col">Cantidad</th>-->
									    </tr>
							  		</thead>
							  		<tbody>
									  	<?php
								    		$usuario = "root";
											$password = "Grado-Fuencarral-17";
											$servidor = "192.168.4.81";
											$basededatos = "ERP-Fuencarral";
											
											// creación de la conexión a la base de datos con mysql_connect()
											$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
											
											// Selección del a base de datos a utilizar
											$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

											// establecer y realizar consulta. guardamos en variable.
											$consultaProductos = "SELECT * FROM Productos";
											$consultaPuntosVenta = "SELECT * FROM puntosVenta";

											$resultadoProductos = mysqli_query( $conexion, $consultaProductos ) or die ( "Algo ha ido mal en la consulta a la base de datos");

											// Imprimir los resultados en HTML
											while ($columna = mysqli_fetch_array( $resultadoProductos )) {

												echo "<tr>";

												echo "<th scope='row'><input type='radio' name='product' value='".$columna['IDProducto']."'></th>";

												echo "<td>" . $columna['NombreProducto'] . "</td><td>" . $columna['Descripcion'] . "</td>" . "<td>" . $columna['Precio'] . "</td>";

												if($columna['Material']==0){
													echo "<td>No</td>";
												}else{
													echo "<td>Si</td>";
												}


												echo "<td>".$columna['PuntoVenta']."</td>";
												/*echo "<td>";
													echo "<select name = 'punto'>";

														$resultadoPuntosVenta = mysqli_query($conexion, $consultaPuntosVenta) or die(" Algo ha ido mal en la consulta a la base de datos");

														while ($columna1 = mysqli_fetch_array($resultadoPuntosVenta)) {
															echo "<option value = '".$columna1['idPunto']."'>".$columna1['nombre']."</option>";
														}
													echo "</select>";
												echo "</td>";

												echo "<td>".$columna['almacen']."</td>"."<td>".$columna['cantidad']."</td>";

												echo "</tr>";*/
											}

											// Liberar resultados
											mysqli_free_result($resultadoProductos, $resultadoPuntosVenta);
											
											// Cerrar la conexión
											mysqli_close($conexion);		
								    	?>
									</tbody>
								</table>
							</div>
						</div>

						<div class="row">
							<label>Cantidad: </label>
							<input type="text" name="cantidad">
						</div>

						<div class="row">
							<label class="col-md-4 control-label" for="Enviar"></label>
								<div class="col-md-4">
									<button type="submit" name="add" class="btn btn-primary">Crear Orden de Produccion</button>
								</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	<?php
		include '../Plantilla/foot.php'
	?>