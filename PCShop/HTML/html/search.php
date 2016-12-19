<?php 
   include "overfile/connect.php";
?>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
	<div class="row">
	<!-- ============================================== SIDEBAR ============================================== -->	
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			
<!-- ================================== TOP NAVIGATION ================================== -->
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
            <!-- ============================================== FILTER ============================================== -->
            <?php
            if(isset($_POST['filter'])){
                $selected_price = $_POST['price'];
                $selected_purpose = $_POST['purpose'];

                echo '<meta http-equiv="refresh" content="0;url=index.php?url=filter&fpr='.$selected_price.'&fpu='.$selected_purpose.'" />';
            }
            ?>
            <div class="sidebar-widget product-tag wow fadeInUp">
                <h3 class="section-title">Filter</h3>
                <div class="sidebar-widget-body outer-top-xs">
                    <form class="outer-top-xs" action="index.php?url=home" id="form-price" method="post">
                        <h4>Filter by price: </h4>
                        <select name="price" class="form-control unicase-form-control text-input">
                            <optgroup label="Price">
                                <option value="500"> Below 500 VND</option>
                                <option value="1000"> Between 500 - 1000 VND</option>
                                <option value="5000"> Between 1000 - 5000 VND</option>
                                <option value="20000"> Between 5000 - 20000 VND</option>
                                <option value="20001"> Over 20000 VND</option>
                            </optgroup>
                        </select>

                        <h4 class="outer-top-xs">Filter by purpose: </h4>
                        <select name="purpose" class="form-control unicase-form-control text-input">
                            <optgroup label="For">
                                <option value="1"> Work</option>
                                <option value="2"> Home</option>
                            </optgroup>
                        </select>
                        <input type="submit" value="Filter" class="btn btn-info outer-top-xs" id="filter" name="filter"/>
                    </form>

                </div><!-- /.sidebar-widget-body -->
            </div><!-- /.sidebar-widget -->
            <!-- ============================================== FILTER : END ============================================== -->
			<!-- ============================================== SPECIAL DEALS ============================================== -->

<!-- ============================================== SPECIAL DEALS : END ============================================== -->
			<!-- ============================================== NEWSLETTER ============================================== -->
<!-- ============================================== NEWSLETTER: END ============================================== -->
			<!-- ============================================== HOT DEALS ============================================== -->
