<?php
    require_once  'conexion.php';
    session_start();
    $usuario = $_SESSION['usuario'];

    if(isset($_POST['descripcionPubli'])){

        $id = 0;
        $comunidad = $_POST['Comunidad'];
        $descripcion = $_POST['descripcionPubli'];
        $dateOp = date("Y-m-d H:i:s");
		$imagenPerfil = "";

        if(!empty($_FILES['image']['name'])){
			$tamanio = (4000 * 1024); // Kb
			$arregloImagen = explode(".", $_FILES['image']['name']);
			$extension = strtolower(end($arregloImagen));
			$extPermitidas = array('png', 'jpg', 'jpeg');

			$imagenPerfil = "images/imgPublicaciones/" . $_FILES['image']['name'];
			// No olvides hacer una funcion para cambiarle el nombre a cada foto que se suba al sistema

			if(in_array($extension, $extPermitidas)){
				if($_FILES['image']['size'] < $tamanio){
					move_uploaded_file($_FILES['image']['tmp_name'], "../".$imagenPerfil);
				} else {
					
				}
			} else {
				
				// Como estoy usando ajax pienso mandar una alerta html con js de que no se pudo mandar el archivo
				// a la base asi que muestre en html lo que salio mal
			}
		}

		$insertRegistro = "INSERT INTO publicaciones VALUES (?,?,?,?,?)";

		if ($sentencia = mysqli_prepare($conexion, $insertRegistro)) {
			mysqli_stmt_bind_param($sentencia, "isssi", $id, $descripcion, $dateOp, $imagenPerfil, $usuario);
			mysqli_stmt_execute($sentencia);
            $idPubli = mysqli_stmt_insert_id($sentencia);
            

            $insertRegistro = "INSERT INTO comunidades_has_publicaciones VALUES (?,?)";
            if ($sentencia = mysqli_prepare($conexion, $insertRegistro)) {
                mysqli_stmt_bind_param($sentencia, "ii", $comunidad, $idPubli);
                mysqli_stmt_execute($sentencia);
            }
    
		}
    }
?>