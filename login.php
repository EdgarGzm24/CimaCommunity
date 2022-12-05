<?php
	require_once  'funciones/conexion.php';
	
	$sql = "SELECT * FROM campus";
	$query = mysqli_query($conexion, $sql);
	$filas = mysqli_fetch_all($query, MYSQLI_ASSOC); 
	mysqli_close($conexion);

	if(isset($_GET['error'])){
		
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>CimaCommunity</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/estilosLogin.css">
	<!--===============================================================================================-->
</head>
<body>
	<!---------- Modal ---------->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">REGISTRO DE CUENTA</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background:none;"><i class="fa-sharp fa-solid fa-xmark" style="color:white;"></i></button>
				</div>
				<form id="formRegistro" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Vista previa</label>
							<div class="col">
								<img id="imgVista" src="https://via.placeholder.com/150" alt="Tu imagen" />
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Foto de perfil</label>
							<div class="col">
								<button type="button" class="contenedor-btn-file">
									<i class="fas fa-file"></i>
									Adjuntar imagen
									<label for="filePrevia"></label>
									<input type="file" accept="image/png,image/jpeg" id="filePrevia" name="image" required>
								</button>
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Matricula</label>
							<div class="col-sm-3">
								<input type="number" class="inputDiseno" id="inputMatricula" name="inputMatricula" required>
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Nombre</label>
							<div class="col-sm-3">
								<input type="text" class="inputDiseno" id="inputNombre" name="inputNombre" required>
								<div id="textoAyuda1" class="form-text" style="color: white;">.</div>
							</div>
							<div class="col-sm-3">
								<input type="text" class="inputDiseno" id="inputApellidoP" name="inputApellidoP" required>
							<div id="textoAyuda1" class="form-text">Apellido Paterno</div>
							</div>
							<div class="col-sm-3">
								<input type="text" class="inputDiseno" id="inputApellidoM" name="inputApellidoM" required>
							<div id="textoAyuda2" class="form-text">Apellido Materno</div>
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Fecha de nacimiento</label>
							<div class="col-sm-4">
							<input type="date" class="inputDiseno" id="inputNacimiento" name="inputNacimiento" required>
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Campus</label>
							<div class="col-sm-10">
							<select class="select" id="campus">
								<option selected>Selecciona tu campus</option>
									<?php foreach ($filas as $op): //llenar las opciones del primer select ?>
								        <option value="<?= $op['idcampus'] ?>"><?= $op['tipo_campus'] ?></option>  
									<?php endforeach; ?>
							</select>
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Facultad</label>
							<div class="col-sm-10">
							<select class="select" id="facultades" disabled="">
								<option selected>Selecciona una facultad</option>
								<option value=""></option>
							</select>
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Carrera</label>
							<div class="col-sm-10">
							<select class="select" id="carreras" disabled="" name="carrera">
								<option selected>Selecciona una carrera</option>
								<option value=""></option>
							</select>
							</div>
						</div>
						<hr>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Correo</label>
							<div class="col-sm-5">
								<input type="email" class="inputDiseno" id="inputCorreo" name="inputCorreo" value="@uabc.edu.mx" required>
								<div id="textoAyuda1" class="form-text">Solo correos institucionales.</div>
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Contraseña</label>
							<div class="col-sm-3">
								<input type="password" class="inputDiseno" id="inputContra" name="inputContra" required>
								<div id="textoAyuda1" class="form-text">Maximo 8 caracteres.</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn-modal"><i class="fa-solid fa-right-to-bracket"></i> Crear cuenta</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!---------- Fin del Modal ---------->


	<div class="limiter">
		<div class="container-Logo">
			<div class="container-LogoCentrado">
				<div class="logoContainer">
					<img src="images/logoLogin.png" alt="Logo CimaCommunity">
				</div>
				<h1>Bienvenido a <br>CimaCommunity</h1><hr>
				<p>Una pagina dedicada para cualquier cimarron <br> dispuesto a conocer a su gente.</p>
			</div>
		</div>
		<div class="container-login100">
			<div class="wrap-login100 p-l-40 p-r-40 p-t-55 p-b-35">
				<form class="login100-form validate-form" method="POST" action="validLogin.php">
					<span class="login100-form-title p-b-35">
						Inicio de sesion
					</span>

					<form action="validLogin.php" method="POST">
						<div class="wrap-input100 m-b-23">
							<span class="label-input100">Correo</span>
							<input class="input100" type="email" name="correoInst" placeholder="Escribe tu correo" value="@uabc.edu.mx" required autocomplete="off">
						</div>

						<div class="wrap-input100">
							<span class="label-input100">Contraseña</span>
							<input class="input100" type="password" name="contrasena" placeholder="Escribe tu contraseña" required autocomplete="off">
						</div>
						
						<div class="text-right p-t-8 p-b-31">
							<a href="#">
								Olvidaste tu Contraseña?
							</a>
						</div>
						
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" type="submit">
									Iniciar sesion
								</button>
							</div>
						</div>
					</form>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							ó usando
						</span>
					</div>

					<div class="flex-c-m">

						<a href="#" class="login100-social-item">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-60">
						<span class="txt1 p-b-17">
							No tienes cuenta?
						</span>

						<a href="#" class="txt2" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Registrate
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="js/jquery-3.6.1.js"></script>
	<!--===============================================================================================-->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="https://kit.fontawesome.com/f75ca2de84.js" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="js/AjaxRegistro.js"></script> 
	<script src="js/main.js"></script>
	<script src="js/jsimgPrevia.js"></script>
	</body>
</html>