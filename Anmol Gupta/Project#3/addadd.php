<?php
include('header.php');
if(!isset($_SESSION['user']))
{
  header('Location: login.php');
}
$sql="SELECT * FROM users WHERE email='".$_SESSION['em']."'";
$res=mysqli_query($conn,$sql);
$row1=mysqli_fetch_assoc($res);
$sellid=$row1['id'];
$error=["cat"=>"","price"=>"","title"=>"","des"=>"","im1"=>"","im2"=>""];
$cat='';
$price='';
$title='';
$des='';
$im1='';
$im2='';
$noe=0;
$sub=0;
$allowed=['jpg','jpeg','png','gif','jfif'];
if(isset($_POST['submit']))
{
  $sub=1;
  if(empty($_POST['cat']))
  {
      $error['cat']="Please Select Category";
      $noe=$noe+1;
  }
  else
  {
    $cat=$_POST['cat'];
  } 


  if(empty($_POST['title']))
  {
      $error['title']="Please enter Title";
      $noe=$noe+1;
  } 
  else
  {
    $title=$_POST['title'];
    if(!preg_match("/^.{3,40}$/",$title))
    {
      $error['title']='Title must be atleast 3 characters long and at most 40 characters long.';
      $noe=$noe+1;
    }
  }

  if(empty($_POST['price']))
  {
      $error['price']="Please enter Price";
      $noe=$noe+1;
  } 
  else
  {
    $price=$_POST['price'];
    if(!preg_match("/^[1-9][0-9]*$/",$price))
    {
      $error['price']='Price must be a Number.';
      $noe=$noe+1;
    }
  }

  if(empty($_POST['des']))
  {
      $error['des']="Product Description is required";
      $noe=$noe+1;
  } 
  else
  {
    $des=$_POST['des'];
    if(!preg_match("/^.{3,}$/",$des))
    {
      $error['des']='Description must be atleast 3 characters long';
      $noe=$noe+1;
    }
  }

  if(empty($_FILES['im1']['name']))
  {
      $error['im1']="Image 1 is required";
  } 
  else
  {
    $im1name=$_FILES['im1']['name'];
    $tmp=explode('.', $im1name);
    $im1ext=strtolower(end($tmp));
    if(in_array($im1ext, $allowed))
    {
      if($_FILES['im1']['error']===0)
      {
        $im1=uniqid('',true).".".$im1ext;
        $dest1='images/'.$im1;
      }
      else
      {
        $error['im1']="There is an error uploading your file";
        $noe=$noe+1;
      }
    }
    else
    {
      $error['im1']="Please select a valid image(jpg,png,jgep,jfif,gif)";
      $noe=$noe+1;
    }
  }

  if(empty($_FILES['im2']['name']))
  {
      $error['im2']="Image 2 is required";
  } 
  else
  {
    $im2name=$_FILES['im2']['name'];
    $tmp=explode('.', $im2name);
    $im2ext=strtolower(end($tmp));
    if(in_array($im2ext, $allowed))
    {
      if($_FILES['im2']['error']===0)
      {
        $im2=uniqid('',true).".".$im2ext;
        $dest2='images/'.$im2;
      }
      else
      {
        $error['im2']="There is an error uploading your file";
        $noe=$noe+1;
      }
    }
    else
    {
      $error['im2']="Please select a valid image(jpg,png,jgep,jfif,gif)";
      $noe=$noe+1;
    }
  }

  if($noe==0)
  {
    move_uploaded_file($_FILES['im1']['tmp_name'], $dest1);
    move_uploaded_file($_FILES['im2']['tmp_name'], $dest2);
    $sql="INSERT INTO ads(title,description,im1,im2,sellerid,category,price) VALUES('$title','$des','$dest1','$dest2','$sellid','$cat','$price');";
    mysqli_query($conn,$sql);
  }
}
?>
<div class="container-fluid text-center" style="padding: 10px;padding-top: 50px;padding-bottom: 50px;background-color: white">
  <div class="heading" style="margin-bottom: 30px;"><span class="bg-grey" style="background-color: white; color: #ff4c4c;padding-left: 10px">POST </span><span class="bg-grey" style="background-color: white; color: #0099e5;padding-right: 10px">ADD</span></div>
  <div class="container text-center">
    <br>
    <br>
    <?php if ($noe===0&&$sub===1) { ?>
        <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
        <div class="alert alert-success " role="alert" style="width: 100%; align-self: center;border-radius: 10px;padding: 5px;">
          Your Ad is Successfully Posted.  
        </div>
      </div><?php } ?>
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                        <select name="cat" class="addf">
                            <option value="">Select Category</option>
                            <option value="Mobiles">Mobiles</option>
                            <option value="Electronics & Appliances">Electronics & Appliances</option>
                            <option value="Cars">Cars</option>
                            <option value="Bikes">Bikes</option>
                            <option value="Furnitures">Furnitures</option>
                            <option value="Pets">Pets</option>
                            <option value="Books, Sports & Hobbies">Books, Sports & Hobbies</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Kids">Kids</option>
                            <option value="Services">Services</option>
                            <option value="Jobs">Jobs</option>
                            <option value="Real Estates">Real Estates</option>
                        </select>
          <br>
          <br>
          <?php if ($error["cat"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 100%; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["cat"]);?>  
          </div>
          </div><?php } ?>
          <input class="addf" type="text" name="title" style="text-align: center;" placeholder="Ad Title" value="<?php echo htmlspecialchars($title);?>">
          <br>
          <br>
          <?php if ($error["title"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 100%; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["title"]);?>  
          </div>
          </div><?php } ?>
          <input class="addf" type="text" name="price" style="text-align: center;" placeholder="Price in Rs." value="<?php echo htmlspecialchars($price);?>">
          <br>
          <br>
          <?php if ($error["price"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 100%; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["price"]);?>  
          </div>
          </div><?php } ?>
          <span style="font-size: 18px;color: black;">Enter Ad Description</span>
          <br>
          <br>
          <textarea class="addf" name="des" style=" height:150px;" placeholder="Write few lines about your product" value="<?php echo htmlspecialchars($des);?>"></textarea>
          <br>
          <br>
          <?php if ($error["des"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 100%; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["des"]);?>  
          </div>
          </div><?php } ?>
          <span><b>Upload Image 1</b></span><input  type="file" name="im1" style="display: inline-block; margin-left: 40px;">
          <br>
          <br>
          <?php if ($error["im1"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 100%; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["im1"]);?>  
          </div>
          </div><?php } ?>
          <span><b>Upload Image 2</b></span><input type="file"  name="im2" style="display: inline-block; margin-left: 40px;">
          <br>
          <br>
          <?php if ($error["im2"]!='') { ?>
          <div class="container text-center dibba fadein" style="text-align: center;align-self: center;">
          <div class="alert alert-danger " role="alert" style="width: 100%; align-self: center;border: 1px solid maroon;padding: 5px;border-radius: 10px;">
            <?php echo htmlspecialchars($error["im2"]);?>  
          </div>
          </div><?php } ?>
          <table class="table">
          <tr>
          <td><b>Seller Name</b></td><td><?php echo $row1['name'];  ?></td>
          </tr>
          <tr>
          <td><b>Seller Email</b></td><td><?php echo $row1['email'];  ?></td>
          </tr>
          <tr>
          <td><b>Seller Mobile Number</b></td><td><?php echo $row1['phno'];  ?></td>
          </tr>
          </table>
          <div class="text-center fadein">
          <input type="submit" name="submit" value="Post Ad" class="sear3" style="width: 60%">
          <br>
          <br>
          <div>
            <b>Note: </b>Image 1 will be used as Ad Profile.
          </div>
          </div>
    </form>
  </div>
</div>
<?php
include('footer.php');
?>