
<?php
	require_once  'funciones/conexion.php';
	
	$sql = 'SELECT opiniones.idopiniones, opiniones.descripcion_opinion, opiniones.titulo, opiniones.calificacion, 
    opiniones.fecha_creacion_op, usuario.nombre, usuario.apellido_p, usuario.apellido_m, usuario.foto_usuario 
    FROM opiniones INNER JOIN usuario ON opiniones.usuario_idusuario = usuario.idusuario';
	$query = mysqli_query($conexion, $sql);
	//$filas = mysqli_fetch_all($query, MYSQLI_ASSOC); **
?>                                      

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"  type="text/css" />
    <!--===============================================================================================-->	
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />
    <!--===============================================================================================-->	
    <title>Opiniones | CimaCommunity</title>
    
    <style>
      
      @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap");
        * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        }

      
        #container {
      
        background-color: #fff;      
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;      
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin-left: 55%;
        }

        #container .text {
        border: none;
        background: none;
        font-size: 18px;
        font-weight: 400;
        }

        #container #menu-wrap {
        position: relative;
        height: 25px;
        width: 25px;
        }

        #container #menu-wrap .dots {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: left;
        z-index: 1;
        }

        #container #menu-wrap .dots > div,
        #container #menu-wrap .dots > div:after,
        #container #menu-wrap .dots > div:before {
        height: 6px;
        width: 6px;
        background-color: rgba(49, 49, 49, 0.8);
        border-radius: 50%;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        }

        #container #menu-wrap .dots > div {
        position: relative;
        }

        #container #menu-wrap .dots > div:after {
        content: "";
        position: absolute;
        bottom: calc((25px / 2) - (6px / 2));
        left: 0;
        }

        #container #menu-wrap .dots > div:before {
        content: "";
        position: absolute;
        top: calc((25px / 2) - (6px / 2));
        left: 0;
        }

        #container #menu-wrap .menu {
        position: absolute;
        right: -10px;
        top: calc(-12px + 50px);
        width: 0;
        height: 0;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px 15px;
        -webkit-box-shadow: 2px 4px 6px rgba(49, 49, 49, 0.2);
        box-shadow: 2px 4px 6px rgba(49, 49, 49, 0.2);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        }

        #container #menu-wrap .menu ul {
        list-style: none;
        }

        #container #menu-wrap .menu ul li {
        margin: 15px 0;
        }

        #container #menu-wrap .menu ul li .link {
        text-decoration: none;
        color: rgba(49, 49, 49, 0.85);
        opacity: 0;
        visibility: hidden;
        }

        #container #menu-wrap .toggler {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer;
        z-index: 2;
        }

        #container #menu-wrap .toggler:hover + .dots > div,
        #container #menu-wrap .toggler:hover + .dots > div:after,
        #container #menu-wrap .toggler:hover + .dots > div:before {
        background-color: rgba(49, 49, 49, 0.6);
        }

        #container #menu-wrap .toggler:checked + .dots > div {
        -webkit-transform: translateX(calc(((25px / 2) - (6px / 2)) * -0.7071067812))
          translateY(calc(((25px / 2) - (6px / 2)) * -0.7071067812));
        -ms-transform: translateX(calc(((25px / 2) - (6px / 2)) * -0.7071067812))
          translateY(calc(((25px / 2) - (6px / 2)) * -0.7071067812));
        transform: translateX(calc(((25px / 2) - (6px / 2)) * -0.7071067812))
          translateY(calc(((25px / 2) - (6px / 2)) * -0.7071067812));
        }

        #container #menu-wrap .toggler:checked + .dots > div:after {
        -webkit-transform: translateX(calc(((25px / 2) - (6px / 2)) * 0.7071067812))
          translateY(calc((2 * (25px / 2) - (6px / 2)) * 0.7071067812));
        -ms-transform: translateX(calc(((25px / 2) - (6px / 2)) * 0.7071067812))
          translateY(calc((2 * (25px / 2) - (6px / 2)) * 0.7071067812));
        transform: translateX(calc(((25px / 2) - (6px / 2)) * 0.7071067812))
          translateY(calc((2 * (25px / 2) - (6px / 2)) * 0.7071067812));
        }

        #container #menu-wrap .toggler:checked + .dots > div:before {
        -webkit-transform: translateX(
            calc(2 * (((25px / 2) - (6px / 2)) * 0.7071067812))
          )
          translateY(
            calc(((25px / 2) - (6px / 2)) - (((25px / 2) - (6px / 2)) * 0.7071067812))
          );
        -ms-transform: translateX(calc(2 * (((25px / 2) - (6px / 2)) * 0.7071067812)))
          translateY(
            calc(((25px / 2) - (6px / 2)) - (((25px / 2) - (6px / 2)) * 0.7071067812))
          );
        transform: translateX(calc(2 * (((25px / 2) - (6px / 2)) * 0.7071067812)))
          translateY(
            calc(((25px / 2) - (6px / 2)) - (((25px / 2) - (6px / 2)) * 0.7071067812))
          );
        }



        #container #menu-wrap .toggler:checked ~ .menu {
        opacity: 1;
        visibility: visible;
        width: 100px;
        height: 100px;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        }

        #container #menu-wrap .toggler:checked ~ .menu ul .link {
        opacity: 1;
        visibility: visible;
        -webkit-transition: 0.5s ease 0.3s;
        -o-transition: 0.5s ease 0.3s;
        transition: 0.5s ease 0.3s;
        }

        #container #menu-wrap .toggler:checked ~ .menu ul .link:hover {
        color: #2980b9;
        -webkit-transition: 0.2s;
        -o-transition: 0.2s;
        transition: 0.2s;
        }

        #container #menu-wrap .toggler:not(:checked) ~ .menu {
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        }

        #container #menu-wrap .toggler:not(:checked) ~ .menu ul .link {
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.1s;
        -o-transition: 0.1s;
        transition: 0.1s;
        }

        @media (max-width: 600px) {
        #container {
          position: absolute;
          top: 50px;
          width: calc(100% - 40px);
          margin: 0;
        }      
        
      }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar_menuicon" id="navicon">
            <i class="fa fa-navicon"></i>
        </div>

        <div class="navbar_logo">
            <img src="images/logo.png" alt="" />
        </div>

        <div class="navbar_page">
            <span>CimaCommunity</span>
        </div>

        <div class="navbar_icons center">
            <ul>                
                <li id="homemodal"><i class="fa-solid fa-house"></i><span id="notification">5</span></li>
                <li id="marketmodal"><i class="fa-solid fa-shop"></i><span id="notification">2</span></li>
                <li id="eventmodal"><i class="fa-solid fa-calendar-days"></i></i><span id="notification">1</span></li>
                <li id="opinionsmodal"><i class="fa-solid fa-message"></i><span id="notification">4</span></li>
            </ul>
        </div>
        <div class="navbar_user right" id="profilemodal" style="cursor:pointer">
            <img src="images/user.jpg" alt="" />
            <span  id="navbar_user_top">Edgar Guzman<br><p>Alumno</p></span><i class="fa fa-angle-down"></i>
        </div>
    </div>

    <div class="all">
        <div class="rowfixed"></div>
        <div class="left_row">
            <div class="left_row_profile">
                <img id="portada" src="images/portada.jpg" />
                <div class="left_row_profile">
                    <img id="profile_pic" src="images/user.jpg" />
                    <span>Edgar Guzman<br><p>150k seguidores / 50 siguiendo</p></span>
                </div>
            </div>
            <div class="rowmenu">
                <ul>
                    <li><a href="index.php" id="rowmenu-selected"><i class="fa fa-globe"></i>Feed</a></li>
                    <li><a href="profile.php"><i class="fa fa-user"></i>Perfil</a></li>
                    <li><a href="friends.php"><i class="fa fa-users"></i>Amigos</a></li>
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
                        <span><b>CIMA COMMUNITY</b><br><p>Tu opiniones ayudan a mejorar nuestra página</p></span>
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
                            <textarea type="text" name="des" placeholder="¡Publica tu opinión!" maxlength="200" style="resize: none;"></textarea>
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
                                            <li><a href="#" class="link">Editar</a></li>
                                            <li><a href="funciones/eliminarOpinion.php?id=<?php echo $row['idopiniones']?>" class="link">Eliminar</a></li>                                        
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
                    <img src="https://definicionabc.com/wp-content/uploads/2015/04/Sinfonía.jpg" alt="" />
                    <span><a href=""><b>Sinfonía sin géneros</b></a><br>Rock / Band</span>
                </div>
                <div class="row_contain">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Knjige_mrtva_priroda.png/640px-Knjige_mrtva_priroda.png" alt="" />
                    <span><a href=""><b>Lectores y escritores omnisciente</b></a><br>Literatura</span>
                </div>
                <div class="row_contain">
                    <img src="https://educacion30.b-cdn.net/wp-content/uploads/2022/02/tutoriales-dibujo-a-lapiz-978x652.jpg" alt="" />
                    <span><a href=""><b>Dibujantes sin límite</b></a><br>Artes</span>
                </div>
                <div class="row_contain">
                    <img src="https://educacion30.b-cdn.net/wp-content/uploads/2020/03/fondo-matematicas_23-2148146270.jpg" alt="" />
                    <span><a href=""><b>Los matemáticos que no pasan la tarea</b></a><br>Matemática</span>
                </div>
                <div class="row_contain">
                    <img src="https://www.laguiadelvaron.com/wp-content/uploads/2017/02/nintchdbpict000297124102.jpg" alt="" />
                    <span><a href=""><b>Deleite de cocinar</b></a><br>Gastronomía</span>
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
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

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
                        <span><b>Cerrar tu sesión</b>></span>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    // Modals
    $(document).ready(function(){


        $("#messagesmodal").hover(function(){
            $(".modal-comments").toggle();
        });
        $(".modal-comments").hover(function(){
            $(".modal-comments").toggle();
        });



        $("#friendsmodal").hover(function(){
            $(".modal-friends").toggle();
        });
        $(".modal-friends").hover(function(){
            $(".modal-friends").toggle();
        });


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
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>