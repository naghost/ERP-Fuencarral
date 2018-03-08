<?php

session_start();

$conexion = new mysqli("192.168.4.81","root","Grado-Fuencarral-17", "ERP-Fuencarral");

$_SESSION['permiso'] = "vacio";

$usuario = $_POST["username"];
$contrasena = $_POST["contrasena"];


$sql = "SELECT * From Usuarios where Loguin = '" . $usuario . "'";

$result = mysqli_query($conexion,$sql);

$seleccion = mysqli_fetch_array($result);


if($seleccion==NULL){
	$_SESSION['fallo'] = true;
	header('Location: index.php');
}

//comentado mientras compruebo lo primero
if ($seleccion!=NULL) {
	$sql2 = "SELECT * From Usuarios where Loguin= '" . $usuario . "'";

	$result2 = mysqli_query($conexion,$sql2);

	$seleccion2 = mysqli_fetch_array($result2);

	if($contrasena != $seleccion2['Contrasena'] || $contrasena==NULL ){
		$_SESSION['fallo'] = true;
		header('Location: index.php');
	}


	if($seleccion!=NULL || $seleccion2!=NULL){

		echo "hoola";

		//inicio variable de sesion con el loguin y el booleano de conexion
		$_SESSION['nombre'] = $usuario ;
		$_SESSION['log'] = true;

		$sql4 = "Select * From PermisosAcceso where Id_Permiso = '" .$seleccion['IdAuxPermiso']. "'";

		$result4 = mysqli_query($conexion, $sql4);

		$seleccion4 = mysqli_fetch_array($result4);

		$sql3 = "Select * From Modulo where Id_Modulo = '" .$seleccion4['IdAuxModulo']. "'";

		$result3 = mysqli_query($conexion, $sql3);

		$seleccion3 = mysqli_fetch_array($result3);



		if($seleccion3['Inventario_p']=="si" && $seleccion3['Fabricacion_p']=="si" && $seleccion3['PVenta_p']=="si" && $seleccion3['Ventas_p']=="si" && $seleccion3['Contabilidad_p']=="si" && $seleccion3['Compras_p']=="si" && $seleccion3['Personal_p']=="si" && $seleccion3['Agenda_p']=="si" && $seleccion3['Chat_p']=="si" && $seleccion3['PHoras_p']=="si" && $seleccion3['Proyecto_p']=="si"){

			$_SESSION['permiso'] = "admin";

			header('Location: ejemplo.php');


		}else if($seleccion3['Inventario_p']=="si" && $seleccion3['Fabricacion_p']=="si" && $seleccion3['PVenta_p']=="no" && $seleccion3['Ventas_p']=="no" && $seleccion3['Contabilidad_p']=="no" && $seleccion3['Compras_p']=="no" && $seleccion3['Personal_p']=="no" && $seleccion3['Agenda_p']=="no" && $seleccion3['Chat_p']=="no" && $seleccion3['PHoras_p']=="no" && $seleccion3['Proyecto_p']=="no"){

			$_SESSION['permiso'] = "fabricante";

			header('Location: ejemplo.php');


		}else if($seleccion3['Inventario_p']=="no" && $seleccion3['Fabricacion_p']=="no" && $seleccion3['PVenta_p']=="si" && $seleccion3['Ventas_p']=="si" && $seleccion3['Contabilidad_p']=="no" && $seleccion3['Compras_p']=="no" && $seleccion3['Personal_p']=="no" && $seleccion3['Agenda_p']=="no" && $seleccion3['Chat_p']=="si" && $seleccion3['PHoras_p']=="no" && $seleccion3['Proyecto_p']=="no"){

			$_SESSION['permiso'] = "vendedor";

			header('Location: ejemplo.php');
		}

	}



	
}


?>