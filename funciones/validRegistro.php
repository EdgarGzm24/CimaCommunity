<?php
	require_once 'conexion.php';

	if(isset($_POST['inputMatricula']) && isset($_POST['inputCorreo']) && isset($_POST['inputContra'])){

		$idInsert = 0;
		$alumno = 1;
		$matricula = $_POST['inputMatricula'];
		$nombre = $_POST['inputNombre'];
		$apPaterno = $_POST['inputApellidoP'];
		$apMaterno = $_POST['inputApellidoM'];
		$fechaNac = $_POST['inputNacimiento'];
		$carrera = $_POST['carrera'];
		$correo = $_POST['inputCorreo'];
		$contrasena = $_POST['inputContra'];

		$tamanio = (4000 * 1024); // Kb
		$arregloImagen = explode(".", $_FILES['image']['name']);
		$extension = strtolower(end($arregloImagen));
		$extPermitidas = array('png', 'jpg', 'jpeg');

		$imagenPerfil = "images/imgPerfiles/" . $_FILES['image']['name'];
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

		$insertRegistro = "INSERT INTO login(idLogin, correo, contrasenia) VALUES (?,?,?)";

		if ($sentencia = mysqli_prepare($conexion, $insertRegistro)) {
			mysqli_stmt_bind_param($sentencia, "iss", $idInsert, $correo, $contrasena);
			mysqli_stmt_execute($sentencia);
			$idLogin = mysqli_stmt_insert_id($sentencia);
		}

		$insertUsuario = "INSERT INTO usuario (idusuario, matricula, nombre, apellido_p, apellido_m, fechaNacimiento, foto_usuario, carrera_idcarrera, login_idlogin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
		if ($sentencia = mysqli_prepare($conexion, $insertUsuario)) {
			mysqli_stmt_bind_param($sentencia, "iisssssii", $idInsert, $matricula, $nombre, $apPaterno, $apMaterno, $fechaNac, $imagenPerfil, $carrera, $idLogin);
			mysqli_stmt_execute($sentencia);
			$idUsuario = mysqli_stmt_insert_id($sentencia);
		}

		$insertTipoUser = "INSERT INTO usuario_has_tipo_usuario VALUES (?, ?)"; 
		if ($sentencia = mysqli_prepare($conexion, $insertTipoUser)) {
			mysqli_stmt_bind_param($sentencia, "ii", $idUsuario, $alumno);
			mysqli_stmt_execute($sentencia);
		}
		mysqli_close($conexion);
	}
?>