<?php
require_once 'conexion.php'; //libreria de conexion a la base

$facultad_id = filter_input(INPUT_POST, 'facultad_id'); //obtenemos el parametro que viene de ajax

if($facultad_id != ''){ //verificamos nuevamente que sea una opcion valida

  /*Obtenemos los discos de la banda seleccionada*/
  $sql = "SELECT idcarrera, tipo_carrera FROM carrera where facultad_idfacultad = ".$facultad_id;  
  $query = mysqli_query($conexion, $sql);
  $filas = mysqli_fetch_all($query, MYSQLI_ASSOC); 
  mysqli_close($conexion);
}

/**
 * Como notaras vamos a generar código `html`, esto es lo que sera retornado a `ajax` para llenar 
 * el combo dependiente
 */
?>

<option value="">Selecciona una carrera</option>
<?php foreach($filas as $op): //creamos las opciones a partir de los datos obtenidos ?>
<option value="<?= $op['idcarrera'] ?>"><?= $op['tipo_carrera'] ?></option>
<?php endforeach; ?>