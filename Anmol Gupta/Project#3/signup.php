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
  if(empty($_POST['fname']))
  {
      $error["fname"]='Name is required';
      $noe=$noe+1;
  } 
  else
  {
      $fname = $_POST['fname'];
      if(!preg_match("/^[a-zA-Z ]{3,50}$/",$fname))
      {
        $error["fname"]='Name must only contain alphabets and spaces and should be atleast 3 characters long.';
        $noe=$noe+1;
      }
  }

  if(empty($_POST['email']))
  {
      $error["email"]='Email is required';
      $noe=$noe+1;
  } 
  else
  {
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $error["email"]='Email should be a valid Email address.';
        $noe=$noe+1;
      }
      else
      {
        $sql="SELECT * FROM users WHERE email='$email'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
          $error["email"]='This Email is already Registered.';
          $noe=$noe+1; 
        }
      }
  }

  if(empty($_POST['name']))
  {
      $error["name"]='Phone Number is required';
      $noe=$noe+1;
  } 
  else
  {
      $name = $_POST['name'];
      if(!preg_match("/[0-9]{10}/",$name))
      {
        $error["name"]='Phone Number must be a valid 10 digit Indian Phone Number without +91';
        $noe=$noe+1;
      }
      else
      {
        $sql="SELECT * FROM users WHERE phno='$name'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
          $error["name"]='This Phone Number is already Registered.';
          $noe=$noe+1; 
        }
      }
  }

  if(empty($_POST['password']))
  {
      $error["password"]='Password is required';
      $noe=$noe+1;
  } 
  else
  {
      $password = $_POST['password'];
      if(!preg_match("/^.{8,50}$/",$password))
      {
        $error["password"]='Password should be atleast 8 characters long.';
        $noe=$noe+1;
      }
  }


  if(empty($_POST['lname']))
  {
      $error["lname"]='Please Retype Password';
      $noe=$noe+1;
  } 
  else
  {
      $lname = $_POST['lname'];
      if(!($password==$lname))
      {
        $error["lname"]='Both Passwords must Match';
        $noe=$noe+1;
      }
  }


  if($noe===0)
  {
    $sql="INSERT INTO users(name,email,phno,password) VALUES('$fname','$email','$name','$password');";
    if(mysqli_query($conn,$sql))
    {

    }
    else
    {
      die("failed");
    }
  }
}
  ?>


<div class="container-fluid text-center" style="background-image: url(imag/login.png);background-repeat: no-repeat;background-size: cover;background-attachment: fixed;padding-top: 100px;padding-bottom: 100px;">
	<div class="container" style="background-color: white;box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);border-radius: 15px;padding: 20px;padding-right: 30px;padding-top: 50px;padding-bottom: 50px;width: 90%;max-width: 500px;">
		<div class="heading" style="margin-bottom: 30px;"><span class="bg-grey" style="background-color: white; color: #ff4c4c;padding-left: 10px">SIGN </span><span class="bg-grey" style="background-color: white; color: #0099e5;padding-right: 10px">UP</span></div>
        <br>          
        <br>
        <?php if ($noe===0&&$sub===1) { ?>
        <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
        <div class="alert alert-success " role="alert" style="width: 90%;max-width: 450px; align-self: center;border-radius: 10px;padding: 5px;">
          You have been successfully registered. Now you can login.  
        </div>
      </div><?php } ?>
		<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <input type="text" class="slidel log" name="fname" placeholder="Name" value="<?php echo htmlspecialchars($fname);?>">
          <br>
          <br>
          <?php if ($error["fname"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 90%;max-width: 450px; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["fname"]);?>  
          </div>
          </div><?php } ?>
          <input type="text" class="slider log" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email);?>">
          <br>
          <br>
          <?php if ($error["email"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 90%;max-width: 450px; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["email"]);?>  
          </div>
          </div><?php } ?>
          <input type="text" class="slidel log" name="name" placeholder="Phone Number" value="<?php echo htmlspecialchars($name);?>">
          <br>
          <br>
          <?php if ($error["name"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 90%;max-width: 450px; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["name"]);?>  
          </div>
          </div><?php } ?>
          <input type="Password" class="slider log" name="password" placeholder="Password" value="<?php echo htmlspecialchars($password);?>">
          <br>
          <br>
          <?php if ($error["password"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 90%;max-width: 450px; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["password"]);?>  
          </div>
          </div><?php } ?>
          <input type="Password" class="slidel log" name="lname" placeholder="Retype Password" value="<?php echo htmlspecialchars($lname);?>">
          <br>
          <br>
          <?php if ($error["lname"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 90%;max-width: 450px; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["lname"]);?>  
          </div>
          </div><?php } ?>
          <br>
          <div class="text-center fadein">
          <input type="submit" name="submit" value="Sign Up" class="sear3" style="width: 60%">
          </div>
        </form>
	</div>	
</div>

<?php
include('footer.php');
?>