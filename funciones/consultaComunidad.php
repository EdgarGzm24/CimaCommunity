<?php
  require_once 'conexion.php';

  if (isset($_POST['nombreComunidad'])) {
    $inpText = $_POST['nombreComunidad'];
    $sql = "SELECT nombre, idcomunidad FROM comunidades WHERE nombre LIKE '%$inpText%'";
    $ConsultaComu = mysqli_query($conexion, $sql);
    $columnaComu = mysqli_fetch_all($ConsultaComu);

    if ($columnaComu) {
      foreach ($columnaComu as $row) {
        echo '<a href="comunidades.php?id_Comunidad=' . $row[1] . '" class="list-group-item list-group-item-action border-1">' . $row[0] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">Sin resultados</p>';
    }
  }
?>