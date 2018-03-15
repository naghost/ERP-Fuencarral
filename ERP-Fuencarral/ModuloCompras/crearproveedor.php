<?php
include '../Plantilla/BBDD.php';

?>
						<?php

						$nombre=$_POST['nombre_proveedor'];
						$telefono=$_POST['telefono'];
						$direccion=$_POST['direccion'];

                       $query = "INSERT INTO Proveedores (Nombre, Numero ,Direccion) ".
     					"VALUES ('$nombre', '$direccion', '$telefono')";
                       $EjecutarQuery = mysqli_query($link, $query)or die('Error en la ejecucion'); 

                       header('Location: Proveedores.php' )                       
                       ?>
