<?php

include "connection.php";
include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>student register</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
<div id="form" class="container-fluid" style="margin-top:80px;padding: 10px; background-color: #93adc5;>
  <div class="row">
    <div class="col">
      <h2>Register yourself</h2>
      <form name="registration" action="" method="post">
      	<div class="form-group">
      <input type="text" class="form-control" id="firstname" placeholder="First name" name="firstname" required="">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="user" placeholder="Username" name="username" required="">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="adm" placeholder="Admission no." name="admno" required="">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required="">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">submit</button>
  </form>
    </div>
  </div>

<?php

   if(isset($_POST['submit']))
   {
    $count=0;
    $sql="SELECT username from student";
    $res=mysqli_query($db,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
      if($row['username']==$_POST['username'])
      {
        $count=$count+1;
      }
    }
    if($count==0)
   {
    mysqli_query($db,"INSERT INTO `student`(`firstname`, `lastname`, `username`, `admno`, `email`, `pswd`) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[admno]','$_POST[email]','$_POST[pswd]');");
   

?>
<script>
  alert("registration successful");
</script>
<?php
}
 else{
 ?>
<script>
  alert("username already exits");
</script>
<?php
}
}
?>

</body>
</html>