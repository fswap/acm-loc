<?php
include('header.php');
if(!isset($_SESSION['user']))
{
  header('Location: login.php');
}
$count=0;
$sql="SELECT * FROM users WHERE email='".$_SESSION['em']."'";
$res=mysqli_query($conn,$sql);
$row1=mysqli_fetch_assoc($res);
$sql = "SELECT * FROM ads WHERE sellerid='".$row1['id']."'";
$res = mysqli_query($conn,$sql);
?>
<div class="container-fluid text-center" style="margin-top: 50px;margin-bottom: 50px;background-color: white;">
	<div class="heading" style="margin-bottom: 30px;"><span class="bg-grey" style="background-color: white; color: #ff4c4c;padding-left: 10px">USER </span><span class="bg-grey" style="background-color: white; color: #0099e5;padding-right: 10px">DETAILS</span></div>
    <br>          
    <br>
    <table class="table slide">
          <tr>
          <td><b>User Name</b></td><td><?php echo $row1['name'];  ?></td>
          </tr>
          <tr>
          <td><b>User Email</b></td><td><?php echo $row1['email'];  ?></td>
          </tr>
          <tr>
          <td><b>User Mobile Number</b></td><td><?php echo $row1['phno'];  ?></td>
          </tr>
    </table>
</div>
<div class="container-fluid text-center" style="margin-top: 50px;margin-bottom: 50px;">
	<div class="heading" style="margin-bottom: 30px;"><span class="bg-grey" style="background-color: white; color: #ff4c4c;padding-left: 10px">USER </span><span class="bg-grey" style="background-color: white; color: #0099e5;padding-right: 10px">ADS</span></div>
    <br>          
    <br>
    <div class="row text-center slide">
                    	<?php while($row=mysqli_fetch_assoc($res))
                    	{ 
                    		$count++;
                    	?>
                        <div class="col-md-3 col-sm-4  text-center" style="padding: 10px;text-align: center;">
                            <div class="container" style="width: 80%">
                            <div class="container pane gri" style="cursor: default;" >
                                <div class="paneb">
                                    <img src='<?php echo($row['im1']); ?>' class="panelimg">
                                </div>

                                <hr>
                                <div class="panelf text-center" style="padding-bottom: 4px;height: 60px;">
                                    <?php echo($row['title']); ?>
                                </div> 
                                <span class="price">&#8377; <?php echo($row['price']); ?></span>
                                <div class="triangle-right"></div>
                                <div style="padding-bottom: 10px;">
                                	<a href='product.php?x=<?php echo($row['id']); ?>'>
                                	<button class="sear3" style="font-size: 20px;">
                                    View Ad
                                	</button>
                                	</a>
                                	<a href='deleter.php?x=<?php echo($row['id']); ?>'>
                                	<button class="sear4" style="font-size: 20px;">
                                    Delete Ad
                                	</button>
                                	</a>
                                </div>  
                            </div>
                            </div>  
                        </div>
                    	<?php } ?>
                    </div>
                    <?php if($count==0)
                    		{
                    			?>
                    			<div style="font-size: 35px;margin-bottom: 30px;margin-top: -45px; color: #ff4c4c; ">Sorry , You have not posted any Ad.</div>
                    			<img src="imag/fail.jpg" style="width: 80%; max-width: 400px;">                  			
                    			<?php  
                    		}
                     ?>
</div>
<?php
include('footer.php');
?>