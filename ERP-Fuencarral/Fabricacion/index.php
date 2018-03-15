
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
		<form method="POST" action="delete.php">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<button type="button" class="btn btn-primary" onclick="javascript:location.href='nuevaOrden.php'">Nueva Orden de Produccion</button>
					</div>
					<div class="col-md-10">
						<div class="col-md-10">
							<button type="submit" name="orden" class="btn btn-primary">Borrar</button>
						</div>
					

					<div class="row">
						<div class="col">
							<table class="table">
								<thead>
							    	<tr>
							    		<th scope="col">#</th>
								    	<th scope="col">Producto</th>
								    	<th scope="col">Cantidad</th>
								    	<!--<th scope="col">Tareas</th>-->
							    	</tr>
							    	<?php
							    		$usuario = "root";
										$password = "Grado-Fuencarral-17";
										$servidor = "192.168.4.81";
										$basededatos = "ERP-Fuencarral";

										$direccion = "nuevaOrden.php";
										
										// creación de la conexión a la base de datos con mysql_connect()
										$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
										
										// Selección del a base de datos a utilizar
										$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

										// establecer y realizar consulta. guardamos en variable.
										$consultaOrden = "SELECT * FROM ordenFabricacion";

										$resultadoOrden = mysqli_query( $conexion, $consultaOrden ) or die ( "Algo ha ido mal en la consulta a la base de datos");

										// Imprimir los resultados en HTML
										while ($columna = mysqli_fetch_array( $resultadoOrden )) {

											/*$consultaProductos = "SELECT Productos.NombreProducto FROM Productos INNER JOIN (fabrica INNER JOIN ordenFabricacion ON ordenFabricacion.idOrden = fabrica.idOrden) ON fabrica.idProducto = Productos.IDProducto WHERE ordenFabricacion.idOrden = ".$columna['idOrden'] ;*/

											$consultaProductos = "SELECT Productos.NombreProducto FROM Productos INNER JOIN ordenFabricacion ON ordenFabricacion.idProductoAUX = Productos.idProducto WHERE ordenFabricacion.idOrden = ".$columna['idOrden'];

											$resultadoProductos = mysqli_query( $conexion, $consultaProductos ) or die ( "Algo ha ido mal en la consulta a la base de datos");  

											$columnaProductos = mysqli_fetch_array($resultadoProductos);

											echo "<tr>";
											echo "<td>
											<input type='radio' name='orden' value='".$columna['idOrden']."'>
											</td>";

											echo "<td>".$columnaProductos['NombreProducto']."</td> <td>".$columna['cantidad']."</td>";

											
											echo "<tr>";

										    /*echo "<tr>";
											echo "<td>" . $columna['idOrden'] . "</td><td>" . $columna['productos'] . "</td>" . "<td>" . $columna['puntoVenta'] . "</td>";
											echo "</tr>";*/
										}

										// Liberar resultados
										mysqli_free_result($resultadoOrden);

										// Cerrar la conexión
										mysqli_close($conexion);
							    	?>
								</thead>
							</table>
						</div>
					</div>
				</div>			
			</div>
		</form>

	<?php
		include '../Plantilla/foot.php'
	?>
