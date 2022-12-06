<?php
   require_once  'conexion.php';
    $publi = $_GET['id'];
    $sql = "DELETE FROM opiniones  WHERE  publi ='idopiniones'";
    $query = mysqli_query($conexion,$sql);
    if($query){
        Header("Location: publicacionOpinion.php");
    }
?>