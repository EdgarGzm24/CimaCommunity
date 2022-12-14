<?php
	require_once  'funciones/conexion.php';
    session_start();
    $usuario = $_SESSION['usuario'];

    if(!isset($usuario)){
        header("location: login.php");
    }

    $selectPerfil = "SELECT nombre, apellido_p, foto_usuario, foto_portadaUsuario FROM usuario WHERE idusuario = '$usuario'";
    $ConsultaPerfil = mysqli_query($conexion, $selectPerfil);
    $columnaPerfil = mysqli_fetch_array($ConsultaPerfil);

    $selectComunidad = "SELECT idcomunidad, nombre FROM comunidades";
    $ConsultaComunidad = mysqli_query($conexion, $selectComunidad);

	$SelectPublicaciones = "SELECT comunidades.nombre AS nombreCom, comunidades.descripcion_comunidad,
    usuario.idusuario, usuario.foto_usuario, usuario.nombre, usuario.apellido_p,
    usuario.apellido_m, publicaciones.idPublicaciones, publicaciones.descripcion_publicacion, publicaciones.fecha_creacion,
    publicaciones.foto_publicacion 
    FROM (comunidades_has_publicaciones 
    INNER JOIN publicaciones
          ON comunidades_has_publicaciones.publicaciones_idPublicaciones = publicaciones.idPublicaciones 
    INNER JOIN comunidades 
          ON comunidades_has_publicaciones.comunidades_idcomunidad = comunidades.idcomunidad)
    INNER JOIN usuario ON publicaciones.usuario_idusuario = usuario.idusuario ORDER BY publicaciones.idPublicaciones DESC";
    $ConsultaPublica = mysqli_query($conexion, $SelectPublicaciones);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">	
    <!--===============================================================================================-->	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--===============================================================================================-->	
    <link rel="stylesheet" href = "https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!--===============================================================================================-->	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/estilosInicio.css">
    <!--===============================================================================================-->
  
    <title>Inicio | CimaCommunity</title>
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
        <div class="left_row">
            <div class="left_row_profile">
                <img id="portada" src="<?php echo $columnaPerfil['foto_portadaUsuario'];?>" />
                <div class="left_row_profile">
                    <img id="profile_pic" src="<?php echo $columnaPerfil['foto_usuario'];?>" />
                    <span><?php echo $columnaPerfil['nombre']." ".$columnaPerfil['apellido_p'];?><br><p>150k seguidores / 50 siguiendo</p></span>
                </div>
            </div>
            
            <div class="rowmenu">
                <ul>
                    <li><a href="Inicio.php" id="rowmenu-selected"><i class="fa fa-globe"></i>Feed</a></li>
                    <li><a href="PerfilConfiguracion.php"><i class="fa fa-user"></i>Perfil</a></li>
                    <li class="primarymenu"><i class="fa fa-compass"></i>Explora</li>
                    <ul>
                        <li style="border:none"><a href="#A">Actividad</a></li>
                        <li style="border:none"><a href="#">Amigos</a></li>
                        <li style="border:none"><a href="#">Comunidades</a></li>
                        <li style="border:none"><a href="#">Guardados</a></li>
                    </ul>
                    <li class="primarymenu"><i class="fa fa-user"></i>Accesos directos</li>
                    <ul>
                        <li style="border:none"><a href="#">Perfil</a></li>
                        <li style="border:none"><a href="#">Comunidades</a></li>
                    </ul>
                </ul>
            </div>
        </div>

        <div class="right_row">
            <div class="row">
                <div class="publish">
                    <div class="row_title">
                        <span><i class="fa fa-newspaper-o" aria-hidden="true"></i> Estado</span>
                    </div>
                    <form method="POST" id="formPublicacion">
                    <select class="form-select" aria-label="Default select example" name="Comunidad" required>
                        <option selected>Elige la comunidad para publicar</option>
                        <?php
                        while($columComunidad = mysqli_fetch_assoc($ConsultaComunidad)){
                        ?>
                        <option value="<?php echo $columComunidad['idcomunidad'];?>"><?php echo $columComunidad['nombre'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                        <div class="publish_textarea">
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
            while($row = mysqli_fetch_assoc($ConsultaPublica)){
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
        <div class="suggestions_row">
            <div class="row shadow">
                <div class="row_title">
                    <span>Comunidades que te puedan gustar</span>
                    <a href="#">Ver mas...</a>
                </div>
                <div class="row_contain">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Toyota_Robot_at_Toyota_Kaikan.jpg/330px-Toyota_Robot_at_Toyota_Kaikan.jpg" alt="" />
                    <span><a href=""><b>Seguidores Geeks</b></a><br>Robots/ Electronica</span>
                </div>
                <div class="row_contain">
                    <img src="https://definicionabc.com/wp-content/uploads/2015/04/Sinfon??a.jpg" alt="" />
                    <span><a href=""><b>Sinfon??a sin g??neros</b></a><br>Rock / Band</span>
                </div>
                <div class="row_contain">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Knjige_mrtva_priroda.png/640px-Knjige_mrtva_priroda.png" alt="" />
                    <span><a href=""><b>Lectores y escritores omnisciente</b></a><br>Literatura</span>
                </div>
                <div class="row_contain">
                    <img src="https://educacion30.b-cdn.net/wp-content/uploads/2022/02/tutoriales-dibujo-a-lapiz-978x652.jpg" alt="" />
                    <span><a href=""><b>Dibujantes sin l??mite</b></a><br>Artes</span>
                </div>
                <div class="row_contain">
                    <img src="https://educacion30.b-cdn.net/wp-content/uploads/2020/03/fondo-matematicas_23-2148146270.jpg" alt="" />
                    <span><a href=""><b>Los matem??ticos que no pasan la tarea</b></a><br>Matem??tica</span>
                </div>
                <div class="row_contain">
                    <img src="https://www.laguiadelvaron.com/wp-content/uploads/2017/02/nintchdbpict000297124102.jpg" alt="" />
                    <span><a href=""><b>Deleite de cocinar</b></a><br>Gastronom??a</span>
                </div>
            </div>

            <div class="row shadow">
                <div class="row_title">
                    <span>Actividad reciente</span>
                </div>
                <div class="row_contain">
                    <img src="images/user-1.png" alt="" />
                    <span>Ana coment?? en la publicacion de Noberto <a href="" class="selected-orange">foto</a>..</span>
                </div>
                <div class="row_contain">
                    <img src="images/user-7.png" alt="" />
                    <span>Ana Uzi le gust?? el video de Edgar <a href="" class="selected-orange">video</a>..</span>
                </div>
                <div class="row_contain">
                    <img src="images/user-2.png" alt="" />
                    <span>Noberto agreg?? 20 fotos en <a href="" class="selected-orange">Comunidad UABC</a>..</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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
                        <span><b>Cerrar sesi??n</b></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- Menu movil -->
    <div class="mobilemenu">
        <div class="mobilemenu_profile">
            <img id="mobilemenu_portada" src="images/portada.jpg" />
            <div class="mobilemenu_profile">
                <img id="mobilemenu_profile_pic" src="images/user.jpg" /><br>
                <span>Edgar Guzman<br><p>150k seguidores / 50 seguidos</p></span>
            </div>
            <div class="mobilemenu_menu">
                <ul>
                    <li><a href="index.php" id="mobilemenu-selected"><i class="fa fa-globe"></i>Feed</a></li>
                    <li><a href="profile.php"><i class="fa fa-user"></i>Perfil</a></li>
                    <li><a href="friends.php"><i class="fa fa-users"></i>Amigos</a></li>
                    <li><a href="messages.php"><i class="fa fa-comments-o"></i>Comunidades</a></li>
                    <li class="primarymenu"><i class="fa fa-compass"></i>Explora</li>
                    <ul class="mobilemenu_child">
                        <li style="border:none"><a href="#"><i class="fa fa-file"></i>Amigos</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-file"></i>Comunidades</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-file"></i>Eventos</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-file"></i>Guardados</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-globe"></i>Actividades</a></li>
                    </ul>
                    <li class="primarymenu"><i class="fa fa-user"></i>Accesos rapidos</li>
                    <ul class="mobilemenu_child">
                        <li style="border:none"><a href="#"><i class="fa fa-star-o"></i>Comunidades</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-star-o"></i>Eventos</a></li>
                    </ul>
                </ul>
                    <hr>
                <ul>
                    <li><a href="#">Terminos & condiciones</a></li>
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="funciones/logout.php">Cerrar tu sesi??n</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.6.1.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript">
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
        // C??digo a ejecutar cuando se detecta un cambio de archivo
        readImage(this);
    });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/f75ca2de84.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://ajax.googleleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>        
    <!--===============================================================================================-->
    <script src="js/funcionesAjax.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>