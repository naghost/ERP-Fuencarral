<?php
$titulo="Ejemplo";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';
?>

<?php

  
    $cliente = $_POST['cliente'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $estado = 'onGoing';
    $fecha=date("y-m-d");
    $idIngreso;
    




    //acceso base de datos
    $link = mysqli_connect('192.168.4.81', 'root', 'Grado-Fuencarral-17')or die('No se pudo conectar: ' .mysql_error());
            mysqli_select_db($link, 'ERP-Fuencarral') or die('No se pudo seleccionar la base de datos');
    $tildes = $link->query("SET NAMES 'utf8'");

    //sacar id productos

    $mostrar_productos="Select * from Productos Where NombreProducto = " .$producto;
    $mostrar_productosf=mysqli_query($link,$mostrar_productos);
    $mostrar_productosff=mysqli_fetch_array($mostrar_productosf);

    //sacar id empleado implementar cuando se tenga modulo

    /*$mostrar_empleado="Select idEmpleado from empleado Where idEmpleado = " .$empleado;
    $mostrar_empleadof=mysqli_query($link,$mostrar_Cliente);
    $mostrar_empleadoff=mysqli_fetch_array($mostrar_Clientef);*/

    //pruebas hasta tener la base de datos real
    
    $mostrar_empleado="Select id_empleado from Empleados inner join Usuarios on Empleados.id_empleado=Usuarios.IdAuxEmpleado Where Usuarios.Id_Usuario = '"$_SESSION['nombre']"'";
    $mostrar_empleadof=mysqli_query($link,$mostrar_empleado);
    $mostrar_empleadoff=mysqli_fetch_array($mostrar_empleadof);

    //sacar id cliente

     $mostrar_cliente="Select idCliente from Cliente Where nombreEmpresa = " .$cliente;
    $mostrar_clientef=mysqli_query($link,$mostrar_cliente);
    $mostrar_clienteff=mysqli_fetch_array($mostrar_clientef);

//insertar datos en contabilidad


    $total = $mostrar_productosff['precio'] * $cantidad;
    echo $total;

    $insertarCont = 'insert into Ingresos (fecha, cuantia)  values ("'.$fecha.'","' .$total. '")' or die('No se pudo seleccionar la base de datos');  

    mysqli_query($link, $insertarCont);

    //sacar los datos del ultimo ingreso, para completar la tabla ventas

    $mostrar_cont="Select * from Ingresos";
    $mostrar_contf=mysqli_query($link,$mostrar_cont);
    $mostrar_contff=mysqli_fetch_array($mostrar_contf);

    while ($fila = mysqli_fetch_array($mostrar_Clientef) ){

      $idIngreso = $fila['id_ingreso'];

    }



    /**
    *
    *inserta los datos en la tabla de ventas, con sus respectivas id auxiliares y datos necesarios
    *
    */
    
    $insertar = 'insert into Ventas (fechaOrden, idClienteAux, idEmpleadoAux, idIngresosAux, estado, cantidad)  values ("'.$fecha.'","' .$mostrar_clienteff['idCliente']. '","' .$mostrar_empleadoff['id_empleado']. '","' .$idIngreso. '","' .$estado. '")' or die('No se pudo seleccionar la base de datos');  

    mysqli_query($link, $insertar);


   


    //insertar datos
    /*// usar cuando tenga todos los modulos
    $insertar = 'insert into ventas (fechaOrden, idClienteAux, idEmpleadoAux, idContabilidadAux, idProductoAux, estado, cantidad)  values ("'.$titulo. '","' .$editorial. '","' .$ISBN. '","' .$materia. '","' .$mostrar_productosff['idProductos']. '","' .$estado. '","' .$cantidad. '")' or die('No se pudo seleccionar la base de datos'); */

   /* $insertar = 'insert into Ventas (fechaOrden, idClienteAux, idEmpleadoAux, idContabilidadAux, idProductoAux, estado, cantidad)  values ("' .$mostrar_clienteff['idCliente']. '","' .$mostrar_empleadoff['id_empleado']. '","' .$mostrar_contff['idContabilidadAux']. '","' .$mostrar_productosff['idProductos']. '","' .$estado. '","' .$cantidad. '")' or die('No se pudo seleccionar la base de datos'); 

    mysqli_query($link, $insertar); */
    echo '<br>';
    echo 'Se ha introducido el registro';


  
?>

<?php
include '../Plantilla/foot.php'
?>