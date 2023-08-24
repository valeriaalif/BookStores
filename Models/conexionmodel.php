<?php

//Metodo para conectar a la base de datos.

function conectar() {
    $usuario = 'Proyecto2';//'System';
    $password = 'root';//'root'; //;
    $baseDatos = '';//'localhost/proy';

    $conn = oci_connect($usuario, $password, $baseDatos);

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
    return $conn;
}

//Metodo para desconectar de la base de datos.

function desconectar($conn) {
    oci_close($conn);
}