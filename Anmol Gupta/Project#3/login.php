<?php
include('header.php');
$error=["fname"=>"","lname"=>"","name"=>"","password"=>"","email"=>"","roll"=>""];
$noe=0;
$sub=0;
$fname='';
$lname='';
$name='';
$email='';
$roll='';
$password='';
if (isset($_POST['submit'])) 
{
  $sub=1;

  if(empty($_POST['email']))
  {
      $error["email"]='Email is required';
      $noe=$noe+1;
  }
  else
  {
  	$email=$_POST['email'];
  } 


  if(empty($_POST['password']))
  {
      $error["password"]='Password is required';
      $noe=$noe+1;
  } 
  else
  {
  	$password=$_POST['password'];
  } 



}
  ?>


<div class="container-fluid text-center" style="background-image: url(imag/login.png);background-repeat: no-repeat;background-size: cover;background-attachment: fixed;padding-top: 100px;padding-bottom: 100px;">
	<div class="container" style="background-color: white;box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);border-radius: 15px;padding: 20px;padding-right: 30px;padding-top: 50px;padding-bottom: 50px;width: 90%;max-width: 500px;">
		<div class="heading" style="margin-bottom: 30px;"><span class="bg-grey" style="background-color: white; color: #ff4c4c;padding-left: 10px">LOG </span><span class="bg-grey" style="background-color: white; color: #0099e5;padding-right: 10px">IN</span></div>
        <br>          
        <br>
        <?php 
        if($noe===0&&$sub===1) 
        {
        	$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
        	$res=mysqli_query($conn,$sql);
        	if(mysqli_num_rows($res)>0)
        	{
        		$row=mysqli_fetch_assoc($res);
        		$_SESSION['user']=$row['name'];
        		$_SESSION['em']=$row['email'];
        		header('Location: home.php');
        	}
        	else
        	{
        		?>
          		<div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          		<div class="alert alert-danger " role="alert" style="width: 90%;max-width: 450px; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            		Invalid Email or Password. 
          		</div>
         		</div><?php	
        	}
        }
        ?>
		<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <input type="text" class="slider log" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email);?>">
          <br>
          <br>
          <?php if ($error["email"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 90%;max-width: 450px; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["email"]);?>  
          </div>
          </div><?php } ?>
          <input type="Password" class="slidel log" name="password" placeholder="Password" value="<?php echo htmlspecialchars($password);?>">
          <br>
          <br>
          <?php if ($error["password"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 90%;max-width: 450px; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["password"]);?>  
          </div>
          </div><?php } ?>
          <br>
          <div class="text-center fadein">
          <input type="submit" name="submit" value="Log In" class="sear3" style="width: 60%">
          </div>
        </form>
        <br>
        <br>
        <div class="loginp fadein" style="">
        	Not a Member Yet? <a href="signup.php" style="color: #ff4c4c; ">Sign Up Now</a>
        </div>
	</div>	
</div>

<?php
include('footer.php');
?>