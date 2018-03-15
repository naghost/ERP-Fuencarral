<?php

	session_start();

	if($_SESSION['log'] == false){
		header('location: index.html');
	}

	$producto = $_POST['product'];
	$punto = $_POST['punto'];
	$cantidad = $_POST['cantidad'];

	$usuario = "root";
	$password = "Grado-Fuencarral-17";
	$servidor = "192.168.4.81";
	$basededatos = "ERP-Fuencarral";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	$insert = "INSERT INTO ordenFabricacion (cantidad, idProductoAUX) VALUES ('".$cantidad."', '".$producto."')";

	//$resultadoOrdenes = mysqli_query( $conexion, $insert ) or die("Algo ha salido MUUUY MAL jajajaja (y no te dire el que xddd)");

	if(mysqli_query($conexion, $insert)){
		header('location: index.php');
	}else{
		echo "error";
	}


 ?>