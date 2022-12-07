<?php
   require_once  'conexion.php';
    $idopi =  $_POST['id'];
    $titu = $_POST['titulo'];
    $des = $_POST['des'];   

    $sql = "UPDATE opiniones SET  titulo = '$titu', descripcion_opinion ='$des' WHERE idopiniones = '$idopi'";
    $query = mysqli_query($conexion,$sql);
    if($query){
        Header("Location: ../publicacionOpinion.php");
    }
?>