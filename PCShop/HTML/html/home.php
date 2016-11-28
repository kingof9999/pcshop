<?php 
   include "overfile/connect.php";
?>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
	<div class="row">
	<!-- ============================================== SIDEBAR ============================================== -->	
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			
			<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <!-- /.menu-item -->
            <li class="dropdown menu-item">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop fa-fw"></i>Laptop</a>
                 <!-- ================================== MEGAMENU VERTICAL ================================== -->
<ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <?php
                        $query	= "SELECT * FROM manufacturer LIMIT 11";
    					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
    					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    						echo '<li><a href="index.php?url=search&hid='.$row["id_mf"].'">'.$row["name_mf"].'</a></li>';
    					}
                    ?>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <?php
                        $query	= "SELECT * FROM manufacturer LIMIT 11,11";
    					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
    					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    						echo '<li><a href="index.php?url=search&hid='.$row["id_mf"].'">'.$row["name_mf"].'</a></li>';
    					}
                    ?>
                </ul>
            </div>
            <div class="dropdown-banner-holder">
                <a href="#"><img alt="" src="assets/images/banners/banner-side.png" /></a>
            </div>
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->
<!-- ================================== MEGAMENU VERTICAL ================================== -->            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-history fa-fw"></i>Apple</a>
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
<ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                    <li><a href="#">CPUs, Processors</a></li>
                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                    <li><a href="#">Graphics, Video Cards</a></li>
                    <li><a href="#">Interface, Add-On Cards</a></li>
                    <li><a href="#">Laptop Replacement Parts</a></li>
                    <li><a href="#">Memory (RAM)</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Power Supplies Power</a></li>
                    <li><a href="#">Power Supply Testers Sound</a></li>
                    <li><a href="#">Sound Cards (Internal)</a></li>
                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </div>

            <div class="dropdown-banner-holder">
                <a href="#"><img alt="" src="assets/images/banners/banner-side.png" /></a>
            </div>
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->
<!-- ================================== MEGAMENU VERTICAL ================================== -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-microphone fa-fw"></i>Accessories</a>
               <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                    <?php
                        $query	= "SELECT * FROM accessories LIMIT 5";
    					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
    					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo '<li><a href="#">'.$row["name_as"].'</a></li>';
				   	    }
                        //do{
                        //   echo '<li><a href="#">'.$row["name_as"].'</a></li>'; 
                        //}while($row=mysqli_fetch_array($result,MYSQLI_ASSOC) && $row["id_as"] <=5);
                        //$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                        //for($i = $row["id_as"]; $i <= 5; $i++){
                            //echo '<li><a href="#">'.$row["name_as"].'</a></li>';
                        //    echo '<li>'.$i.' '.$row["name_as"].'</li>';
                        //}
                        
                    ?>   
                </ul>
        </div><!-- /.row -->
        <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                    <?php
                        $query	= "SELECT * FROM accessories LIMIT 5,5";
    					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
    					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo '<li><a href="#">'.$row["name_as"].'</a></li>';
				   	    }
                        
                    ?>   
                </ul>
        </div><!-- /.row -->
        <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                    <?php
                        $query	= "SELECT * FROM accessories LIMIT 10,5";
    					$result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
    					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo '<li><a href="#">'.$row["name_as"].'</a></li>';
				   	    }
                        
                    ?>   
                </ul>
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->
          
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->
			<!-- ============================================== SPECIAL OFFER ============================================== -->

