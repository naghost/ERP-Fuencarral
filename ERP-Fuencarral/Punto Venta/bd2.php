<?php
$Servidor="localhost";
$Usuario="root";
$Password="";
$BBDD="erp";
$link = new mysqli($Servidor, $Usuario, $Password, $BBDD);
if ($link->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
}
?>