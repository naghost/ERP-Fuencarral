<?php 
include "../../../Plantilla/BBDD.php";
$Almacen = $_POST['Almacen'];
$Producto = $_POST['Producto'];
$Cantidad = $_POST['Cantidad'];


if((int)$Cantidad !=0){
	$queryAUX= "SELECT * FROM AlmacenProductos WHERE IDAlmacen=$Almacen AND IDProducto=$Producto";
	$Ejecutar =mysqli_query($link,$queryAUX);
	if(mysqli_num_rows($Ejecutar)==0){
		$query= "INSERT INTO AlmacenProductos VALUES($Almacen,$Producto,$Cantidad)";
	}else{
	 $query ="UPDATE AlmacenProductos SET Cantidad=$Cantidad WHERE IDAlmacen=$Almacen AND IDProducto=$Producto";
	}

}else{
	$query = "DELETE FROM AlmacenProductos WHERE IDAlmacen=$Almacen AND IDProducto=$Producto";

}
echo "$query";

mysqli_query($link,$query) or die('Error en ejecucion de la consulta');
header('Location: ../../ProductoAlmacen.php');


?>