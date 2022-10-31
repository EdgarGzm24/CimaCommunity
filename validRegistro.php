<?php
	require_once 'conexion.php';

	if(isset($_POST['inputMatricula']) && isset($_POST['inputCorreo']) && isset($_POST['inputContra'])){

		$idInsert = 0;
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
				move_uploaded_file($_FILES['image']['tmp_name'], $imagenPerfil);
			} else {
				
			}
		} else {
			
			// Como estoy usando ajax pienso mandar una alerta html con js de que no se pudo mandar el archivo
			// a la base asi que muestre en html lo que salio mal
		}

		$strMensaje="";
		$insertRegistro = "INSERT INTO login(idLogin, correo, contrasenia) VALUES (?,?,?)";

		if ($stmt = mysqli_prepare($conexion, $insertRegistro)) {
			mysqli_stmt_bind_param($stmt, "iss", $idInsert, $correo, $contrasena);
			mysqli_stmt_execute($stmt);
			$strMensaje.="La inserción en login fue exitosa. Filas insertadas: ".mysqli_stmt_affected_rows($stmt).PHP_EOL;

			$sql = "SELECT idLogin FROM login WHERE correo = '$correo'";
			$consulta = mysqli_query($conexion, $sql);
			$idLogin = mysqli_fetch_row($consulta);
		}else{
			$strMensaje.="La inserción en login fue errónea. Error: ".mysqli_stmt_error($stmt).PHP_EOL;

		}

		$insertUsuario = "INSERT INTO usuario (idusuario, matricula, nombre, apellido_p, apellido_m, fechaNacimiento, foto_usuario, carrera_idcarrera, login_idlogin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
		if ($stmt = mysqli_prepare($conexion, $insertUsuario)) {
			mysqli_stmt_bind_param($stmt, "iisssssii", $idInsert, $matricula, $nombre, $apPaterno, $apMaterno, $fechaNac, $imagenPerfil, $carrera, $idLogin[0]);
			mysqli_stmt_execute($stmt);
			$strMensaje.="La inserción en usuario fue exitosa. Filas insertadas: ".mysqli_stmt_affected_rows($stmt).PHP_EOL;
		}else{
			$strMensaje.="La inserción en usuario fue errónea. Error: ".mysqli_stmt_error($stmt).PHP_EOL;

		}
		mysqli_close($conexion);

		echo "<script>console.log('Console: " . $strMensaje . "' );</script>";
	}
?>