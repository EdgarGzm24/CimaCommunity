<?php
	require_once  'funciones/conexion.php';
    session_start();
    $usuario = $_SESSION['usuario'];
    $idComunidad = $_GET['id_Comunidad'];

    if(!isset($usuario)){
        header("location: login.php");
    }

    $selectPerfil = "SELECT nombre, apellido_p, foto_usuario, foto_portadaUsuario FROM usuario WHERE idusuario = '$usuario'";
    $ConsultaPerfil = mysqli_query($conexion, $selectPerfil);
    $columnaPerfil = mysqli_fetch_array($ConsultaPerfil);

    $selectComu = "SELECT nombre, descripcion_comunidad FROM comunidades WHERE idcomunidad = '$idComunidad'";
    $ConsultaComu = mysqli_query($conexion, $selectComu);
    $columnaComu = mysqli_fetch_array($ConsultaComu);

    $sql = "SELECT comunidades.nombre AS nombreCom, comunidades.descripcion_comunidad, usuario.idusuario, usuario.foto_usuario, usuario.nombre, usuario.apellido_p, 
    usuario.apellido_m, publicaciones.idPublicaciones, publicaciones.descripcion_publicacion, publicaciones.fecha_creacion, publicaciones.foto_publicacion 
    FROM (comunidades_has_publicaciones 
    INNER JOIN publicaciones
        ON comunidades_has_publicaciones.publicaciones_idPublicaciones = publicaciones.idPublicaciones 
    INNER JOIN comunidades 
        ON comunidades_has_publicaciones.comunidades_idcomunidad = comunidades.idcomunidad)
    INNER JOIN usuario 
        ON publicaciones.usuario_idusuario = usuario.idusuario WHERE comunidades.idcomunidad = '$idComunidad' ORDER BY publicaciones.idPublicaciones DESC";
	$query = mysqli_query($conexion, $sql);
	
?>   
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"-->
    <!--===============================================================================================-->	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--===============================================================================================-->	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!--===============================================================================================-->	
    <link rel="stylesheet" href="css/estilosComunidad.css">     
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/estilosInicio.css">
    <!--===============================================================================================-->	
    <title>Comunidad | CimaCommunity</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar_menuicon" id="navicon">
            <i class="fa fa-navicon"></i>
        </div>
        <div class="navbar_logo">
            <a href="Inicio.php"><img src="images/logo.png" alt="LogoUABC" /></a>
        </div>
        <div class="navbar_search">
            <form method="POST" action="funciones/validaComunidades.php">
                <div class="search">
                    <input type="text" name="buscarComunidad" id="buscarComunidad" placeholder="Buscar comunidad" autocomplete="off"/>                
                    <button type="submit"> <a href="#" class="fa fa-search icon-search"></a></button>
                </div>                
            </form>            
            <div id="show-list"></div>
        </div>
        <div class="navbar_icons">
            <ul>                
                <li id="homemodal"><a href="Inicio.php"><i class="fa-solid fa-house"></i></a></li>
                <li id="marketmodal"><a href="ventasComida.php"><i class="fa-solid fa-shop"></i></a></li>
                <li id="eventmodal"><a href="publicacionEventos.php"><i class="fa-solid fa-calendar-days"></i></a></li>
                <li id="opinionsmodal"><a href="publicacionOpinion.php"><i class="fa-solid fa-message"></i></a></li>
            </ul>
        </div>
        <div class="navbar_user" id="profilemodal" style="cursor:pointer">
            <img src="<?php echo $columnaPerfil['foto_usuario'];?>" alt="" />
            <span  id="navbar_user_top"><?php echo $columnaPerfil['nombre']." ".$columnaPerfil['apellido_p'];?><br><p>Alumno</p></span><i class="fa fa-angle-down"></i>
        </div>
    </div>

