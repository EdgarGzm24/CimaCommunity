<?php
	if(isset($_POST[''])){

		$imagenPerfil = $_POST[''];
		$matricula = $_POST[''];
		$nombre = $_POST[''];
		$apPaterno = $_POST[''];
		$apMaterno = $_POST[''];
		$fechaNac = $_POST[''];
		$carrera = $_POST[''];
		$correo = $_POST[''];
		$contrasena = $_POST[''];

		/*
			*Una variable utilitaria para ir recogiendo lo ocurrido en el flujo del código
		*/
		$strMensaje="";


		/*
			*PRIMERA CONSULTA:
			*Dos marcadores ?,? que sustituyen a los valores reales
			*neutralizando así la inyección
		*/
		$insertFactura = "INSERT INTO factura (user_id, fecha) VALUES (?, ?)"; 

		/*
			*Preparamos la 1ª consulta dentro de un condicional
			*así controlamos cualquier fallo en el else
		*/
		if ($stmt = mysqli_prepare($conn, $insertFactura)) {
			/*
				*Es aquí donde se pasan los valores provenientes del exterior
				*de modo que es imposible que te cuelen código malicioso
				*porque esté método te protegerá de eso precisamente
				*Aquí lo importante a comprender es que
				* - 1. Donde está esto: "is" se deben poner 
					tantas iniciales como signos ? haya en la consulta (dos en este caso)
					Esas iniciales indican el tipo de dato de la columna respectiva
					Si es un (i)nteger, si es un (s)tring, etc.
				- 2. Se escriben luego las variables (sin comillas ni nada), en el mismo orden
					en que aparecen en la sentencia INSERT de más arriba
			*/
			mysqli_stmt_bind_param($stmt, "is", $userid, $date);

			/*
				*Se ejecuta la consulta
			*/
			mysqli_stmt_execute($stmt);
			$strMensaje.="La inserción en factura fue exitosa. Filas insertadas: ".mysqli_stmt_affected_rows($stmt).PHP_EOL;
		}else{
			$strMensaje.="La inserción en factura fue errónea. Error: ".mysqli_stmt_error($stmt).PHP_EOL;

		}
	}
?>