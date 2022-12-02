<!DOCTYPE html>
<html lang="en">
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
    <title>Configuracion | CimaCommunity</title>
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
            <span>> PROFILE</span>
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
            <span id="navbar_user_top">Jonh Hamstrong<br><p>User</p></span><i class="fa fa-angle-down"></i>
        </div>
    </div>

    <div class="all">

        <div class="rowfixed"></div>
        <div class="left_row">
            <div class="left_row_profile">
                <img id="portada" src="images/portada.jpg" />
                <div class="left_row_profile">
                    <img id="profile_pic" src="images/user.jpg" />
                    <span>Jonh Hamstrong<br><p>150k followers / 50 follow</p></span>
                </div>
            </div>
            <div class="rowmenu">
                <ul>
                    <li><a href="index.php"><i class="fa fa-globe"></i>Newsfeed</a></li>
                    <li><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
                    <li><a href="friends.php"><i class="fa fa-users"></i>Friends</a></li>
                    <li class="primarymenu"><i class="fa fa-compass"></i>Explore</li>
                    <ul>
                        <li style="border:none"><a href="#A">Activity</a></li>
                        <li style="border:none"><a href="#">Friends</a></li>
                        <li style="border:none"><a href="#">Groups</a></li>
                        <li style="border:none"><a href="#">Pages</a></li>
                        <li style="border:none"><a href="#">Saves</a></li>
                    </ul>
                    <li class="primarymenu"><i class="fa fa-user"></i>Rapid Access</li>
                    <ul>
                        <li style="border:none"><a href="#">Your-Page.php</a></li>
                        <li style="border:none"><a href="#">Your-Group.php</a></li>
                    </ul>
                </ul>
            </div>
        </div>



        

        <div class="right_row">

            <div class="row border-radius">
                <center><div class="settings shadow">
                    <div class="settings_title">
                        <h3>Personal Information</h3>
                    </div>
                    <div class="settings_content">
                        <form>
                            <div class="pi-input pi-input-lg">
                                <span>First Name</span>
                                <input type="text" value="Jonh" />
                            </div>
                            <div class="pi-input pi-input-lg">
                                <span>Last Name</span>
                                <input type="text" value="Hamstrong" />
                            </div>
                            <div class="pi-input pi-input-lg">
                                <span>Your Email</span>
                                <input type="text" value="Jonh@yourmail.com" />
                            </div>
                            <div class="pi-input pi-input-lg">
                                <span>Your Website</span>
                                <input type="text" value="ferrule.space/" />
                            </div>
                            <div class="pi-input pi-input-lg">
                                <span>Your Birthday</span>
                                <input type="date" value="1985-01-08" />
                            </div>
                            <div class="pi-input pi-input-lg">
                                <span>Your Phone Number</span>
                                <input type="text" />
                            </div>
                            <div class="pi-input pi-input-md">
                                <span>Your Country</span>
                                <select>
                                    <option selected>United State</option>
                                    <option>Argentina</option>
                                </select>
                            </div>
                            <div class="pi-input pi-input-md">
                                <span>Your State / Province</span>
                                <select>
                                    <option selected>California</option>
                                    <option>Texas</option>
                                </select>
                            </div>
                            <div class="pi-input pi-input-md">
                                <span>Your City</span>
                                <select>
                                    <option selected>San Francisco</option>
                                    <option>New York</option>
                                </select>
                            </div>
                            <div class="pi-input pi-input-lg">
                                <span>Your Gender</span>
                                <select>
                                    <option selected>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="pi-input pi-input-lg">
                                <span>Status</span>
                                <select>
                                    <option selected>Married</option>
                                    <option>Not Married</option>
                                </select>
                            </div>
                            <div class="pi-input pi-input-lgg">
                                <span>Little description about you</span>
                                <input type="text" value="Hi, I’m Jonh, I’m 36 and I work as a Digital Designer..." />
                            </div>

                            <button>Save All Changes</button>
                        </form>
                    </div>
                </div></center>
            </div>
        </div>

        <div class="suggestions_row">
            <div class="row shadow">
                <div class="row_title">
                    <span>Profile Settings</span>
                </div>
                <div class="menusetting_contain">
                    <ul>
                        <li>
                            <a href="Personal-Information.php" id="settings-select">Personal Information</a>
                        </li>
                        <li>
                            <a href="settings.php">Account Settings</a>
                        </li>
                        <li>
                            <a href="Change-Password.php">Change Password</a>
                        </li>
                        <li>
                            <a href="#">Hobbies and Interests</a>
                        </li>
                        <li>
                            <a href="#">Education and Employement</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="row shadow">
                <div class="row_title">
                    <span>Pages You May Like</span>
                    <a href="#">see more..</a>
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
            <span>YOUR ACCOUNT</span>
             <a href="settings.php"><i class="fa fa-cogs"></i></a>
        </div>
        <div class="modal-content">
            <ul>
                <li>
                    <a href="settings.php">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span><b>Profile Settings</b><br>Yours profile settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <span><b>Create a page</b><br>Create your page</span>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <span><b>Log Out</b><br>Close your session</span>
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
                <span>Jonh Hamstrong<br><p>150k followers / 50 follow</p></span>
            </div>
            <div class="mobilemenu_menu">
                <ul>
                    <li><a href="index.php"><i class="fa fa-globe"></i>Newsfeed</a></li>
                    <li><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
                    <li><a href="friends.php"><i class="fa fa-users"></i>Friends</a></li>
                    <li><a href="messages.php"><i class="fa fa-comments-o"></i>messages</a></li>
                    <li class="primarymenu"><i class="fa fa-compass"></i>Explore</li>
                    <ul class="mobilemenu_child">
                        <li style="border:none"><a href="#"><i class="fa fa-globe"></i>Activity</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-file"></i>Friends</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-file"></i>Groups</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-file"></i>Pages</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-file"></i>Saves</a></li>
                    </ul>
                    <li class="primarymenu"><i class="fa fa-user"></i>Rapid Access</li>
                    <ul class="mobilemenu_child">
                        <li style="border:none"><a href="#"><i class="fa fa-star-o"></i>Your-Page.php</a></li>
                        <li style="border:none"><a href="#"><i class="fa fa-star-o"></i>Your-Group.php</a></li>
                    </ul>
                </ul>
                    <hr>
                <ul>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="login.php">Logout</a></li>
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