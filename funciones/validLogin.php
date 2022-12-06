<?php
    session_start();
    require_once 'conexion.php';

    if($_POST['correoInst'] && $_POST['contrasena']){
        $correo = $_POST['correoInst'];
        $contra = $_POST['contrasena'];

        $selectLogin = "SELECT idusuario FROM login INNER JOIN usuario ON login.idLogin = usuario.login_idLogin WHERE login.correo = '$correo' AND login.contrasenia = '$contra'";
        $consulta = mysqli_query($conexion, $selectLogin);
        $columna = mysqli_fetch_array($consulta);
        
        if(mysqli_num_rows($consulta) == 1){
            $_SESSION['usuario'] = $columna['idusuario'];
            header('location:../Inicio.php');
        } 
        mysqli_close($conexion);
    } 

?>