<div class="sidebar-widget hot-deals wow fadeInUp">
	<h3 class="section-title">hot deals</h3>
	<div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
		
														<div class="item">
					<div class="products">
						<div class="hot-deal-wrapper">
							<div class="image">
								<img src="assets/images/hot-deals/1.jpg" alt="">
							</div>
							<div class="sale-offer-tag"><span>35%<br>off</span></div>
							<div class="timing-wrapper">
								<div class="box-wrapper">
									<div class="date box">
										<span class="key">120</span>
										<span class="value">Days</span>
									</div>
								</div>
				                
				                <div class="box-wrapper">
									<div class="hour box">
										<span class="key">20</span>
										<span class="value">HRS</span>
									</div>
								</div>

				                <div class="box-wrapper">
									<div class="minutes box">
										<span class="key">36</span>
										<span class="value">MINS</span>
									</div>
								</div>

				                <div class="box-wrapper hidden-md">
									<div class="seconds box">
										<span class="key">60</span>
										<span class="value">SEC</span>
									</div>
								</div>
							</div>
						</div><!-- /.hot-deal-wrapper -->

						<div class="product-info text-left m-t-20">
							<h3 class="name"><a href="detail.php">Apple Iphone 5s 32GB Gold</a></h3>
							<div class="rating rateit-small"></div>

							<div class="product-price">	
								<span class="price">
									VND600.00
								</span>
									
							    <span class="price-before-discount">VND800.00</span>
							
							</div><!-- /.product-price -->
							
						</div><!-- /.product-info -->

						<div class="cart clearfix animate-effect">
							<div class="action">
								
								<div class="add-cart-button btn-group">
									<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
										<i class="fa fa-shopping-cart"></i>													
									</button>
									<button class="btn btn-primary" type="button">Add to cart</button>
															
								</div>
								
							</div><!-- /.action -->
						</div><!-- /.cart -->
					</div>	
					</div>		        
													<div class="item">
					<div class="products">
						<div class="hot-deal-wrapper">
							<div class="image">
								<img src="assets/images/hot-deals/2.jpg" alt="">
							</div>
							<div class="sale-offer-tag"><span>35%<br>off</span></div>
							<div class="timing-wrapper">
								<div class="box-wrapper">
									<div class="date box">
										<span class="key">120</span>
										<span class="value">Days</span>
									</div>
								</div>
				                
				                <div class="box-wrapper">
									<div class="hour box">
										<span class="key">20</span>
										<span class="value">HRS</span>
									</div>
								</div>

				                <div class="box-wrapper">
									<div class="minutes box">
										<span class="key">36</span>
										<span class="value">MINS</span>
									</div>
								</div>

				                <div class="box-wrapper hidden-md">
									<div class="seconds box">
										<span class="key">60</span>
										<span class="value">SEC</span>
									</div>
								</div>
							</div>
						</div><!-- /.hot-deal-wrapper -->

						<div class="product-info text-left m-t-20">
							<h3 class="name"><a href="detail.php">Apple Iphone 5s 32GB Gold</a></h3>
							<div class="rating rateit-small"></div>

							<div class="product-price">	
								<span class="price">
									VND600.00
								</span>
									
							    <span class="price-before-discount">VND800.00</span>
							
							</div><!-- /.product-price -->
							
						</div><!-- /.product-info -->

						<div class="cart clearfix animate-effect">
							<div class="action">
								
								<div class="add-cart-button btn-group">
									<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
										<i class="fa fa-shopping-cart"></i>													
									</button>
									<button class="btn btn-primary" type="button">Add to cart</button>
															
								</div>
								
							</div><!-- /.action -->
						</div><!-- /.cart -->
					</div>	
					</div>		        
													<div class="item">
					<div class="products">
						<div class="hot-deal-wrapper">
							<div class="image">
								<img src="assets/images/hot-deals/3.jpg" alt="">
							</div>
							<div class="sale-offer-tag"><span>35%<br>off</span></div>
							<div class="timing-wrapper">
								<div class="box-wrapper">
									<div class="date box">
										<span class="key">120</span>
										<span class="value">Days</span>
									</div>
								</div>
				                
				                <div class="box-wrapper">
									<div class="hour box">
										<span class="key">20</span>
										<span class="value">HRS</span>
									</div>
								</div>

				                <div class="box-wrapper">
									<div class="minutes box">
										<span class="key">36</span>
										<span class="value">MINS</span>
									</div>
								</div>

				                <div class="box-wrapper hidden-md">
									<div class="seconds box">
										<span class="key">60</span>
										<span class="value">SEC</span>
									</div>
								</div>
							</div>
						</div><!-- /.hot-deal-wrapper -->

						<div class="product-info text-left m-t-20">
							<h3 class="name"><a href="detail.php">Apple Iphone 5s 32GB Gold</a></h3>
							<div class="rating rateit-small"></div>

							<div class="product-price">	
								<span class="price">
									VND600.00
								</span>
									
							    <span class="price-before-discount">VND800.00</span>
							
							</div><!-- /.product-price -->
							
						</div><!-- /.product-info -->

						<div class="cart clearfix animate-effect">
							<div class="action">
								
								<div class="add-cart-button btn-group">
									<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
										<i class="fa fa-shopping-cart"></i>													
									</button>
									<button class="btn btn-primary" type="button">Add to cart</button>
															
								</div>
								
							</div><!-- /.action -->
						</div><!-- /.cart -->
					</div>	
					</div>		        
						
	    
    </div><!-- /.sidebar-widget -->
