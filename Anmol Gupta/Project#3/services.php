<?php
include('header.php');
include('header2.php');

		if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;



        $total_pages_sql = "SELECT COUNT(*) FROM ads WHERE category='Services'";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM ads WHERE category='Services' LIMIT $offset, $no_of_records_per_page";
        $res = mysqli_query($conn,$sql);



?>


				<div class="container-fluid text-center" style="padding-top: 70px;padding-bottom: 30px;position: relative;">
                    <div style="background-color: white;position: absolute;height: 100%;width: 100%;z-index: -7; ">
                        
                    </div>
                   
                    <div class="heading" style="margin-bottom: 50px;"><span class="bg-grey" style="background-color: white; color: #ff4c4c;padding-left: 10px">SELECTED </span><span class="bg-grey" style="background-color: white; color: #0099e5;padding-right: 10px">CATEGORY</span></div>
                    <br>
                    <br>
                    <div class="row text-center slide">
                    	<?php while($row=mysqli_fetch_assoc($res))
                    	{ 
                    	?>
                        <div class="col-md-3 col-sm-4  text-center" style="padding: 10px;text-align: center;">
                            <div class="container" style="width: 80%">
                            <a href='product.php?x=<?php echo($row['id']); ?>'><div class="container pane gri" style="" >
                                <div class="paneb">
                                    <img src='<?php echo($row['im1']); ?>' class="panelimg">
                                </div>

                                <hr>
                                <div class="panelf text-center" style="padding-bottom: 20px;height: 60px;">
                                    <?php echo($row['title']); ?>
                                </div> 
                                <span class="price">&#8377; <?php echo($row['price']); ?></span>
                                <div class="triangle-right"></div>  
                            </div></a> 
                            </div>  
                        </div>
                    	<?php } ?>
                    </div>
                </div>
                <div class="container text-center" style="width: 100%;padding: 0px;margin: 0px;margin-top: 5px;margin-bottom: 25px;">
                <ul class="pagination">
        		<li><a href="?pageno=1">First</a></li>
        		<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            		<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        		</li>
        		<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            		<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        		</li>
       			<li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    			</ul>
    			</div>
<?php
include('footer.php');
?>