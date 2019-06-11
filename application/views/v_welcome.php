<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>uktQ.com</title>
    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/animate.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/animate.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">   
</head>

<body>
    <nav>
        <div class="nav-wrapper">
          <a href="#" style="margin-left: 10%" class="brand-logo">
            <img src="img/uktQ.png" width="75%"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-right: 7.5%">
            <!--<li><a href="How.html">How It Works</a></li> -->
            <li><a href="About.html">About</a></li>
            <li><a href="index.php/c_login">Login</a></li>
            <li><a href="index.php/c_login/register">Register</a></li>
          </ul>
        </div>
    </nav>
    <div class="Intro">
        <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6"> <img class="right" style="margin-top: 75px" width="100%"> 
                        <p style="line-height:35px;"> <span style="font-size: 50px;">Dengan uktQ</span>
                            <br>
                            <br> 
                            <span style="font-size: 30px;">Ketahui biaya kuliah di kampus impianmu!</span>
                            <br>
                            <br>
                            
                            <form class="cari" style="margin-top: 25px" action="index.php/c_login" >
                                <span style="font-size: 20px;">Program Studi</span>
                                <input type="text" placeholder="Search.." name="search2">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Cari
                                    <i class="material-icons right"></i>
                                  </button>
                            </form>
                    </div>
                    <div class="col s12 m6 l6"> <img src="img/Group.png" width="100%"> 
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/init.js"></script>
    <script src="js/viewportchecker.js"></script>
    
</body>

</html>

<?php
#    echo anchor('c_login','login');
 #   echo '<br>';
 #   echo anchor('c_login/register','register');
 #   echo '<br>';
?>  