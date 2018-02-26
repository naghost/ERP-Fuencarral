<?php
include "../../../Plantilla/BBDD.php";
$nombre = $_POST['Nombre'];
$descripcion = $_POST['Descripcion'];
$precio = $_POST['Precio'];
$PuntoVenta;
if (isset($_POST['PuntoVenta'])) {
$PuntoVenta=1;
}else {
	$PuntoVenta=0;
}
$Material;
if (isset($_POST['Material'])) {
$Material=1;
}else {
	$Material=0;
}
$query = "INSERT INTO Productos VALUES(NULL, '$nombre', '$descripcion', $precio, $Material, $PuntoVenta)";
mysqli_query($link, $query) or die('Error al realizar la inserccion del dato');
header('Location: ../../index.php');
?>