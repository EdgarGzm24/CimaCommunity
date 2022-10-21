<?php
	if(isset($_POST[''])){

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CimaCommunity</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/estilosLogin.css">
<!--===============================================================================================-->
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    
  </div>
</div> 
	<div class="limiter">
		<div class="container-Logo">
			<div class="container-LogoCentrado">
				<div class="logoContainer">
					<img src="images/logo.png" alt="Logo CimaCommunity">
				</div>
				<h1>Bienvenido a <br>CimaCommunity</h1><hr>
				<p>Una pagina dedicada para cualquier cimarron <br> dispuesto a conocer a su gente.</p>
			</div>
		</div>
		<div class="container-login100">
			<div class="wrap-login100 p-l-40 p-r-40 p-t-55 p-b-35">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-35">
						Inicio de sesion
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Correo requerido">
						<span class="label-input100">Correo</span>
						<input class="input100" type="email" name="username" placeholder="Escribe tu correo">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" placeholder="Escribe tu contraseña">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Olvidaste tu Contraseña?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Iniciar sesion
							</button>
						</div>
					</div>

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
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>