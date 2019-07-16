<?php
include('header.php');
if(!isset($_GET['x']))
{
	header('Location: home.php');
}
$id=$_GET['x'];
$sql="SELECT * FROM ads WHERE id='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$sql="SELECT * FROM users WHERE id='".$row['sellerid']."'";
$res=mysqli_query($conn,$sql);
$row1=mysqli_fetch_assoc($res);
?>

<div class="container-fluid text-center" style="margin-top: 50px;margin-bottom: 50px;background-color: white;">
	<div class="heading" style="margin-bottom: 30px;"><span class="bg-grey" style="background-color: white; color: #ff4c4c;padding-left: 10px">PRODUCT </span><span class="bg-grey" style="background-color: white; color: #0099e5;padding-right: 10px">DETAILS</span></div>
    <br>          
    <br>
    <div class="row" style="margin-bottom: 20px;">
    	<div class="col-sm-7" style="margin-bottom: 20px;">
    		<div style="border: 2px solid #d6d6d6;padding-top: 30px;padding-bottom: 30px;">
    		<div id="myCarousel" class="carousel slide container" data-ride="carousel" style="width: 90%;max-width: 400px;height: 250px;overflow: hidden;">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>

  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <img src='<?php echo $row['im1'];  ?>' alt="Los Angeles" class="prodim">
    </div>

    <div class="item">
      <img src='<?php echo $row['im2'];  ?>' alt="Chicago" class="prodim">
    </div>


  </div>


  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
</div>
</div>
<div class="col-sm-5" >
	<div class="detb" style="border: 2px solid #d6d6d6;padding:8px;font-size: 20px; ">
		<div style="color: #ff4c4c;text-align: center;font-size: 40px;border-bottom: 2px solid #d6d6d6;padding-bottom: 15px; ">Price: <span style="color: #0099e5;">&#8377; <?php echo $row['price'];  ?></span></div>
		<div style="text-align: center;color: #ff4c4c;font-size: 35px;padding-top: 10px;">
			SELLER <span style="color: #0099e5;">Details</span>
		</div>
		<table class="table prodt">
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
	</div>
</div>
</div>
<div class="row" style="padding-left: 15px;padding-right: 15px;">
	<div style="border: 2px solid #d6d6d6; margin-top: 20px;margin-bottom: 20px;padding-top: 20px;padding-bottom: 20px;">
		<br>
		<br>
		<div class="heading" style="margin-bottom: 30px;padding-right: 40px;"><span class="bg-grey" style="background-color: white; color: #ff4c4c;padding-left: 10px">PRODUCT </span><span class="bg-grey" style="background-color: white; color: #0099e5;padding-right: 10px">DESCRIPTION</span></div>
		<br>

		<div style="text-align: center;padding: 15px;font-size: 20px;">
			<?php echo $row['description'];  ?>
		</div>
    <br>          	
	</div>
</div>
</div>
<?php
include('footer.php');
?>