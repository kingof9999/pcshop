<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
        <?php
            $result		= Setting::headerHome();
        ?>
<!-- ============================================== TOP MENU : END ============================================== -->
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
	<a href="index.php">
		
		<img src="assets/images/logo.png" alt="">

	</a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

				<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
					<div class="contact-row">
    <div class="phone inline">
        <i class="icon fa fa-phone"></i> (+84) 126 304 9925
    </div>
    <div class="contact inline">
        <i class="icon fa fa-envelope"></i> lequangtin95@gmail.com
    </div>
</div><!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form action="index.php?url=search" method="post" autocomplete="off">
        <div class="control-group">

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">
                    <!--<ul class="dropdown-menu" role="menu" >
                        <li class="menu-header">Search By</li>
                        <li role="presentation"><input type="radio" id="radio_ck1" name ="radio_ck" value="1" checked="checked"/>Laptop</li>
                        <li role="presentation"><input type="radio" id="radio_ck2" name ="radio_ck" value="2"/>Accosiess</li>
                    </ul>-->
                    <select name="check" class=" unicase-form-control text-input" id="check">
                            <option value="1"> Laptop</option>
                            <option value="2"> Associese</option>
                    </select>
                </li>
            </ul>
                <input type="text" class="search-field" placeholder="Search here..." id="txtsearch" name="keyword"/>
                <input type="submit" id="searchSubmit" name="searchSubmit" value="Search" />
        </div>
        <ul class="quick-results col-sm-offset-2" style="z-index: 1000; width: 60%;" id="quick-results">
            
        </ul>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

				<div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
					<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
	<?php 
        $flag=NULL;
        if(!isset($_SESSION['cart'])){
            $flag=false;
        }else{
           foreach($_SESSION['cart'] as $masp=>$soluong){
               if(isset($masp)){
                    $flag=true;
                }else{
                     $flag=false;
                }
            } 
        }
        if($flag==false){
            echo '
                <div class="dropdown dropdown-cart">
                    <a href="index.php?url=shopping-cart" class="dropdown-toggle lnk-cart">
            			<div class="items-cart-inner">
            				<div class="total-price-basket">
            					<span class="lbl">cart -</span>
            					<span class="total-price">
            						<span class="sign">There are no item in cart</span>
            					</span>
            				</div>
            				<div class="basket">
            					<i class="glyphicon glyphicon-shopping-cart"></i>
            				</div>
            				<div class="basket-item-count"><span class="count">0</span></div>
            			
            		    </div>
            		</a>
                </div>
            ';
        }else{
            $cart=$_SESSION['cart'];
            echo'
                <div class="dropdown dropdown-cart">
                    <a href="index.php?url=shopping-cart" class="dropdown-toggle lnk-cart">
            			<div class="items-cart-inner">
            				<div class="total-price-basket">
            					<span class="lbl">cart -</span>
            					<span class="total-price">
            						<span class="sign">There are '.count($cart).' item in cart</span>
            					</span>
            				</div>
            				<div class="basket">
            					<i class="glyphicon glyphicon-shopping-cart"></i>
            				</div>
            				<div class="basket-item-count"><span class="count">'.count($cart).'</span></div>
            			
            		    </div>
            		</a>
                </div>
            ';
        }
    ?>
    <!--<div class="dropdown dropdown-cart">
        <a href="index.php?url=shopping-cart" class="dropdown-toggle lnk-cart">
			<div class="items-cart-inner">
				<div class="total-price-basket">
					<span class="lbl">cart -</span>
					<span class="total-price">
						<span class="sign">There are no item in cart</span>
					</span>
				</div>
				<div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count">2</span></div>
			
		    </div>
		</a>
    </div>-->
    <!--<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
				<div class="total-price-basket">
					<span class="lbl">cart -</span>
					<span class="total-price">
						<span class="sign">$</span>
						<span class="value">600.00</span>
					</span>
				</div>
				<div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count">2</span></div>
			
		    </div>
		</a>
		<ul class="dropdown-menu">
			<li>
				<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-4">
							<div class="image">
								<a href="detail.php"><img src="assets/images/cart.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-xs-7">
							
							<h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
							<div class="price">$600.00</div>
						</div>
						<div class="col-xs-1 action">
							<a href="#"><i class="fa fa-trash"></i></a>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			<hr>
		
			<div class="clearfix cart-total">
				<div class="pull-right">
					
						<span class="text">Sub Total :</span><span class='price'>$600.00</span>
						
				</div>
				<div class="clearfix"></div>
					
				<a href="checkout.php" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>	
			</div>
					
				
		</li>
		</ul>
	</div>-->

