<?php
   require_once  'conexion.php';
    $publi = $_GET['id'];
    $sql = "DELETE FROM opiniones  WHERE   idopiniones = '$publi'";
    $query = mysqli_query($conexion,$sql);
    if($query){
        Header("Location: ../publicacionOpinion.php");
    }
?>