<div class="sidebar-widget outer-bottom-small wow fadeInUp">
	<h3 class="section-title">Accessories</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
        <!-- day -->
	    	<div class="item">
	        	<div class="products special-product">
		        	<?php 
                        $query = "SELECT * FROM product_assosi ORDER BY day DESC LIMIT 3";
            		    $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo '
                                <div class="product">
    							<div class="product-micro">
                                	<div class="row product-micro-row">
                                		<div class="col col-xs-5">
                                			<div class="product-image">
                                				<div class="image">
                                					<a href="index.php?url=detailas&asid='.$row["id_product_as"].'" data-lightbox="image-1" data-title="Nunc ullamcors">
                                						<img data-echo="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" src="assets/images/blank.gif" alt="" height="100" width="100">
                                						<div class="zoom-overlay"></div>
                                					</a>					
                                				</div><!-- /.image -->
                                					
                                					
                                								</div><!-- /.product-image -->
                                		</div><!-- /.col -->
                                		<div class="col col-xs-7">
                                			<div class="product-info">
                                				<h3 class="name"><a href="index.php?url=detailas&asid='.$row["id_product_as"].'">'.$row["name_product_as"].'</a></h3>
                                				<div class="rating rateit-small"></div>
                                				<div class="product-price">	
                                				<span class="price">
                                					'.$row["price"].' VND</span>
                                				
                                			</div><!-- /.product-price -->
                                				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                			</div>
                                		</div><!-- /.col -->
                                	</div><!-- /.product-micro-row -->
                                </div><!-- /.product-micro -->
                                      
                                						</div>
                            ';
                        }
                    ?>						
		        </div>
	        </div>
            
            <div class="item">
	        	<div class="products special-product">
		        	<?php 
                        $query = "SELECT * FROM product_assosi ORDER BY day DESC LIMIT 3,3";
            		    $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo '
                                <div class="product">
    							<div class="product-micro">
                                	<div class="row product-micro-row">
                                		<div class="col col-xs-5">
                                			<div class="product-image">
                                				<div class="image">
                                					<a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                						<img data-echo="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" src="assets/images/blank.gif" alt="" height="100" width="100">
                                						<div class="zoom-overlay"></div>
                                					</a>					
                                				</div><!-- /.image -->
                                					
                                					
                                								</div><!-- /.product-image -->
                                		</div><!-- /.col -->
                                		<div class="col col-xs-7">
                                			<div class="product-info">
                                				<h3 class="name"><a href="#">'.$row["name_product_as"].'</a></h3>
                                				<div class="rating rateit-small"></div>
                                				<div class="product-price">	
                                				<span class="price">
                                					'.$row["price"].'				</span>
                                				
                                			</div><!-- /.product-price -->
                                				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                			</div>
                                		</div><!-- /.col -->
                                	</div><!-- /.product-micro-row -->
                                </div><!-- /.product-micro -->
                                      
                                						</div>
                            ';
                        }
                    ?>						
		        </div>
	        </div>
            <!-- day -->
	    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL OFFER : END ============================================== -->
			<!-- ============================================== PRODUCT TAGS ============================================== -->
<div class="sidebar-widget product-tag wow fadeInUp">
	<h3 class="section-title">Filter</h3>
	<div class="sidebar-widget-body outer-top-xs">
        <form class="outer-top-xs" action="" id="form-price">
            <h4>Filter by price: </h4>
            <select name="price" class="form-control unicase-form-control text-input">>
                <optgroup label="Price">
                        <option value="100"> Below 100$</option>
                        <option value="500"> Between 100$ - 500$</option>
                        <option value="1000"> Between 500$ - 1000$</option>
                        <option value="1500"> Between 1000$ - 1500$</option>
                        <option value="15001"> Over 1500$</option>
                    </optgroup>
            </select>

            <h4 class="outer-top-xs">Filter by purpose: </h4>
            <select name="purpose" class="form-control unicase-form-control text-input">
                <optgroup label="For">
                        <option value="work"> Work</option>
                        <option value="study"> Study</option>
                        <option value="game"> Game</option>
                        <option value="graphic"> Graphics</option>
                    </optgroup>
            </select>
            <input type="submit" value="Filter" class="btn btn-info outer-top-xs"/>
        </form>

	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== -->
<!-- ============================================== SPECIAL DEALS ============================================== -->
<!-- ============================================== SPECIAL DEALS : END ============================================== -->
<!-- ============================================== NEWSLETTER ============================================== -->
<!-- ============================================== NEWSLETTER: END ============================================== -->
<!-- ============================================== HOT DEALS ============================================== -->
<!-- ============================================== HOT DEALS: END ============================================== -->
			<!-- ============================================== COLOR============================================== -->
<div class="sidebar-widget  wow fadeInUp outer-top-vs ">
	<div id="advertisement" class="advertisement">
        <div class="item bg-color">
            <div class="container-fluid">
                <div class="caption vertical-top text-left">
                    <div class="big-text">
                        Save<span class="big">50%</span>
                    </div>
                        

                    <div class="excerpt">
                        on selected items
                    </div>
                </div><!-- /.caption -->
            </div><!-- /.container-fluid -->
        </div><!-- /.item -->

        <div class="item" style="background-image: url('assets/images/advertisement/1.jpg');">
            
        </div><!-- /.item -->

        <div class="item bg-color">
            <div class="container-fluid">
                <div class="caption vertical-top text-left">
                    <div class="big-text">
                        Save<span class="big">50%</span>
                    </div>
                        

                    <div class="excerpt fadeInDown-2">
                        on selected items
                    </div>
                </div><!-- /.caption -->
            </div><!-- /.container-fluid -->
        </div><!-- /.item -->

    </div><!-- /.owl-carousel -->
