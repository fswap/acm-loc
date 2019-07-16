<?php
ob_start();
session_start();
include('connection.php');


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="imag/fav.png">
        <title>Hardcore Productions</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
            
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
    background: white;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {

    background: #fff;
    border: none;
    border-radius: 0;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0px;
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}


#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px;
    height: 100vh;
    z-index: 999;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
    overflow-y: scroll;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
}

#sidebar.active {
    left: 0;
}

#dismiss {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    background: #7386D5;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}
#dismiss:hover {
    background: #fff;
    color: #7386D5;
}

.overlay {
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.7);
    z-index: 998;
    display: none;
}

#sidebar .sidebar-header {
    padding: 20px;
    padding-top: 30px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;

}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}
a.download {
    background: #fff;
    color: #7386D5;
}
a.article, a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}


#content {
    width: 100%;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}
.upp
{
    color: white;
    transition: 0.5s;
}
.upp:hover
{
    color: grey;
}
.sear
{
    color: white;
    background-color:rgb(255, 76, 76);
    height: 42px;
    width: 42px;
    transition: 0.5s;
    border-radius: 12px;
    border: 2px solid white;
    font-size: 1.3em;
}
.sear:hover
{
    color: rgb(255, 76, 76);
    background-color: white; 
    border: 2px solid rgb(255, 76, 76);  
}
.sear2
{
    color: white;
    background-color: rgb(255, 76, 76);
    padding: 7px;
    width: 51px;
    transition: 0.5s;
    border-radius: 12px;
    border: 2px solid white;
    margin-top: 7px;
}
.sear2:hover
{
    color: rgb(255, 76, 76);
    background-color: white; 
    border: 2px solid rgb(255, 76, 76);  
}
.sear3
{
    color: white;
    background-color: rgb(79, 184, 237);
    padding: 8px;
    transition: 0.5s;
    border-radius: 12px;
    border: 2px solid white;
    margin-top: 7px;
    font-size: 1.5em;
}
.sear3:hover
{
    color: rgb(79, 184, 237);
    background-color: white; 
    border: 2px solid rgb(79, 184, 237);  
}
.sear4
{
    color: white;
    background-color:  rgb(255, 76, 76);
    padding: 8px;
    transition: 0.5s;
    border-radius: 12px;
    border: 2px solid white;
    margin-top: 7px;
    font-size: 1.5em;
}
.sear4:hover
{
    color:  rgb(255, 76, 76);
    background-color: white; 
    border: 2px solid  rgb(255, 76, 76);  
}
.headf
{
    width: 300px;height: 42px;
    border: 1px solid black;
    margin-right: 10px;
    text-align: center;
    color: black;
}
.headf:focus
{
    outline: none;
}
.sear:focus
{
    outline: none;
}
.sear2:focus
{
    outline: none;
}
.sear3:focus
{
    outline: none;
}
@media screen and (max-width: 900px) 
{
    .headf
    {
        width: 250px;height: 42px;
    }
}
.covo
{
    overflow: hidden;
    height: 470px;
}
.covin
{
    opacity: 0;
    width:100%;
    height: 500px;
}
.covim
{
    width:100%;
    height: 500px;
    object-fit: cover;
}
@media screen and (max-width: 768px) 
{
    .navbar
    {
        padding-left: 25px;
    }
    .covo
    {
        height: 350px;
    }
    .covin
    {
        height: 380px;
    }
    .covim
    {
        height: 380px;

    }
}
@media screen and (max-width: 600px) 
{
    .headf
    {
        width: 180px;height: 42px;
    }
}
@media screen and (max-width: 450px) 
{
    .headf
    {
        width: 150px;height: 42px;
    }   
}
@media screen and (max-width: 395px) 
{
    .headf
    {
        width: 135px;height: 42px;
    }   
}
.cov
{
    animation-name: cov;
    animation-duration: 10s;
    transform: translateY(-20px);
    animation-iteration-count: infinite;
}
  @keyframes cov {
    0% {
      opacity: 0;
      transform: translateY(0%); 
    }
    10%
    {
      opacity: 0.9;    
    } 
    49% {
      opacity: 1;
      transform: translateY(-20px);
    }
    50%
    {
        opacity: 0;
    }
    100%
    {
        opacity: 0;
    }
  }
.heading {
   width: 100%; 
   text-align: center; 
   border-bottom: 0.5px solid #8c8989; 
   line-height: 0.1em;
   margin: 10px;
   font-size: 2.5em;
} 

