<?php
	require_once  'funciones/conexion.php';
    session_start();
    $usuario = $_SESSION['usuario'];

    if(!isset($usuario)){
        header("location: login.php");
    }

    $selectPerfil = "SELECT nombre, apellido_p, apellido_m, foto_usuario, foto_portadaUsuario FROM usuario WHERE idusuario = '$usuario'";
    $ConsultaPerfil = mysqli_query($conexion, $selectPerfil);
    $columnaPerfil = mysqli_fetch_array($ConsultaPerfil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!--===============================================================================================-->			
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--===============================================================================================-->	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/estilosPerfil.css">
    <!--===============================================================================================-->
    <title>Configuracion Perfil | CimaCommunity</title>
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

    
    <section class="perfil-usuario">
        <div class="contenedor-perfil">
            <div class="portada-perfil" style="background-image: url('<?php echo $columnaPerfil['foto_portadaUsuario'];?>');">
                <div class="sombra"></div>
                <div class="avatar-perfil">
                    <img src="<?php echo $columnaPerfil['foto_usuario'];?>" alt="img">
                    <a href="#" class="cambiar-foto">
                        <i class="fas fa-camera"></i> 
                        <span>Cambiar foto</span>
                    </a>
                </div>
                <div class="datos-perfil">
                    <h4 class="titulo-usuario"><?php echo $columnaPerfil['nombre']." ".$columnaPerfil['apellido_p']." ".$columnaPerfil['apellido_m'];?></h4>             
                </div>
                <div class="opcciones-perfil">
                    <button type="">Cambiar portada</button>             
                </div>
            </div>      
        </div>
    </section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>