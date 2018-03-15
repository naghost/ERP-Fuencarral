<?php

	session_start();

	if($_SESSION['log'] == false){
		header('location: index.html');
	}
	
	$orden = $_POST['orden'];

	echo $orden;

	$usuario = "root";
	$password = "Grado-Fuencarral-17";
	$servidor = "192.168.4.81";
	$basededatos = "ERP-Fuencarral";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	$delete = "DELETE FROM ordenFabricacion WHERE idOrden = ".$orden;

	//$resultadoOrdenes = mysqli_query( $conexion, $insert ) or die("Algo ha salido MUUUY MAL jajajaja (y no te dire el que xddd)");

	if(mysqli_query($conexion, $delete)){
		header('location: index.php');
	}else{
		echo "error";
	}


 ?>