<?php
    session_start();
    require_once 'conexion.php';

    if($_POST['correoInst'] && $_POST['contrasena']){
        $correo = $_POST['correoInst'];
        $contra = $_POST['contrasena'];

        $selectLogin = "SELECT * FROM login WHERE correo = '$correo' AND contrasenia = '$contra'";
        $consulta = mysqli_query($conexion, $selectLogin);
        
        
        if(mysqli_stmt_num_rows($sentencia) == 1){
            
            $_SESSION['usuario'] = $resultado['idLogin'];
            header('location:Inicio.php');
        } 
        mysqli_close($conexion);
    } 

?>