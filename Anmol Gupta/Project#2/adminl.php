<?php 
ob_start();
session_start();
include('connection.php');
$error=["fname"=>"","lname"=>"","name"=>"","password"=>"","email"=>"","roll"=>"","ques"=>""];
$noe=0;
$sub=0;
$fname='';
$lname='';
$name='';
$email='';
$roll='';
$password='';
$ques='';
if (isset($_POST['submit'])) 
{
  $sub=1;

  if(empty($_POST['name']))
  {
      $error["name"]='Username is required';
      $noe=$noe+1;
  } 
  else
  {
      $name = $_POST['name'];
      $_SESSION["user"]=$name;
  }

  if(empty($_POST['password']))
  {
      $error["password"]='Password is required';
      $noe=$noe+1;
  } 
  else
  {
      $password = $_POST['password'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="imagehover.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    .main-bg
    {
      background: url(imag/lib.jpg) no-repeat center;
      background-size: cover;
      -webkit-background-size: cover;
     -moz-background-size: cover;
      -o-background-size: cover;
     -ms-background-size: cover;
     min-height: 100vh;
    }
    .logi
    {
      background-color:#e0c475;
      color: white;
      border-radius: 30px;
      transition: 0.5s;
      cursor: pointer;
      padding: 20px;
      font-size: 25px;
    }
    .logi:hover {
      background-color: #f7c843;
    box-shadow: 5px 0px 40px rgb(77, 78, 79);
    padding: 10px;
    padding-top: 20px;
    padding-bottom: 20px;
    font-size: 35px;
  }
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  .tabl
  {
    background-color: #e0c475;
    padding: 10px;
    font-size: 20px;
    color: white;
    border-radius: 20px 0px 0px 20px;
      }
  .tabr
  {
    background-color: #e0c475;
    padding: 10px;
    font-size: 20px;
    color: white;
    border-radius: 0px 20px 20px 0px;

  }
  .tabm
  {
    background-color: #e0c475;
    padding: 10px;
    font-size: 20px;
    color: white;
    border-left: 3px solid #f29818;
    border-right: 3px solid #f29818;

  }
  .butt
  {
    height: 50px;
    width: 200px;
    background-color: #f29818;
    color: white ;
    font-size: 20px;
    transition: 0.5s;
    border: 0px;
    border-radius: 15px;
  }
  .butt:hover
  {
    color: #f29818;
    background-color: white;
    font-size: 25px;
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
  .inactive
  {
    cursor: pointer;
    transition: 0.5s;
    background-color: #edac32;
    font-size: 20px;
  }
  .inactive:hover
  {
    margin-top: -3px;
    background-color:white;
    color: #edac32;
    font-size: 25px;
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
  .vibrate {
    animation-name: vibrate;
    animation-duration: 0.5s;
    animation-iteration-count: infinite;
  }
@keyframes vibrate {
    0% 
    {
      transform:translateX(0%);
    }
    25%
    {
      transform:translateX(2%);
    }
    50%
    {
      transform:translateX(0%);
    }
    75%
    {
      transform:translateX(-2%);
    } 
    100% {
      transform:translateX(0%);
    }
  }
  input[type="text"]
  {
    transition: 0.5s;
    text-align: center;
    width: 50%;
    height: 50px;
    font-size: 20px; 
    background-color: #fac478;
    margin: 0px;border: 0px; 
    border-radius: 20px;
  }
  input[type="text"]:focus
  {
    border-color: #ed5509;
    width: 60%;
    background-color: white;
  box-shadow: 5px 0px 40px #ed5509;
  border-radius: 20px;
  outline: none;
  }
  input[type="password"]
  {
    transition: 0.5s;
    text-align: center;
    width: 50%;
    height: 50px;
    font-size: 20px; 
    background-color: #fac478;
    margin: 0px;border: 0px; 
    border-radius: 20px;
  }
  input[type="password"]:focus
  {
    border-color: #ed5509;
    width: 60%;
    background-color: white;
  box-shadow: 5px 0px 40px #ed5509;
  border-radius: 20px;
  outline: none;
  }
  .dibba
  {
    width: 70% ;
    
    transition: 0.5s;
  }
@media screen and (max-width: 855px) {
.inactive
  {
    cursor: pointer;
    transition: 0.5s;
    background-color: #edac32;
    font-size: 15px;
  }
  .inactive:hover
  {
    margin-top: -3px;
    background-color:white;
    color: #edac32;
    font-size: 20px;
  }
  .tabm
  {
    font-size: 15px;  
  }
  }
@media screen and (max-width: 768px) 
  {
    .dibba
  {
    width: 95%;
  }
  input[type="text"]
  {
    width: 80%;
  }
  input[type="text"]:focus
  {
    width: 90%;
  }
  input[type="password"]
  {
    width: 80%;
  }
  input[type="password"]:focus
  {
    width: 90%;
  }
  .tabl
  {




    border-radius: 20px 20px 0px 0px;
      }
  .tabr
  {

    border-radius: 0px 0px 20px 20px;

  }
  .tabm
  {

    border: 0px;
    border-top: 3px solid #f29818;
    border-bottom:  3px solid #f29818;

  }
  }
  </style>
</head> 
<body>
  <div class="main-bg" style="text-align: center;padding-bottom: 50px;">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container text-center dibba" style="background-color:#ebbb38;border-radius: 25px;padding-bottom: 50px;">
      <h1 class="slide" style="color: white;">
        Admin Login Page
      </h1> 
      <div class="row" style="padding: 20px;">
        <div class="col-sm-6 text-center tabl slidel">
          Login
        </div>
        <a href="adminp.php">
        <div class="col-sm-6 text-center tabr inactive slider">
          Forgot Password
        </div>
        </a>
      </div>
      <?php
        if($noe===0&&$sub===1)
        {
        $sql="SELECT * FROM admins WHERE name='$name' AND password='$password'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
          $row=mysqli_fetch_assoc($res);
          header('Location: admindash.php');
        }
        else
        {
          ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 100%; align-self: center;border-radius: 20px;border: 1px solid maroon;">
              Incorrect Username or Password.
          </div>
          </div>
          <?php 
        }
      }
      ?>
      <div class="text-center" style="padding-top: 10px;">
        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

          <input type="text" class="slidel" name="name" placeholder="Username" value="<?php echo htmlspecialchars($name);?>">
          <br>
          <br>
          <?php if ($error["name"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 100%; align-self: center;border-radius: 20px;border: 1px solid maroon;">
            <?php echo htmlspecialchars($error["name"]);?>  
          </div>
          </div><?php } ?>
          <input type="Password" class="slider" name="password" placeholder="Password" value="<?php echo htmlspecialchars($password);?>">
          <br>
          <br>
          <?php if ($error["password"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 100%; align-self: center;border-radius: 20px;border: 1px solid maroon;">
            <?php echo htmlspecialchars($error["password"]);?>  
          </div>
          </div><?php } ?>
          <br>

          <div class="text-center">
          <input type="submit" name="submit" value="Submit" class="butt slide">
          </div>
        </form>
        <br>
        <a href="index.php"><button class="butt slide">Back to Home</button></a>
      </div>
    </div>  
  </div>
<script>
$(document).ready(function(){
  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    
    if (this.hash !== "") {
      
      event.preventDefault();

      
      var hash = this.hash;

      
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
       
        window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>