<div class="all">
        <div class="rowfixed"></div>
        <div class="left_row border-radius ">
            <!-- Sidebar -->
            <div id="sidebar">                 
                <div id="menu">
                    <ul>
                        <p class="titulo">descripción <p><br>
                        <p class="descripcion">
                        <?php echo $columnaComu['descripcion_comunidad']?>
                        </p> 
                        <br>                                   
                    </ul>
                </div>                       
            </div>  
        </div>

        <div class="right_row">
            <div class="feed">
                <div class="row border-radius">
                    <div class="feed_content_image">
                        <img src="images/fondo.png" alt="" /></a>
                    </div>
                <hr>                    
                <div class="feed_title">
                    <div class="right">
                        <h4><?php echo $columnaComu['nombre']?></h4>
                        <p>712 miembros</p>
                    </div>
                    <div class="left">
                        <button class="button">Unirme</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="publish">
                    <div class="row_title">
                        <span><i class="fa fa-newspaper-o" aria-hidden="true"></i> Estado</span>

                    </div>
                    <form method="POST" id="formPublicacion">
                        <div class="publish_textarea">
                            <input type="hidden" value="<?php echo $idComunidad;?>" name="idComunidad">
                            <img class="border-radius-image" src="<?php echo $columnaPerfil['foto_usuario'];?>" alt="" />
                            <textarea type="text" name="descripcionPubli" placeholder="Que estas haciendo ahora?" style="resize: none;" required></textarea>
                        </div>
                        <div id="imgPrevia"></div>
                        <div class="publish_icons">
                            <ul>
                                <li>
                                    <div class="contenedor-btn-file">
                                        <i class="fa fa-camera"></i>
                                        <label for="filePrevia"></label>
                                        <input type="file" accept="image/png,image/jpeg" id="filePrevia" name="image">
                                    </div>
                                </li>
                            </ul>
                            <button type="submit">Publicar</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php
        while($row = mysqli_fetch_assoc($query)){
    ?>
            <div class="row border-radius">
                <div class="feed">                              
                    <div class="feed_title">
                        <img src="<?php echo $row['foto_usuario']?>" alt="" />
                        <span><b><?php echo $row['nombre']." ".$row['apellido_p']." ".$row['apellido_m']?></b> compartio una <a href="feed.php">foto</a><br><p><?php echo $row['fecha_creacion']?></p><p>Comunidad: <?php echo $row['nombreCom']?></p></span>
                        <?php
                        if($usuario == $row['idusuario']){
                        ?>
                        <div class="dropdown-center">
                            <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</a></li>
                                <li><a class="dropdown-item" href="#" onclick="AlertaEliminacion(<?php echo $row['idPublicaciones']; ?>)">Eliminar</a></li>
                            </ul>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="feed_content">
                        <div class="feed_content_image">
                            <p><?php echo $row['descripcion_publicacion']?></p>
                            <a href="feed.php"><img src="<?php echo $row['foto_publicacion']?>" alt=""/></a>
                        </div>
                    </div>
                    <div class="feed_footer">
                        <ul class="feed_footer_left"></ul>                            
                        <ul class="feed_footer_right">
                            <li >                                
                                <a href="feed.php" style="color:#515365;"><li class="hover-orange"><i class="fa fa-comments-o "></i> 74 comentarios</li></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            }
            mysqli_close($conexion);
            ?>      
        </div>
    </div>
</div>
    <!-- Menu movil -->
    <div class="mobilemenu">        
            <div id="wrapper">
                <!-- Sidebar -->
                <div id="sidebar">
                    <div class="inner">
                        <!-- Search Box -->
                        <section id="search" class="alt">
                            <form method="get" action="#">
                            <input type="text" name="search" id="search" placeholder="Buscar..." />
                            </form>
                        </section>
                            
                        <!-- Menu -->
                        <div id="menu">
                            <ul>
                                <p class="titulo">descripción <p><br>
                                <p class="descripcion">
                                Bienvenidos al grupo dedidacado para cualquier que desee publicar su música, recomendancion o otros 
                                temas en relación. Aqui todos intentamos apoyarnos para el suceso!
                                </p> 
                                <br>                                   
                            </ul>
                        </div>  
                    </div>   
                </div>
            </div>
    </div>
    <!-- Modal Profile -->
    <div class="modalFisico modal-profile">
        <div class="modal-icon-select"><i class="fa fa-sort-asc" aria-hidden="true"></i></div>
        <div class="modal-titleFisico">
            <span>TU CUENTA</span>
             <a href="settings.php"><i class="fa fa-cogs"></i></a>
        </div>
        <div class="modal-contentFisico">
            <ul>
                <li>
                    <a href="PerfilConfiguracion.php">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span><b>Perfil</b></span>
                    </a>
                </li>
                <li>
                    <a href="funciones/logout.php">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <span><b>Cerrar sesión</b></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script src="js/jquery-3.6.1.js"></script>
    <!--===============================================================================================-->
    <script>
    // Modals
    $(document).ready(function(){
        $("#profilemodal").hover(function(){
            $(".modal-profile").toggle();
        });
        $(".modal-profile").hover(function(){
            $(".modal-profile").toggle();
        });

        $("#navicon").click(function(){
            $(".mobilemenu").fadeIn();
        });
        $(".all").click(function(){
            $(".mobilemenu").fadeOut();
        });
    });

    function readImage (input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imgPrevia').html("<img src='" + e.target.result + "'/>"); // Renderizamos la imagen
        }
        reader.readAsDataURL(input.files[0]);
        } else {
            $('#imgPrevia').html("");
        }
    }

    $("#filePrevia").change(function () {
        // Código a ejecutar cuando se detecta un cambio de archivo
        readImage(this);
    });
    </script>
    <script src="js/funcionesAjax.js"></script>
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/f75ca2de84.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
</body>
</html>






