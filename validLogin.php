<?php
	require_once  'conexion.php';

	if(isset($_POST['inputMatricula']) && isset($_POST['inputCorreo']) && isset($_POST['inputContra'])){

		$matricula = $_POST['inputMatricula'];
		$nombre = $_POST['inputNombre'];
		$apPaterno = $_POST['inputApellidoP'];
		$apMaterno = $_POST['inputApellidoM'];
		$fechaNac = $_POST['inputNacimiento'];
		$carrera = $_POST['carrera'];
		$correo = $_POST['inputCorreo'];
		$contrasena = $_POST['inputContra'];

		$tamanio = ;
		$directorio = "images/imgPerfiles/";
		$imagenPerfil = $directorio . $_FILES['image']['name'];


		$strMensaje="";
		$insertBoleto = "INSERT INTO login VALUES (?,?,?)";

		if ($stmt = mysqli_prepare($conexion, $insertBoleto)) {
			mysqli_stmt_bind_param($stmt, "iss", 0, $correo, $contrasena);
			mysqli_stmt_execute($stmt);
			$strMensaje.="La inserción en login fue exitosa. Filas insertadas: ".mysqli_stmt_affected_rows($stmt).PHP_EOL;

			$sql = "SELECT idLogin FROM login WHERE correo =".$correo;
			$idLogin = mysqli_query($conexion, $sql);
		}else{
			$strMensaje.="La inserción en login fue errónea. Error: ".mysqli_stmt_error($stmt).PHP_EOL;

		}

		$insertUsuario = "INSERT INTO usuario (idusuario, matricula, nombre, apellido_p, apellido_m, fechaNacimiento, foto_usuario, carrera_idcarrera, login_idlogin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
		if ($stmt = mysqli_prepare($conexion, $insertUsuario)) {
			mysqli_stmt_bind_param($stmt, "iisssssii", 0, $matricula, $nombre, $apPaterno, $apMaterno, $fechaNac, $imagenPerfil, $carrera, $idLogin);
			mysqli_stmt_execute($stmt);
			$strMensaje.="La inserción en usuario fue exitosa. Filas insertadas: ".mysqli_stmt_affected_rows($stmt).PHP_EOL;
		}else{
			$strMensaje.="La inserción en usuario fue errónea. Error: ".mysqli_stmt_error($stmt).PHP_EOL;

		}
		mysqli_close($conexion);

		echo "<script>console.log('Console: " . $strMensaje . "' );</script>";
	}

?>