</div>
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
			<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
            	<div class="more-info-tab clearfix ">
            	   <h3 class="new-product-title pull-left">New Products</h3>
            		<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
            			<li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
            			<li><a data-transition-type="backSlide" href="#desktop" data-toggle="tab">Desktop</a></li>
            			<li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">laptop</a></li>
            			<li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">apple</a></li>
            		</ul><!-- /.nav-tabs -->
            	</div>
                
                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-6 col-md-2">
                        </div><!-- /.col -->
                        <div class="col col-sm-12 col-md-6">
                            <div class="col col-sm-3 col-md-6 no-padding">
                            </div><!-- /.col -->
                            <div class="col col-sm-3 col-md-6 no-padding">
                            </div><!-- /.col -->
                        </div><!-- /.col -->
                        <div class="col col-sm-6 col-md-4 text-right">
         	            </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
                
                <div class="search-result-container">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product  inner-top-vs">
                                <div class="row">
                                    <?php 
                                        if(isset($_POST["searchSubmit"])){                                    
                                            $keyword = $_POST["keyword"];
                                            require("library/funtions.php");
                                            $keyword_kodau = seoname($keyword);
                                            $query = "SELECT * FROM product WHERE name_product LIKE '%$keyword_kodau%'";
                                            $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                            if(mysqli_num_rows($result)==0){
                                                echo '<p>There is no item in the store.</p>';
                                            }else{
                                                $number = mysqli_num_rows($result);
                                                echo '<p>Find '.$number.' items with keyword "'.$keyword.'"</p>';
                                                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                echo '
                                                    <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                        <div class="products">
                            
                                                            <div class="product">
                                                                <div class="product-image">
                                                                    <div class="image">
                                                                        <a href="index.php?url=detail&spid='.$row["id_product"].'"><img  src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" alt="" height="347" width="270"></a>
                                                                    </div><!-- /.image -->
                            
                                                                    <div class="tag new"><span>new</span></div>
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
                                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                </button>
                                                                                    <a href="index.php?url=add_cart&masp='.$row["id_product"].'" class="btn btn-primary"> ADD TO CART</a>
                            
                                                                            </li>
                            
                      
                                                                        </ul>
                                                                    </div><!-- /.action -->
                                                                </div><!-- /.cart -->
                                                            </div><!-- /.product -->
                            
                                                        </div><!-- /.products -->
                                                    </div><!-- /.item -->
                                                ';
                                            }
                                            }
                                        }else{
                                            error_reporting(E_ALL & ~E_NOTICE);
                                            $hid = $_GET["hid"];
                                            $checkpr = $_GET["checkpr"];
                                            if($checkpr == null || $hid == null){
                                                $hid = 0;
                                                $checkpr = 0;
                                                $query 	= "SELECT * FROM product";
                                                $result	= mysqli_query($con,$query)or die("LOI LKSP: ".mysqli_error($con));
                                                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                    echo '
                                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                            <div class="products">
                                
                                                                <div class="product">
                                                                    <div class="product-image">
                                                                        <div class="image">
                                                                            <a href="index.php?url=detail&spid='.$row["id_product"].'"><img  src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" alt="" height="347" width="270"></a>
                                                                        </div><!-- /.image -->
                                
                                                                        <div class="tag new"><span>new</span></div>
                                                                    </div><!-- /.product-image -->
                                
                                
                                                                    <div class="product-info text-left">
                                                                        <h3 class="name"><a href="detail.html">'.$row["name_product"].'</a></h3>
                                                                        <div class="rating rateit-small"></div>
                                                                        <div class="description"></div>
                                
                                                                        <div class="product-price">
                                                            				<span class="price">$'.$row["price"].'</span>
                                                                            <!--<span class="price-before-discount">$ 800</span>-->
                                
                                                                        </div><!-- /.product-price -->
                                
                                                                    </div><!-- /.product-info -->
                                                                    <div class="cart clearfix animate-effect">
                                                                        <div class="action">
                                                                            <ul class="list-unstyled">
                                                                                <li class="add-cart-button btn-group">
                                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                    </button>
                                                                                        <a href="index.php?url=add_cart&masp='.$row["id_product"].'" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                                
                                                                                </li>
        
                                                                            </ul>
                                                                        </div><!-- /.action -->
                                                                    </div><!-- /.cart -->
                                                                </div><!-- /.product -->
                                
                                                            </div><!-- /.products -->
                                                        </div><!-- /.item -->
                                                    ';
                                                }
                                            }
                                            if($checkpr == 1){
                                                $query 	= "SELECT * FROM product WHERE id_mf='$hid'";
                                                $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                                                $result	= mysqli_query($con,$query)or die("LOI LKSP: ".mysqli_error($con));
                                                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                    echo '
                                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                            <div class="products">
                                
                                                                <div class="product">
                                                                    <div class="product-image">
                                                                        <div class="image">
                                                                            <a href="index.php?url=detail&spid='.$row["id_product"].'"><img  src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" alt="" height="347" width="270"></a>
                                                                        </div><!-- /.image -->
                                
                                                                        <div class="tag new"><span>new</span></div>
                                                                    </div><!-- /.product-image -->
                                
                                
                                                                    <div class="product-info text-left">
                                                                        <h3 class="name"><a href="detail.html">'.$row["name_product"].'</a></h3>
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
                                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                    </button>
                                                                                        <a href="index.php?url=add_cart&masp='.$row["id_product"].'" class="btn btn-primary"> ADD TO CART</a>
                                
                                                                                </li>
        
                                                                            </ul>
                                                                        </div><!-- /.action -->
                                                                    </div><!-- /.cart -->
                                                                </div><!-- /.product -->
                                
                                                            </div><!-- /.products -->
                                                        </div><!-- /.item -->
                                                    ';
                                                }
                                            }else if($checkpr == 2){
                                                $query 	= "SELECT * FROM product WHERE id_type='$hid'";
                                                $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                                                $result	= mysqli_query($con,$query)or die("LOI LKSP: ".mysqli_error($con));
                                                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                    echo '
                                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                            <div class="products">
                                
                                                                <div class="product">
                                                                    <div class="product-image">
                                                                        <div class="image">
                                                                            <a href="index.php?url=detail&spid='.$row["id_product"].'"><img  src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" alt="" height="347" width="270"></a>
                                                                        </div><!-- /.image -->
                                
                                                                        <div class="tag new"><span>new</span></div>
                                                                    </div><!-- /.product-image -->
                                
                                
                                                                    <div class="product-info text-left">
                                                                        <h3 class="name"><a href="detail.html">'.$row["name_product"].'</a></h3>
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
                                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                    </button>
                                                                                    <button class="btn btn-primary" type="button">Add to cart</button>
                                
                                                                                </li>
             
                                                                            </ul>
                                                                        </div><!-- /.action -->
                                                                    </div><!-- /.cart -->
                                                                </div><!-- /.product -->
                                
                                                            </div><!-- /.products -->
                                                        </div><!-- /.item -->
                                                    ';
                                                }
                                            }else if($checkpr == 3){
                                                $query 	= "SELECT * FROM product_assosi WHERE id_as='$hid'";
                                                $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                                                $result	= mysqli_query($con,$query)or die("LOI LKSP: ".mysqli_error($con));
                                                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                    echo '
                                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                            <div class="products">
                                
                                                                <div class="product">
                                                                    <div class="product-image">
                                                                        <div class="image">
                                                                            <a href="index.php?url=detail&spid='.$row["id_product_as"].'"><img  src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" alt="" height="347" width="270"></a>
                                                                        </div><!-- /.image -->
                                
                                                                        <div class="tag new"><span>new</span></div>
                                                                    </div><!-- /.product-image -->
                                
                                
                                                                    <div class="product-info text-left">
                                                                        <h3 class="name"><a href="index.php?url=detailas&asid='.$row["id_product_as"].'">'.$row["name_product_as"].'</a></h3>
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
                                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                    </button>
                                                                                    <button class="btn btn-primary" type="button">Add to cart</button>
                                
                                                                                </li>
                                
                        
                                                                            </ul>
                                                                        </div><!-- /.action -->
                                                                    </div><!-- /.cart -->
                                                                </div><!-- /.product -->
                                
                                                            </div><!-- /.products -->
                                                        </div><!-- /.item -->
                                                    ';
                                                }
                                            }
                                        }                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

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
