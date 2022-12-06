<?php

    require_once  'funciones/conexion.php';
    session_start();
    $usuario = $_SESSION['usuario'];

    if(!isset($usuario)){
        header("location: login.php");
    }

    $selectPerfil = "SELECT nombre, apellido_p, foto_usuario, foto_portadaUsuario FROM usuario WHERE login_idLogin = '$usuario'";
    $ConsultaPerfil = mysqli_query($conexion, $selectPerfil);
    $columnaPerfil = mysqli_fetch_array($ConsultaPerfil);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================->	
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
            <img src="images/logo.png" alt="" />
        </div>
        <div class="navbar_search">
            <form method="" action="/">
                <input type="text" name="buscarComunidad" id="buscarComunidad" placeholder="Busca tu comunidad.." />
                <button type="submit"> <a href="#" class="fa fa-search"></a></button>
            </form>
            <div id="show-list"></div>
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
            <img src="<?php echo $columnaPerfil['foto_usuario'];?>" alt="" />
            <span  id="navbar_user_top"><?php echo $columnaPerfil['nombre']." ".$columnaPerfil['apellido_p'];?><br><p>Alumno</p></span><i class="fa fa-angle-down"></i>
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
    
    <script src="js/jquery-3.6.1.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript">
    $(document).ready(function () {
    // Send Search Text to the server
    $("#buscarComunidad").keyup(function () {
        let searchText = $(this).val();
        if (searchText != "") {
        $.ajax({
            url: "funciones/action.php",
            method: "post",
            data: {
            query: searchText,
            },
            success: function (response) {
            $("#show-list").html(response);
            },
        });
        } else {
        $("#show-list").html("");
        }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
        $("#buscarComunidad").val($(this).text());
        $("#show-list").html("");
    });
    });

    $(document).ready(function() {
    var tableContextMenu = new ContextMenu("context-menu-items", menuItemClickListener);
    });

    function menuItemClickListener(menu_item, parent) {
    alert("Menu Item Clicked: " + menu_item.text() + "\nRecord ID: " + parent.attr("data-row-id"));
    }

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
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/f75ca2de84.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://ajax.googleleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>        
    <!--===============================================================================================-->

</body>
</html>