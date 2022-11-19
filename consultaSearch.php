<?
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = "localhost";
$usuario = "root";
$contrasena = "";
$bd = "cimacommunity";

$conexion = mysqli_connect($host, $usuario, $contrasena, $bd);

if (!$conexion) {
    print_r(mysqli_connect_error());
} 

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM comunidades ORDER BY idcomunidad";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['comunidades']))
{
	$q=$conexion->real_escape_string($_POST['comunidades']);
	$query="SELECT * FROM alumnos WHERE 
		idcomunidad LIKE '%".$q."%' OR
		nombre  '%".$q."%'";
}

$buscarComunidad=$conexion->query($query);
if ($buscarComunidad->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID COMUNIDAD</td>
			<td>NOMBRE</td>
			<td>DESCRIPCION</td>
		</tr>';

	while($filacomunidad= $buscarComunidad>fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filacomunidad['idcomunidad'].'</td>
			<td>'.$filacomunidad['nombre'].'</td>
			<td>'.$filacomunidad['descripcion_comunidad'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>