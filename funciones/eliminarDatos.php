<?php
   require_once  'conexion.php';
    
   if(isset($_POST['id_Opinion'])){
        $idOpinion = $_POST['id_Opinion'];

        $DeleteOpi = "DELETE FROM opiniones WHERE idopiniones = '$idOpinion'";
        $FuncionDelete1 = mysqli_query($conexion,$DeleteOpi);

        mysqli_close($conexion);
    }

    if(isset($_POST['id_Publicacion'])){
        $idPubli = $_POST['id_Publicacion'];

        $SelectFoto = "SELECT foto_publicacion FROM publicaciones WHERE idPublicaciones = '$idPubli'";
        $FuncionSelect = mysqli_query($conexion,$SelectFoto);
        $imgRow = mysqli_fetch_array($FuncionSelect);

        if(!empty($imgRow['foto_publicacion'])){
            unlink("../".$imgRow['foto_publicacion']);
        }

        $DeletePubliCom = "DELETE FROM comunidades_has_publicaciones WHERE publicaciones_idPublicaciones = '$idPubli'";
        $FuncionDelete2 = mysqli_query($conexion,$DeletePubliCom);

        $DeletPubli = "DELETE FROM publicaciones WHERE idPublicaciones = '$idPubli'";
        $FuncionDelete1 = mysqli_query($conexion,$DeletPubli);

        mysqli_close($conexion);
    }
?>