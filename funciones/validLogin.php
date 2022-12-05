<?php
    session_start();
    require_once 'conexion.php';

    if($_POST['correoInst'] && $_POST['contrasena']){
        $correo = $_POST['correoInst'];
        $contra = $_POST['contrasena'];

        $selectLogin = "SELECT * FROM login WHERE correo = '$correo' AND contrasenia = '$contra'";
        $consulta = mysqli_query($conexion, $selectLogin);
        $columna = mysqli_fetch_array($consulta);
        
        if(mysqli_num_rows($consulta) == 1){
            $_SESSION['usuario'] = $columna['idLogin'];
            header('location:../Inicio.php');
        } 
        mysqli_close($conexion);
    } 

?>