.heading span { 

}
#totop
{

}
.scroll_To_Top
{
    position: fixed;
    z-index: 599;
    transition: 0.5s;
    bottom:20px;
    right: 20px;
    background-color: red;
    border-radius: 10px;
    color: white;
    font-size: 1.5em;
    padding: 10px;
    padding-bottom: 5px;
    padding-top: 5px;
    cursor: pointer;
    border:2px solid transparent;
    display: none;
}
.scroll_To_Top:hover
{
    background-color: white;
    border:2px solid red;
    color: red;
}
.pane
{
    width:100%;
    background-color: white;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    transition: 0.5s;
    cursor: pointer;
}
.pane:hover
{
    box-shadow: 0px 4px 12px 8px rgba(222,213,214,1);
    color: rgb(79, 184, 237);
}
.gri
{
    padding: 0px;
    margin: 0px;
    position: relative;
}
.curtain
{
    width: 100%;
    height: 0%;
    transition: 1s;
    background-color: orange;
    cursor: pointer;
    opacity: 0.5;
}
.pane
{
    font-size: 20px;
    color: black;
}
.pane:hover span.price {
    background:rgb(79, 184, 237);
    transition:0.5s all;
    -webkit-transition:0.5s all;
    -moz-transition:0.5s all;
    -o-transition:0.5s all;
    -ms-transition:0.5s all;
}
.pane:hover .triangle-right {
    border-left: 50px solid rgb(79, 184, 237);
    z-index: -1;
    
    transition:0.5s all;
    -webkit-transition:0.5s all;
    -moz-transition:0.5s all;
    -o-transition:0.5s all;
    -ms-transition:0.5s all;
}
.price
{
    position: absolute;
    top:0px;
    right: -7px;
    background-color: rgb(255, 76, 76);
    color: white;
    font-size: 15px;
    padding: 7px;
    padding-left: 20px;
    padding-right: 20px;

}
.triangle-right {
    width: 0;
    height: 0;
    border-top: 25px solid transparent;
    border-left: 50px solid rgb(255, 76, 76);
    border-bottom: 25px solid transparent;
    position: absolute;
    right: -7px;
    top:9.5px;
    z-index: -5;
}
.panelimg {
    width: 100%;
    height: 200px;
    max-width: 300px;
}
.log
{
    text-align: center;
    width: 270px;
    transition: 0.5s;
    font-size: 1.2em;
    height: 40px;
    outline: none;
    border: 0px;
    border-bottom: 0.5px solid #8c8989;
}
.log:focus
{
    outline: none;
    width: 300px;
}

