
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

	$sql = 'SELECT opiniones.idopiniones, opiniones.descripcion_opinion, opiniones.titulo, opiniones.calificacion, 
    opiniones.fecha_creacion_op, usuario.nombre, usuario.apellido_p, usuario.apellido_m, usuario.foto_usuario 
    FROM opiniones INNER JOIN usuario ON opiniones.usuario_idusuario = usuario.idusuario';
	$query = mysqli_query($conexion, $sql);
?>                                      

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--===============================================================================================-->	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/estilosInicio.css">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/estilosOpinion.css">
    <!--===============================================================================================-->	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--===============================================================================================-->
    <title>Opiniones | CimaCommunity</title>
    
    <style>        
        #container {
            margin-left: 55%;
        }
    </style>
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
            
            <div class="row border-radius">
                <div class="feed">
                    <div class="feed_title">
                        <img src="images/iconcima.png" alt="" />
                        <span><b>CIMA COMMUNITY</b><br><p>Tu opiniones ayudan a mejorar nuestra p??gina</p></span>
                    </div>
                    <div class="feed_content">
                        <div class="feed_content_image">
                            <a href="feed.php"><img src="images/opi.png" alt="" /></a>
                        </div>
                    </div>
                    
                </div>
            </div>  
            
            <div class="row">
                <div class="publish">
                    <div class="row_title">
                        <span><i class="fa fa-newspaper-o" aria-hidden="true"></i> Opinion</span>

                    </div>
                    <form method="post" action="validaopinion.php">
                        <div class="publish_textarea">
                            <img class="border-radius-image" src="images/user.jpg" alt="" />
                            <textarea type="text" name="titulo" placeholder="Titulo"  maxlength="30" style="resize: none;"></textarea>
                              
                        </div>
                        <div class="publish_textarea">
                            <textarea type="text" name="des" placeholder="??Publica tu opini??n!" maxlength="200" style="resize: none;"></textarea>
                        </div>
                        <div class="publish_icons">
                            <button type="submit" class="left">Publicar</button>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            while($row = mysqli_fetch_array($query)){
            ?>
                <div class="row border-radius">
                    <div class="feed">
                        <div class="feed_title">
                            <img src="<?php echo $row['foto_usuario'] ?>" alt="" />
                            <span><b><?php echo $row['nombre']." ".$row['apellido_p']." ".$row['apellido_m'] ?></b><p><?php echo $row['fecha_creacion_op'] ?></p>
                                     <p><?php echo $row['calificacion'] ?> estrellas</p>
                            </span>
                            <div id="container" class="right2">        
                                <div id="menu-wrap">
                                    <input type="checkbox" class="toggler" />
                                    <div class="dots">
                                        <div></div>
                                    </div>
                                    <div class="menu">
                                        <div>
                                        <ul>
                                            <li><a href="funciones/popOpinion.php" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['idopiniones']?>" class="link">Editar</a></li>
                                            <li><a href="funciones/eliminarOpinion.php?id=<?php echo $row['idopiniones']?>" class="link">Eliminar</a></li>                                        
                                            <?php include('funciones/popOpinion.php');?>

                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feed_content2">
                                <p><b><?php echo $row['titulo'] ?></b></p>
                                <div class="descripcion">
                                <p><?php echo $row['descripcion_opinion'] ?><br></p>
                                </div>
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
                    <a href="#">&emsp;  &emsp; Ver mas...</a>
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
                    <span>Sugerencias de amistad</span>
                    <a href="friends.php">Ver mas...</a>
                </div>
                <div class="row_contain">
                    <img src="images/user-2.png" alt="" />
                    <span><b>Norberto Aguilar</b><br>8 amigos en comun</span>
                    <button>+</button>
                </div>
                <div class="row_contain">
                    <img src="images/user-1.png" alt="" />
                    <span><b>Ana Robles</b><br>6 amigos en comun</span>
                    <button>+</button>
                </div>
                <div class="row_contain">
                    <img src="images/user-6.jpg" alt="" />
                    <span><b>Aylin Regalado</b><br>6 amigos en comun</span>
                    <button>+</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Profile -->
    <div class="modal modal-profile">
        <div class="modal-icon-select"><i class="fa fa-sort-asc" aria-hidden="true"></i></div>
        <div class="modal-title">
            <span>TU CUENTA</span>
             <a href="settings.php"><i class="fa fa-cogs"></i></a>
        </div>
        <div class="modal-content">
            <ul>
                <li>
                    <a href="settings.php">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span><b>Perfil</b></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <span><b>Crear una comunidad</b></span>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <span><b>Cerrar tu sesi??n</b>></span>
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
                    <li><a href="login.php">Cerrar sesion</a></li>
                </ul>
            </div>
        </div>
    </div>

	<script src="js/jquery-3.6.1.js"></script>
	<!--===============================================================================================-->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="https://kit.fontawesome.com/f75ca2de84.js" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="js/funcionesAjax.js"></script> 
	<script src="js/jsimgPrevia.js"></script>

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
    </script>
</body>
</html>