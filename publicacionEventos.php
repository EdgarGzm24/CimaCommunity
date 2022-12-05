<?php
	require_once  'funciones/conexion.php';
	
	$sql = 'SELECT opiniones.descripcion_opinion, opiniones.titulo, opiniones.calificacion, 
    opiniones.fecha_creacion_op, usuario.nombre, usuario.apellido_p, usuario.apellido_m, usuario.foto_usuario 
    FROM opiniones INNER JOIN usuario ON opiniones.usuario_idusuario = usuario.idusuario';
	$query = mysqli_query($conexion, $sql);
	
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"-->
    <!--===============================================================================================-->	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--===============================================================================================-->	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/estilosEventos.css">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/estiloEventos.css">
    <!--===============================================================================================-->	
    <link rel="stylesheet" href="css/estiloEventos.css">    
    <!--===============================================================================================-->	
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!--===============================================================================================-->	
    <title>Eventos | CimaCommunity</title>

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
                <li id="opinionsmodal" ><i class="fa-solid fa-message"></i><span id="notification">4</span></li>
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
            <div class="row">
                <div class="publish">
                    <div class="row_title">
                        <span><i class="fa fa-newspaper-o" aria-hidden="true"></i>Eventos</span>

                    </div>
                    <form method="" action="/">
                        <div class="publish_textarea">
                            <img class="border-radius-image" src="images/user.jpg" alt="" />
                            <textarea type="text" placeholder="Publica un evento" style="resize: none;"></textarea>
                        </div>
                        <div class="publish_icons">
                            <ul>
                                <li><i class="fa fa-camera"></i></li>
                            </ul>
                            <button>Publicar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="suggestions_row">
            
            <div class="row shadow">
                <div class="row_title size">
                    <span> Calendario </span>                    
                </div>  
                <div class="size">              
                    <div id="datepicker" ></div>
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
       
    </div>

        
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>     
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        
    <script>
        $( function() {
         $( "#datepicker" ).datepicker();
        } );
    </script>

    <script>
    $(document).ready(function(){
        // Modals
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
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/f75ca2de84.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
</body>
</html>