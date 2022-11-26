<?php
	require_once  'conexion.php';
	
	/*$sql = 'SELECT opiniones.descripcion_opinion, opiniones.titulo, opiniones.calificación, 
    opiniones.fecha_creacion_op, 
    usuario.nombre, usuario.apellido_p, usuario.apellido_m FROM opiniones 
    INNER JOIN usuario ON opiniones.usuario_idusuario = usuario.idusuario';*/

    $sql = 'SELECT comunidades.nombre AS nombreCom, comunidades.descripcion_comunidad,usuario.foto_usuario, usuario.nombre, usuario.apellido_p, 
    usuario.apellido_m, publicaciones.descripcion_publicacion, publicaciones.fecha_creacion, publicaciones.foto_publicacion 
    FROM (comunidades_has_publicaciones INNER JOIN publicaciones
          ON comunidades_has_publicaciones.publicaciones_idPublicaciones = publicaciones.idPublicaciones INNER JOIN comunidades 
          ON comunidades_has_publicaciones.comunidades_idcomunidad = comunidades.idcomunidad)
    INNER JOIN usuario ON publicaciones.usuario_idusuario = usuario.idusuario WHERE comunidades.idcomunidad = 2';
	$query = mysqli_query($conexion, $sql);
	
?>   

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"-->
    <!--===============================================================================================-->	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--===============================================================================================-->	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/estilosInicio.css">
    <!--===============================================================================================-->	
    <link rel="stylesheet" href="css/estiloComunidad.css">     
    <!--===============================================================================================-->	
    <title>Comunidad | CimaCommunity</title>

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
                <input type="text" placeholder="Busca tu comunidad.." />
                <button type="submit"> <a href="busqueda.php" class="fa fa-search"></a></button>
            </form>
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
    <?php
        while($row = mysqli_fetch_assoc($query)){
    ?>

  
    <div class="all2">
        <div class="rowfixed"></div>
        <div class="left_row">
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
                                <?php echo $row['descripcion_comunidad']?>
                                </p> 
                                <br>                                   
                            </ul>
                        </div>  
                    </div>   
                </div>
            </div>
        </div>


        <div class="right_row2">
            
            <div class="feed">

                <div class="row2 border-radius">
                            <div class="feed_content_image">
                                <img src="images/fondo.png" alt="" /></a>
                </div>
                <hr>                    
                <div class="feed_title">
                    <div class="right">
                        <h4><?php echo $row['nombreCom']?></h4>
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
                    <form method="" action="/">
                        <div class="publish_textarea">
                            <img class="border-radius-image" src="images/user.jpg" alt="" />
                            <textarea type="text" placeholder="Que estas haciendo ahora?" style="resize: none;"></textarea>
                        </div>
                        <div class="publish_icons">
                            <ul>
                                <li><i class="fa fa-camera"></i></li>
                                <li><i class="fa fa-video-camera"></i></li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
                            </ul>
                            <button>Publicar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="feed">
                <div class="row2 border-radius">
                    <div class="feed_title">
                        <img src="<?php echo $row['foto_usuario']?>" alt="" />
                        <span><b><?php echo $row['nombre']." ".$row['apellido_p']." ".$row['apellido_m'] ?></b> compartio una <a href="feed.php">foto</a><br><p><?php echo $row['fecha_creacion'] ?></p></span>
                    </div>
                    <div class="feed_content">
                        <div class="feed_content_image">
                            <img src="<?php echo $row['foto_publicacion']?>" alt="" /></a>
                        </div>
                    </div>
                    <div class="feed_content">
                        <div class="feed_content_image">
                            <p><?php echo $row['descripcion_publicacion']?> <br></p>
                        </div>
                    </div>
                    <div class="feed_footer">
                        <ul class="feed_footer_left ">                            
                        </ul>                            
                        <ul class="feed_footer_right ">
                            <li >                                
                                <a href="feed.php" style="color:#515365;"><li class="hover-orange"><i class="fa fa-comments-o "></i> 74 commentarios</li></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <?php
        }
        mysqli_close($conexion);
        ?>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

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
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

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
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/f75ca2de84.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
</body>
</html>






