<div class="container-fluid text-center" style="padding: 10px;background-color: white;box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);position: sticky;top:67px;z-index: 500;">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <input  name="searchby" class="headf" type="text" placeholder="Type Something.."  />
                        <select id="agileinfo_search" class="headf" name="searchcat" required="">
                            <option value="7">All Categories</option>
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
                        <button type="submit" class="sear" name="mainse" aria-label="Left Align">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </form>
                </div>