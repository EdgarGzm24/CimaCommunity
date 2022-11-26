<?php
    session_start();

    require_once 'conexion.php';

    if($_POST['correoInst'] && $_POST['contrasena']){
        $correo = $_POST['correoInst'];
        $contra = $_POST['contrasena'];

        $selectLogin = "SELECT * FROM login WHERE correo = ? AND contrasenia = ?";

        if ($stmt = mysqli_prepare($conexion, $selectLogin)) {
			mysqli_stmt_bind_param($stmt, "ss", $correo, $contra);
			mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt) == 1){
                $_SESSION['nombre'] = $nombre;
                header('location:Inicio.php');
            } else {
                header('location:Login.php?error=1');
            }
            mysqli_close($conexion);
		}
    } 

?>