</div>
    
<!-- ============================================== COLOR: END ============================================== -->


		</div><!-- /.sidemenu-holder -->
		<!-- ============================================== SIDEBAR : END ============================================== -->

		<!-- ============================================== CONTENT ============================================== -->
		<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
			<!-- ========================================== SECTION – HERO ========================================= -->
			
<div id="hero">
	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
		<?php 
            $query = "SELECT * FROM product ORDER BY day DESC LIMIT 4";
		    $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo '
                    <div class="item" style="background-image: url(../../PCShop-Admin/PCShop-Admin/images/'.$row["imageqc"].');">
            			<div class="container-fluid">
            				<div class="caption bg-color vertical-center text-left">
            					<div class="big-text fadeInDown-1">
            						<span class="highlight">'.$row["name_product"].'</span>
            					</div>
            
            					<div class="excerpt fadeInDown-2 hidden-xs">
            					
            					<span>'.$row["screen"].' Now Starting At '.$row["price"].' VND</span>
            					</div>
            					<div class="button-holder fadeInDown-3">
            						<a href="index.php?url=detail&spid='.$row["id_product"].'" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
            					</div>
            				</div><!-- /.caption -->
            			</div><!-- /.container-fluid -->
            		</div><!-- /.item -->
                ';
            }
        ?>

	</div><!-- /.owl-carousel -->
</div>
			
<!-- ========================================= SECTION – HERO : END ========================================= -->	

			<!-- ============================================== INFO BOXES ============================================== -->
<div class="info-boxes wow fadeInUp">
	<div class="info-boxes-inner">
		<div class="row">
			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
						     <i class="icon fa fa-dollar"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading green">money back</h4>
						</div>
					</div>	
					<h6 class="text">30 Day Money Back Guarantee.</h6>
				</div>
			</div><!-- .col -->

			<div class="hidden-md col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-truck"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading orange">free shipping</h4>
						</div>
					</div>
					<h6 class="text">free ship-on oder over $600.00</h6>	
				</div>
			</div><!-- .col -->

			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-gift"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading red">Special Sale</h4>
						</div>
					</div>
					<h6 class="text">All items-sale up to 20% off </h6>	
				</div>
			</div><!-- .col -->
		</div><!-- /.row -->
	</div><!-- /.info-boxes-inner -->
	
</div><!-- /.info-boxes -->
<!-- ============================================== INFO BOXES : END ============================================== -->
			<!-- ============================================== SCROLL TABS ============================================== -->
