<?php
include '../Plantilla/BBDD.php';

?>
						<?php

						$nombre=$_POST['nombre_proveedor'];
						$telefono=$_POST['telefono'];
						$direccion=$_POST['direccion'];

                       $query = "INSERT INTO pedidos (direccion, tiempo_maximo, referencia_pedido) ".
     					"VALUES ('$nombre', '$telefono','$direccion')";
                       $EjecutarQuery = mysqli_query($link, $query)or die('Error en la ejecucion'); 

                       header('Location: Pedidos.php' )                       
                       ?>
