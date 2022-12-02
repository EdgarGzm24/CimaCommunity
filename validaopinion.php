<?php
   
    require_once 'conexion.php';

    if($_POST['titulo'] && $_POST['des']) {
        $title = $_POST['titulo'];
        $review = $_POST['des'];
        $idOp = 0;
        $usser = 1;
        $grade = 3;
        $dateOp = date("Y-m-d H:i:s"); 
        $insertOpinion = "INSERT INTO opiniones(idopiniones,titulo, descripcion_opinion, calificacion, fecha_creacion_op,usuario_idusuario ) VALUES (?,?,?,?,?,?)";

        if ($sentencia = mysqli_prepare($conexion, $insertOpinion)) {
			mysqli_stmt_bind_param($sentencia,"issisi", $idOp, $title, $review, $grade, $dateOp ,$usser);
			mysqli_stmt_execute($sentencia);
		}
        mysqli_close($conexion);
		
    } 

?>