<?php
$id=$_GET['id'];
include "../../../Plantilla/BBDD.php";

$query="DELETE FROM Almacen WHERE IDAlmacen=$id";
mysqli_query($link, $query);
mysqli_close($link);
header('Location: ../../Almacen.php');

?>