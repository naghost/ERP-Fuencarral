<?php
$id=$_GET['id'];
include "../../../Plantilla/BBDD.php";

$query="DELETE FROM Productos WHERE IDProducto=$id";
mysqli_query($link, $query);
mysqli_close($link);
header('Location: ../../index.php');

?>