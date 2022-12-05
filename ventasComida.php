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
    <link rel="stylesheet" type="text/css" href="css/estiloVentasC.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/estiloComunidades.css">
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
        
        <div class="left_row border-radius fondo ">
            <div >
            <h1>Venta comida</h1>
            </div>
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
            <hr>           
            <a></a><h1>Cafetería  UABC</h1></a> 
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

        </div>
        
             

    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>


 
</body>
</html>