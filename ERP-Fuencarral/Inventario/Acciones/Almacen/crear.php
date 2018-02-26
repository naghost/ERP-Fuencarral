<?php 
include "../../../Plantilla/BBDD.php";
$Nombre = $_POST['Nombre'];
$Direccion = $_POST['Direccion'];
$query = "INSERT INTO Almacen VALUES(NULL, '$Nombre', '$Direccion')";

mysqli_query($link,$query) or die('Error en ejecucion de la consulta');
header('Location: ../../Almacen.php');


?>