<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
	<div class="more-info-tab clearfix ">
	   <h3 class="new-product-title pull-left">New Products</h3>
		<!--<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
			<li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
			<li><a data-transition-type="backSlide" href="#desktop" data-toggle="tab">Desktop</a></li>
			<li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">laptop</a></li>
			<li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">apple</a></li>
		</ul>--><!-- /.nav-tabs -->
	</div>

	<div class="tab-content outer-top-xs">
		<div class="tab-pane in active" id="all">			
			<div class="product-slider">
				<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
        <?php 
            $query = "SELECT * FROM product ORDER BY day DESC LIMIT 5";
		    $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
            date_default_timezone_set('UTC');
            $date = date('Y-m-d');
            //$date_cmp = date('2016-12-27');
            //if(strtotime($date)> strtotime($date_cmp)){
            //    $new = "Past";
            //}else{
            //    $new = "Future";
            //}
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $date_cmp = $row["day"];
                $newdate = date('Y-m-d', strtotime($date_cmp));
                if(strtotime($date)> strtotime($newdate)){
                    $new = "Old";
                }else if(strtotime($date)== strtotime($newdate)){
                    $new = "New";
                }
                echo '
                    <div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="index.php?url=detail&spid='.$row["id_product"].'"><img  src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" alt="" height="243" width="195"></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>'.$new.'</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="index.php?url=detail&spid='.$row["id_product"].'">'.$row["name_product"].'</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					'.$row["price"].' VND
                </span>		
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<a href="index.php?url=add_cart&masp='.$row["id_product"].'" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
                ';
            }
        ?>
		
						</div><!-- /.home-owl-carousel -->
			</div><!-- /.product-slider -->
		</div><!-- /.tab-pane -->

		<div class="tab-pane" id="desktop">
			<div class="product-slider">
				<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
				    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/3.jpg" alt=""></a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>sale</span></div>            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Apple Iphone 5s 32GB</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt=""></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>new</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Samsung Galaxy S4</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/4.jpg" alt=""></a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>sale</span></div>            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">LG Laptop LP68</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/6.jpg" alt=""></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>new</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Nokia Lumia 520</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag hot"><span>hot</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Samsung Galaxy S4</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/1.jpg" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag hot"><span>hot</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Sony Ericson Vaga</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
						</div><!-- /.home-owl-carousel -->
			</div><!-- /.product-slider -->
		</div><!-- /.tab-pane -->

		<div class="tab-pane" id="laptop">
			<div class="product-slider">
				<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
				    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt=""></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>new</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Samsung Galaxy S4</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/6.jpg" alt=""></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>new</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Nokia Lumia 520</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/4.jpg" alt=""></a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>sale</span></div>            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">LG Laptop LP68</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag hot"><span>hot</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Samsung Galaxy S4</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/1.jpg" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag hot"><span>hot</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Sony Ericson Vaga</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/3.jpg" alt=""></a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>sale</span></div>            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Apple Iphone 5s 32GB</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
						</div><!-- /.home-owl-carousel -->
			</div><!-- /.product-slider -->
		</div><!-- /.tab-pane -->

		<div class="tab-pane" id="apple">
			<div class="product-slider">
				<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
				    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/3.jpg" alt=""></a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>sale</span></div>            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Apple Iphone 5s 32GB</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/1.jpg" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag hot"><span>hot</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Sony Ericson Vaga</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/4.jpg" alt=""></a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>sale</span></div>            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">LG Laptop LP68</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/6.jpg" alt=""></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>new</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Nokia Lumia 520</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt=""></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>new</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Samsung Galaxy S4</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.php"><img  src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag hot"><span>hot</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.php">Samsung Galaxy S4</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$650.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.php" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.php" title="Compare">
							    <i class="fa fa-retweet"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
						</div><!-- /.home-owl-carousel -->
			</div><!-- /.product-slider -->
		</div><!-- /.tab-pane -->

	</div><!-- /.tab-content -->
</div><!-- /.scroll-tabs -->
<!-- ============================================== SCROLL TABS : END ============================================== -->
		<!-- ============================================== FEATURED PRODUCTS ============================================== -->
