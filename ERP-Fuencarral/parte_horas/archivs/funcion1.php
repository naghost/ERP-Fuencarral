<?php

$fecha = $_POST['fecha'];
$usuario = $_POST['usuario'];
$proyecto = $_POST['proyecto'];
$tarea = $_POST['tarea'];
$descripcion = $_POST['descripcion'];
$material = $_POST['material'];
$duracion = $_POST['duracion'];


$conexion = mysqli_connect('localhost', 'root', '') or die ("Hay un problema para la conexion!");

echo 'Connected successfully';


mysqli_select_db($conexion, "prueba") or die("No se pudo seleccionar la base de datos!");

mysqli_query($conexion, "INSERT INTO partes(fecha, usuario, id_proyecto_aux, tarea, descripcion, material, duracion) values ('$fecha', '$usuario', '$proyecto', '$tarea', '$descripcion', '$material', '$duracion')");


mysqli_close($conexion);

header("Location: index_parte.php");

?> 