.loginp
{
    font-size: 18px;
}
@media screen and (max-width: 450px) 
{
    .log
    {
        width: 220px;
    }
    .log:focus
    {
        width: 250px;
    }
    .loginp
    {
        font-size: 15px;
    }
}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
@keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(30%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(30%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  .slidel {
    animation-name: slidel;
    -webkit-animation-name: slidel;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
@keyframes slidel {
    0% {
      opacity: 0;
      transform: translateX(-20%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }
  @-webkit-keyframes slidel {
    0% {
      opacity: 0;
      -webkit-transform: translateX(-20%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateX(0%);
    }
  }
  .slider {
    animation-name: slider;
    -webkit-animation-name: slider;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
@keyframes slider {
    0% {
      opacity: 0;
      transform: translateX(20%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }
  @-webkit-keyframes slider {
    0% {
      opacity: 0;
      -webkit-transform: translateX(20%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateX(0%);
    }
  }
  .fadein {
    animation-name: fadein;
    -webkit-animation-name: fadein;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
@keyframes fadein {
    0% {
      opacity: 0;
    } 
    100% {
      opacity: 1;
    }
  }
  @-webkit-keyframes fadein {
    0% {
      opacity: 0;
    } 
    100% {
      opacity: 1;
    }
  }
  .addf
  {
    width: 70%;
    min-width: 250px;
    height: 40px;
    transition: 0.5s;
  }
  .addf:focus
  {
    box-shadow: 0 0 5px rgba(81, 203, 238, 1);
    border: 1px solid rgba(81, 203, 238, 1);
  }
.dibba
  {
    width: 70% ;
    
    transition: 0.5s;
  }
  .prodim
  {
    width: 100%;
    min-height: 250px; 
  }
  .prodt
  {
    font-size: 20px;
  }
  .detb
  {
    height: 310px;
  }
  @media screen and (max-width: 1181px) 
{
    .prodt
    {
        font-size: 15px;
    }
}
  @media screen and (max-width: 920px) 
{
    .prodt
    {
        font-size: 13px;
    }
}
  @media screen and (max-width: 768px) 
{
    .detb
    {
        height: auto;
    }
}


        </style>
        
    </head>
    <body>

        <div class="wrapper">

            <nav id="sidebar">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <h3>Select Category</h3>
                </div>

                <ul class="list-unstyled components">

                    <li>
                        <a href="mobiles.php"><i class="fa fa-fw fa-mobile"></i><span>Mobiles</span></a>
                    </li>
                    <li>
                        <a href="electronics.php"><i class="fa fa-fw fa-laptop"></i><span>Electronics and appliances</span></a>
                    </li>
                    <li>
                        <a href="cars.php"><i class="fa fa-fw fa-car"></i><span>Cars</span></a>
                    </li>
                    <li>
                        <a href="bikes.php"><i class="fa fa-fw fa-motorcycle"></i><span>Bikes</span></a>
                    </li>
                    <li>
                        <a href="furni.php"><i class="fa fa-fw fa-wheelchair"></i><span>Furnitures</span></a>
                    </li>
                    <li>
                        <a href="pets.php"><i class="fa fa-fw fa-paw"></i><span>Pets</span></a>
                    </li>
                    <li>
                        <a href="books.php"><i class="fa fa-fw fa-book"></i><span>Books, Sports & Hobbies</span></a>
                    </li>
                    <li>
                        <a href="fashion.php"><i class="fa fa-fw fa-asterisk"></i><span>Fashion</span></a>
                    </li>
                    <li>
                        <a href="kids.php"><i class="fa fa-fw fa-asterisk"></i><span>Kids</span></a>
                    </li>
                    <li>
                        <a href="services.php"><i class="fa fa-fw fa-shield"></i><span>Services</span></a>
                    </li>
                    <li>
                        <a href="jobs.php"><i class="fa fa-fw fa-at"></i><span>Jobs</span></a>
                    </li>
                    <li>
                        <a href="real_estate.php"><i class="fa fa-fw fa-home"></i><span>Real Estate</span></a>
                    </li>
                </ul>

            </nav>

            <div id="content">

                <div class="container-fluid" style="background-color: black;" style="text-align: right;">
                    <div style="float: right;padding: 5px;"><a href="home.php" class="upp"><span class="glyphicon glyphicon-home" style="margin-right: 9px;"></span>Home</a></div>
                    <?php
                    if(isset($_SESSION['user']))
                    {?>
                    <div style="float: right;padding: 5px;"><a href="logout.php" class="upp"><span class="glyphicon glyphicon-log-out" style="margin-right: 9px;"></span>Log Out</a></div>
                    <div style="float: right;padding: 5px;"><a href="user.php" class="upp"><span class="glyphicon glyphicon-user"style="margin-right: 9px;"></span><?php echo $_SESSION['user'];?></a></div>
                    
                    <?php
                    }
                    else
                    {
                    ?>
                    <div style="float: right;padding: 5px;"><a href="signup.php" class="upp"><span class="glyphicon glyphicon-user" style="margin-right: 7px;"></span>Sign Up</a></div>
                    <div style="float: right;padding: 5px;"><a href="login.php" class="upp"><span class="glyphicon glyphicon-log-in" style="margin-right: 7px;"></span>Log In</a></div>
                    <?php
                    }
                    ?>

                </div>
                <nav class="navbar navbar-default" style="padding-bottom: 10px;margin-bottom: 0px;z-index: 50;" >
                    <div class="container-fluid" style="padding: 0px;padding-left: 10px;margin-bottom: 0px;">
                        <div class="navbar-header" style="width: 100%;margin-bottom: 0px;">
                            <div style="float: left;">
                            <button type="button" id="sidebarCollapse" class="sear2">
                                <i class="glyphicon glyphicon-align-justify" style="font-size: 2em;"></i>
                            </button>
                            </div>
                            <div>
                                <a href="addadd.php">
                                <button class="sear3" style="float: right;margin-right: 10px;">
                                    Post an Ad
                                </button>
                                </a>    
                            </div>
                        </div>        
                    </div>
                </nav>
                