<?php
    $host = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bd = "cimacommunity";

    $conexion = mysqli_connect($host, $usuario, $contrasena, $bd);
    $sql= "SELECT * FROM comunidades";
    $results = mysqli_query($conexion,$sql);
    $json_array = array();

    while($data = mysqli_fetch_assoc($results)){
        $json_array[] = $data;

    }
    echo json_encode($json_array);
    if (!$conexion) {
        print_r(mysqli_connect_error());
    } 
?>