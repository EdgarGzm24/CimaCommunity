<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-->	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/estilosInicio.css">
    <!--===============================================================================================-->	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--===============================================================================================-->	
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />
    <!--===============================================================================================-->	
    <title>Edgar Guzman | CimaCommunity</title>
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
            <span> CimaCommunity</span>
        </div>
        <div class="navbar_search">
            <form method="" action="/">
                <input type="text" placeholder="Search people.." />
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="navbar_icons">
            <ul>
                <li id="friendsmodal"><i class="fa fa-user-o"></i><span id="notification">5</span></li>
                <li id="messagesmodal"><i class="fa fa-comments-o"></i><span id="notification">2</span></li>
                <a href="" style="color:white"><li><i class="fa fa-globe"></i></li></a>
            </ul>
        </div>
        <div class="navbar_user" id="profilemodal" style="cursor:pointer">
            <img src="images/user.jpg" alt="" />
            <span id="navbar_user_top">Edgar Guzman<br><p>Alumno</p></span><i class="fa fa-angle-down"></i>
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
                        <li style="border:none"><a href="#">Paginas</a></li>
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
                        <span><a href="profile.php"><b>Perfil</b></a> | <a href="about.php" id="select_profile_menu"><b>Sobre ti</b></a> | <a href="photos.php"><b>Fotos</b></a></span>
                    </div>
                </div>
            </div>

            <div class="row border-radius">
                <div class="settings shadow">
                    <div class="settings_title">
                        <h3>Personal Info</h3>
                    </div>
                    <div class="settings_content">
                        <style type="text/css">
                            .settings_content ul li p {padding:5px;padding-left: 20px}
                        </style>
                        <ul>
                            <li>
                                <p>
                                    <b>About Me:</b>
                                    <br>
                                    Hi, I’m Jonh, I’m 36 and I work as a Digital Designer for the “Daydreams” Agency in Pier 56
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Birthday:</b>
                                    <br>
                                    December 14th, 1980
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Birthplace:</b>
                                    <br>
                                    Austin, Texas, USA
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Lives in:</b>
                                    <br>
                                    San Francisco, California, USA
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Occupation:</b>
                                    <br>
                                    UI/UX Designer
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Joined:</b>
                                    <br>
                                    April 31st, 2014
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Gender:</b>
                                    <br>
                                    Male
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Status:</b>
                                    <br>
                                    Married
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Email:</b>
                                    <br>
                                    Jonh@yourmail.com
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Website:</b>
                                    <br>
                                    Ferrule.space/
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Phone Number:</b>
                                    <br>
                                    (044) 555 - 4369 - 8957
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Website:</b>
                                    <br>
                                    Ferrule.space/
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            
            

        </div>

        <div class="suggestions_row">
            

            <div class="row shadow">
                <div class="row_title">
                    <span>Last photos</span>
                    <a href="#">see all..</a>
                </div>
                <div class="row_contain_profilephotos">
                    <ul>
                        <li><a href="#"><img src="images/pp_1.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_2.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_3.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_4.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_5.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_6.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_3.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_1.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_1.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_2.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_6.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/pp_4.jpg" alt="" /></a></li>
                    </ul>
                </div>
            </div>


            <div class="row shadow">
                <div class="row_title">
                    <span>Friends in Common</span>
                    <a href="friends.php">17 more..</a>
                </div>
                <div class="row_contain">
                    <img src="images/user-7.jpg" alt="" />
                    <span><b>Francine Smith</b><br>8 Friends in Common</span>
                    <button>+</button>
                </div>
                <div class="row_contain">
                    <img src="images/user-2.jpg" alt="" />
                    <span><b>Hugh Wilson</b><br>6 Friends in Common</span>
                    <button>+</button>
                </div>
                <div class="row_contain">
                    <img src="images/user-6.jpg" alt="" />
                    <span><b>Karen Masters</b><br>6 Friends in Common</span>
                    <button>+</button>
                </div>
                <div class="row_contain">
                    <img src="images/user-7.jpg" alt="" />
                    <span><b>Francine Smith</b><br>8 Friends in Common</span>
                    <button>+</button>
                </div>
                <div class="row_contain">
                    <img src="images/user-2.jpg" alt="" />
                    <span><b>Hugh Wilson</b><br>6 Friends in Common</span>
                    <button>+</button>
                </div>
                <div class="row_contain">
                    <img src="images/user-6.jpg" alt="" />
                    <span><b>Karen Masters</b><br>6 Friends in Common</span>
                    <button>+</button>
                </div>
            </div>

            <div class="row shadow">
                <div class="row_title">
                    <span>Actividad reciente</span>
                </div>
                <div class="row_contain">
                    <img src="images/user.jpg" alt="" />
                    <span>Jonh Hamstrong commented on Jason Mark’s <a href="" class="selected-orange">photo</a>..</span>
                </div>
                <div class="row_contain">
                    <img src="images/user.jpg" alt="" />
                    <span>Jonh Hamstrong liked Nicholas Grissom’s <a href="" class="selected-orange">status update</a>..</span>
                </div>
                <div class="row_contain">
                    <img src="images/user.jpg" alt="" />
                    <span>Jonh Hamstrong added 20 new photos to her <a href="" class="selected-orange">gallery album</a>..</span>
                </div>
            </div>


            <div class="row shadow">
                <div class="row_title">
                    <span>Comunidades favoritas</span>
                    <a href="#">see all..</a>
                </div>
                <div class="row_contain">
                    <img src="images/group-1.png" alt="" />
                    <span><a href=""><b>The Marina Bar</b></a><br>Restaurant / Bar</span>
                </div>
                <div class="row_contain">
                    <img src="images/group-2.jpg" alt="" />
                    <span><a href=""><b>Caverna Roch</b></a><br>Rock / Band</span>
                </div>
                <div class="row_contain">
                    <img src="images/group-3.png" alt="" />
                    <span><a href=""><b>Pixel Digital Design</b></a><br>Company</span>
                </div>
            </div>

        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>



    <!-- Modal Messages -->
    <div class="modal modal-comments">
        <div class="modal-icon-select"><i class="fa fa-sort-asc" aria-hidden="true"></i></div>
        <div class="modal-title">
            <span>CHAT / MESSAGES</span>
             <a href="messages.php"><i class="fa fa-ellipsis-h"></i></a>
        </div>
        <div class="modal-content">
            <ul>
                <li>
                    <a href="#">
                        <img src="images/user-7.jpg" alt="" />
                        <span><b>Diana Jameson</b><br>Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...<p>4 hours ago</p></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/user-6.jpg" alt="" />
                        <span><b>Elaine Dreyfuss</b><br>We’ll have to check that at the office and see if the client is on board with...<p>Yesterday at 9:56pm</p></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/user-3.jpg" alt="" />
                        <span><b>Jake Parker</b><br>Great, I’ll see you tomorrow!.<p>4 hours ago</p></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Modal Friends -->
    <div class="modal modal-friends">
        <div class="modal-icon-select"><i class="fa fa-sort-asc" aria-hidden="true"></i></div>
        <div class="modal-title">
            <span>FRIEND REQUESTS</span>
             <a href="friends.php"><i class="fa fa-ellipsis-h"></i></a>
        </div>
        <div class="modal-content">
            <ul>
                <li>
                    <a href="#">
                        <img src="images/user-2.jpg" alt="" />
                        <span><b>Tony Stevens</b><br>4 Friends in Common</span>
                        <button class="modal-content-accept">Accept</button><button class="modal-content-decline">Decline</button>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/user-6.jpg" alt="" />
                        <span><b>Tamara Romanoff</b><br>2 Friends in Common</span>
                        <button class="modal-content-accept">Accept</button><button class="modal-content-decline">Decline</button>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/user-4.jpg" alt="" />
                        <span><b>Nicholas Grissom</b><br>1 Friend in Common</span>
                        <button class="modal-content-accept">Accept</button><button class="modal-content-decline">Decline</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Modal Profile -->
    <div class="modal modal-profile">
        <div class="modal-icon-select"><i class="fa fa-sort-asc" aria-hidden="true"></i></div>
        <div class="modal-title">
            <span>Tu cuenta</span>
             <a href="settings.php"><i class="fa fa-cogs"></i></a>
        </div>
        <div class="modal-content">
            <ul>
                <li>
                    <a href="settings.php">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span><b>Configuracion de cuenta</b><br>Mira y edita tus configuraciones</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <span><b>Crea una comnunidad</b><br>Decide cual sera la proxima comunidad</span>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <span><b>Cerrar sesion</b><br>Cierra sesion de tu cuenta</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- NavMobile -->
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