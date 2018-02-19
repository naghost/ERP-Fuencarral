<?php
$Servidor="192.168.4.81";
$Usuario="root";
$Password="Grado-Fuencarral-17";
$BBDD="ERP-Fuencarral";
$link = new mysqli($Servidor, $Usuario, $Password, $BBDD);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
}
?>