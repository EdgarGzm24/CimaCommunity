<?php
require_once 'conexion.php'; //libreria de conexion a la base

$campus_id = filter_input(INPUT_POST, 'campus_id'); //obtenemos el parametro que viene de ajax

if($campus_id != ''){ //verificamos nuevamente que sea una opcion valida

  /*Obtenemos los discos de la banda seleccionada*/
  $sql = "SELECT idfacultad, tipo_facultad FROM facultad where campus_idcampus = ".$campus_id;  
  $query = mysqli_query($conexion, $sql);
  $filas = mysqli_fetch_all($query, MYSQLI_ASSOC); 
  mysqli_close($conexion);
}

/**
 * Como notaras vamos a generar código `html`, esto es lo que sera retornado a `ajax` para llenar 
 * el combo dependiente
 */
?>

<option value="">Selecciona una facultad</option>
<?php foreach($filas as $op): //creamos las opciones a partir de los datos obtenidos ?>
<option value="<?= $op['idfacultad'] ?>"><?= $op['tipo_facultad'] ?></option>
<?php endforeach; ?>