<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
			</div><!-- /.row -->

		</div><!-- /.container -->

	</div><!-- /.main-header -->

	<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="active dropdown yamm-fw">
				<a href="index.php?url=home" class="dropdown-toggle">Home</a>
			</li>
			<li class="dropdown yamm">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Laptop</a>
				<ul class="dropdown-menu">
					<li>
						<div class="yamm-content">
    <div class="row">
        <div class='col-sm-12'>
            <?php 
               include "overfile/connect.php";
            ?>
           <div class="col-xs-12 col-sm-12 col-md-4">
                <h2 class="title">Computer Laptops</h2>
                <ul class="links">
                    <?php 
                        $query	= "SELECT * FROM manufacturer LIMIT 6";
    					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
    					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    						echo '<li><a href="index.php?url=search&hid='.$row["id_mf"].'&checkpr=1">'.$row["name_mf"].'</a></li>';
    					}
                    ?>
                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-4">
                <h2 class="title">Computer Laptops</h2>
                <ul class="links">
                    <?php
                        $query	= "SELECT * FROM manufacturer LIMIT 6,11";
    					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
    					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    						echo '<li><a href="index.php?url=search&hid='.$row["id_mf"].'&checkpr=1">'.$row["name_mf"].'</a></li>';
    					}
                    ?>
                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-4">
                <h2 class="title">Laptop <br /> Type</h2>
                <ul class="links">
                    <?php 
                        $query	= "SELECT * FROM catalog";
    					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
    					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    						echo '<li><a href="index.php?url=search&hid='.$row["id_catalog"].'&checkpr=2">'.$row["name_catalog"].'</a></li>';
    					}
                    ?>
                </ul>
            </div><!-- /.col -->
        </div>
    </div><!-- /.row -->
</div><!-- /.yamm-content -->					</li>
				</ul>
			</li>
            <li class="dropdown yamm">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Accessories</a>
				<ul class="dropdown-menu">
					<li>
						<div class="yamm-content">
                        <div class="row">
                            <div class="col-sm-12" style="white-space: nowrap;">
                                <?php 
                                   include "overfile/connect.php";
                                ?>
                                <div class="col-sm-12 col-xs-12 col-md-12">
                                   <div class="col-xs-10 col-sm-10 col-md-4"  style="margin-right:80px">
                                        <h2 class="title">Computer Laptops</h2>
                                        <ul class="links">
                                            <?php 
                                                $query	= "SELECT * FROM accessories LIMIT 7";
                            					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
                            					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            						echo '<li><a href="index.php?url=search&hid='.$row["id_as"].'&checkpr=3">'.$row["name_as"].'</a></li>';
                            					}
                                            ?>
                                        </ul>
                                    </div><!-- /.col -->
                                    
                                    <div class="col-xs-10 col-sm-10 col-md-4">
                                        <h2 class="title">Computer Laptops</h2>
                                        <ul class="links">
                                            <?php 
                                                $query	= "SELECT * FROM accessories LIMIT 7,12";
                            					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
                            					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            						echo '<li><a href="index.php?url=search&hid='.$row["id_as"].'&checkpr=3">'.$row["name_as"].'</a></li>';
                            					}
                                            ?>
                                        </ul>
                                    </div><!-- /.col -->
                                </div>
                            </div>
                        </div><!-- /.row -->
</div><!-- /.yamm-content -->					</li>
				</ul>
			</li>
            <li class="dropdown">
                <a href="index.php?url=contact">Contact</a>
            </li>

            <li class="dropdown">
                <a href="index.php?url=faq">FAQ</a>
            </li>
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div><!-- /.nav-outer -->
</div><!-- /.navbar-collapse -->


            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->

</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>