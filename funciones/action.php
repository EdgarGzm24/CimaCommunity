<?php
  require_once 'conexion.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = "SELECT nombre FROM comunidades WHERE nombre LIKE '%$inpText%'";
    $ConsultaComu = mysqli_query($conexion, $sql);
    $columnaComu = mysqli_fetch_all($ConsultaComu);

    if ($columnaComu) {
      foreach ($columnaComu as $row) {
        echo '<a href="comunidades.php" class="list-group-item list-group-item-action border-1">' . $row[0] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>