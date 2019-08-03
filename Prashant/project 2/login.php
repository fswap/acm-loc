<?php

include "connection.php";
include "navbar.php";
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>student login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  	input{
  		height: 25px;
  		width: 300px;
  	}
  	.box1{
  		height: 400px;
  		width: 450px;
  		opacity: .7;
  		background-color: black;
  		margin: 70px auto;
  		color: white;
  		padding: 20px;
  	}
  	form .login{
  		margin: 70px;
  	}
  </style>
</head>
<body>
  <!--
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">IIT ISM LIBRARY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="lib.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg.html">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Login</a>
      </li>
    </ul>
  </div>
</nav>-->

	<div class="container-fluid"style="margin-top:80px;padding: 10px; background-color: #93adc5;">
	
		<h1>Student Login</h1>
		
	 <div id="login" class="row">
	 	<div class="col">
		 <form name="login" action="" method="post">
		 	<div class="form-group">
			 <input type="text" class="form-control" name="username" placeholder="Username" required="">
			</div>
			<div class="form-group">
			 <input type="password" class="form-control" name="password" placeholder="Password" required="">
			</div>
			 <button type="submit" class="btn btn-primary" name="submit">login</button>
		 </form>
		 <a href="#" style="color: black;">forget password?</a>
		 <a href="" style="color: black;">register</a>
		</div>
	</div>
</div>

<?php

if(isset($_POST['submit']))
   {
    $count=0;
    $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && pswd='$_POST[password]';");
    $count=mysqli_num_rows($res);

    if($count==0)
    {
      ?>
      <!--
      <script>
        alert("the username and password doesn't exits");
      </script>
    -->
    <div class="alert alert-danger">
      <strong>the username and password doesn't exits</strong>
    </div>
      <?php
    }
    else
    {
      $_SESSION['login_user'] = $_POST['username'];
      ?>
      <script>
        window.location="books.php";
      </script>
<?php
  }
   }
?>
</body>
</html>