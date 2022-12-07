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
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"  type="text/css" />
    <!--===============================================================================================-->	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/estilosVentaComida.css">
    <!--===============================================================================================-->	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--===============================================================================================-->	
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />
    <!--===============================================================================================-->	
    <title>Ventas | CimaCommunity</title>

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
        <div class="left_row border-radius fondo ">  
                <div class="container-login100-form-btn">
						    <div class="wrap-login100-form-btn">
								    <div class="login100-form-bgbtn">
								        <h1>
									        Venta Comida
                                        </h1>
                                    </div>
                            </div>
		        </div>
            <hr>           
            <a></a><h1>Cafetería  UABC</h1></a> 
            <hr> 

            <div class="padding">
                <p class="letra">Filtros</p><br>
                <div class="rowmenu letra2">
                    <ul>
                        <li><p>Precio</p></li>
                        <li><p>Ubicación</p></li>
                        <li><p>Tipo de Comida</p></li>
                    </ul>
                </div>
            </div>   
        </div>
    </div> 

    <div class="right_row">
        <div class="row">
                <div class="publish">
                    <div class="row_title">
                        <span><i class="fa fa-newspaper-o" aria-hidden="true"></i> Estado</span>

                    </div>
                    <form method="" action="/">
                        <div class="publish_textarea">
                            <img class="border-radius-image" src="images/user.jpg" alt="" />
                            <textarea type="text" placeholder=" Crear publición de venta" style="resize: none;"></textarea>
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
        

            <div class="row border-radius">
                <div class="feed">
                    <div class="feed_title">
                        <span><b>Luffy</b> shared a <a href="">photo of food</a><br><p>January 2 at 6:05pm</p></span>
                    </div>
                    <div class="feed_content">
                        <div class="feed_content_image">
                            <img src="images/tacos.png" alt="" />
                        </div>
                    </div>
                    <div class="feed_footer">
                        <ul class="feed_footer_left">
                            <li class="hover-orange selected-orange"><i class="fa fa-heart"></i> 10</li>
                            <li><span><b>Zoro</b> and 9 more liked this</span></li>
                        </ul>
                        <ul class="feed_footer_right">
                            <li>
                                <li class="hover-orange selected-orange"><i class="fa fa-share"></i> 5</li>
                                <li class="hover-orange"><i class="fa fa-comments-o"></i> 8 comments</li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row border-radius">
                <div class="feed">
                    <div class="feed_title">
                        <span><b>Gon</b> shared a <a href="">photo of food</a><br><p>July 3 at 10:00am</p></span>
                    </div>
                    <div class="feed_content">
                        <div class="feed_content_image">
                            <img src="images/empanadas.png" alt="" />
                        </div>
                    </div>
                    <div class="feed_footer">
                        <ul class="feed_footer_left">
                            <li class="hover-orange selected-orange"><i class="fa fa-heart"></i> 15</li>
                            <li><span><b>Killua</b> and 14 more liked this</span></li>
                        </ul>
                        <ul class="feed_footer_right">
                            <li>
                                <li class="hover-orange selected-orange"><i class="fa fa-share"></i> 3</li>
                                <li class="hover-orange"><i class="fa fa-comments-o"></i> 15 comments</li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row border-radius">
                <div class="feed">
                    <div class="feed_title">
                        <span><b>Goku</b> shared a <a href="">photo of food</a><br><p>December 2 at 9:00am</p></span>
                    </div>
                    <div class="feed_content">
                        <div class="feed_content_image">
                            <img src="images/burritos.png" alt="" />
                        </div>
                    </div>
                    <div class="feed_footer">
                        <ul class="feed_footer_left">
                            <li class="hover-orange selected-orange"><i class="fa fa-heart"></i> 19</li>
                            <li><span><b>Vegeta</b> and 18 more liked this</span></li>
                        </ul>
                        <ul class="feed_footer_right">
                            <li>
                                <li class="hover-orange selected-orange"><i class="fa fa-share"></i> 10</li>
                                <li class="hover-orange"><i class="fa fa-comments-o"></i> 17 comments</li>
                            </li>
                        </ul>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="https://kit.fontawesome.com/f75ca2de84.js" crossorigin="anonymous"></script>
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
    </script>
</body>
</html>