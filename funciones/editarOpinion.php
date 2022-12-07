<?php
   require_once  'conexion.php';
    $titu = $_POST[''];
    $des = $_POST[''];
    $cal = $_POST[''];

    $sql = "UPDATE FROM opiniones SET  titulo = '$titu', descripcion_opinion ='$des', calificacion = '$cal' WHERE idopiniones = '$publi'";
    $query = mysqli_query($conexion,$sql);
    if($query){
        Header("Location: ../publicacionOpinion.php");
    }
?>