<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
	<div class="more-info-tab clearfix ">
	   <h3 class="new-product-title pull-left">Products List</h3>
		<!--<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
			<li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
			<li><a data-transition-type="backSlide" href="#desktop" data-toggle="tab">Desktop</a></li>
			<li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">laptop</a></li>
			<li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">apple</a></li>
		</ul>--><!-- /.nav-tabs -->
	</div>
    
    <div class="clearfix filters-container m-t-10">
        <div class="row">
            <div class="col col-sm-6 col-md-2">
                <div class="filter-tabs">
                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                        <li class="active">
                            <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-list"></i>Grid</a>
                        </li>
                        <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th"></i>List</a></li>
                    </ul>
                </div><!-- /.filter-tabs -->
            </div><!-- /.col -->
            <div class="col col-sm-12 col-md-6">
                <div class="col col-sm-3 col-md-6 no-padding">
                    <div class="lbl-cnt">
                        <span class="lbl">Sort by</span>
                        <div class="fld inline">
                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                                    Position <span class="caret"></span>
                                </button>

                                <ul role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="#">position</a></li>
                                    <li role="presentation"><a href="#">Price:Lowest first</a></li>
                                    <li role="presentation"><a href="#">Price:HIghest first</a></li>
                                    <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                                </ul>
                            </div>
                        </div><!-- /.fld -->
                    </div><!-- /.lbl-cnt -->
                </div><!-- /.col -->
                <div class="col col-sm-3 col-md-6 no-padding">
                    <div class="lbl-cnt">
                        <span class="lbl">Show</span>
                        <div class="fld inline">
                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                                    1 <span class="caret"></span>
                                </button>

                                <ul role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="#">1</a></li>
                                    <li role="presentation"><a href="#">2</a></li>
                                    <li role="presentation"><a href="#">3</a></li>
                                    <li role="presentation"><a href="#">4</a></li>
                                    <li role="presentation"><a href="#">5</a></li>
                                    <li role="presentation"><a href="#">6</a></li>
                                    <li role="presentation"><a href="#">7</a></li>
                                    <li role="presentation"><a href="#">8</a></li>
                                    <li role="presentation"><a href="#">9</a></li>
                                    <li role="presentation"><a href="#">10</a></li>
                                </ul>
                            </div>
                        </div><!-- /.fld -->
                    </div><!-- /.lbl-cnt -->
                </div><!-- /.col -->
            </div><!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
                <div class="pagination-container">
                     <?php 
                        if(isset($_GET["begin"]) && (int)$_GET["begin"]>=0){
                            $position = $_GET["begin"];
                        }else{
                            $position = 0;  
                        }
                        $display = 9;
                         
                        if(isset($_GET["page"]) && (int)$_GET["page"]){
                            $sum_page = $_GET["page"];
                        }else{
                            $query 	= "SELECT * FROM product";
                            $result	= mysqli_query($con,$query)or die("LOI LKSP: ".mysqli_error($con));
                            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                            $sum_news = mysqli_num_rows($result);
                            if($sum_news > $display){
                                $sum_page = ceil($sum_news/$display);
                            }else{
                                $sum_page = 1;
                            }
                        }           
                        
                                    
                        
                        if($sum_page>1){
                            echo '<ul class="list-inline list-unstyled">';
                                $current = ($position / $display) + 1;
                                if($current != 1){
                                    $prev = $position - $display;
                                   echo '<li class="prev"><a href="index.php?url=home&begin='.$prev.'&page='.$sum_page.'"><i class="fa fa-angle-left"></i></a></li>'; 
                                }
                                    for($page=1;$page<=$sum_page;$page++){
                                        $begin = ($page-1)*$display;
                                        if($page==$current){
                                            echo '<li><a href="index.php?url=home&begin='.$begin.'&page='.$sum_page.'" style="color:red">'.$page.'</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?url=home&begin='.$begin.'&page='.$sum_page.'">'.$page.'</a></li>';
                                        }
                                        
                                    }
                                if($current != $sum_page){
                                    $next = $position + $display;
                                    echo '<li class="next"><a href="index.php?url=home&begin='.$next.'&page='.$sum_page.'"><i class="fa fa-angle-right"></i></a></li>';
                                } 
                            echo '</ul>';
                        } 
                     ?>
                        <!-- /.list-inline -->
                </div><!-- /.pagination-container -->		</div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    
    <div class="search-result-container">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane active " id="grid-container">
                <div class="category-product  inner-top-vs">
                    <div class="row">
                        <?php                           
                            $query = "SELECT * FROM product ORDER BY day DESC LIMIT $position,$display";
                		    $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                            date_default_timezone_set('UTC');
                            $date = date('Y-m-d');
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                $date_cmp = $row["day"];
                                $newdate = date('Y-m-d', strtotime($date_cmp));
                                if(strtotime($date)> strtotime($newdate)){
                                    $new = "Old";
                                }else if(strtotime($date)== strtotime($newdate)){
                                    $new = "New";
                                }
                                echo '
                                    <div class="col-sm-6 col-md-4 wow fadeInUp">
                                        <div class="products">
            
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="index.php?url=detail&spid='.$row["id_product"].'"><img  src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" alt="" height="347" width="270"></a>
                                                    </div><!-- /.image -->
            
                                                    <div class="tag new"><span>'.$new.'</span></div>
                                                </div><!-- /.product-image -->
            
            
                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="index.php?url=detail&spid='.$row["id_product"].'">'.$row["name_product"].'</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
            
                                                    <div class="product-price">
                                        				<span class="price">'.$row["price"].' VND</span>
                                                        <!--<span class="price-before-discount">$ 800</span>-->
            
                                                    </div><!-- /.product-price -->
            
                                                </div><!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <a href="index.php?url=add_cart&masp='.$row["id_product"].'" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
            
                                                            </li>
            
                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>
            
                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.action -->
                                                </div><!-- /.cart -->
                                            </div><!-- /.product -->
            
                                        </div><!-- /.products -->
                                    </div><!-- /.item -->
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

		</div><!-- /.homebanner-holder -->
		<!-- ============================================== CONTENT : END ============================================== -->
	</div><!-- /.row -->
	<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<h3 class="section-title">Our Brands</h3>
		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
