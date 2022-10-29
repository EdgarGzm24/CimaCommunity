<?php
    $host = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bd = "cimacommunity";

    $conexion = mysqli_connect($host, $usuario, $contrasena, $bd);
    
    if (!$conexion) {
        print_r(mysqli_connect_error());
    } 
?>