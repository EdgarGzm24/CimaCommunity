<?php
    session_start();
    require_once 'conexion.php';

    if($_POST['correoInst'] && $_POST['contrasena']){
        $correo = $_POST['correoInst'];
        $contra = $_POST['contrasena'];

        $selectLogin = "SELECT * FROM login WHERE correo = ? AND contrasenia = ?";
        $sentencia = mysqli_prepare($conexion, $selectLogin);
        mysqli_stmt_bind_param($sentencia, "ss", $correo, $contra);
        mysqli_stmt_execute($sentencia);
        mysqli_stmt_store_result($sentencia);
        
        if(mysqli_stmt_num_rows($sentencia) == 1){
            //resultado = mysqli_stmt_get_result($sentencia);
            //$_SESSION['idusuario'] = $resultado['idLogin'];
            header('location:Inicio.php');
        } 
        mysqli_close($conexion);
    } 

?>