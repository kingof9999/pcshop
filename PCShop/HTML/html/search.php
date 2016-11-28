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
	<h3 class="section-title">Special Offer</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
	        	        <div class="item">
	        	<div class="products special-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
											<div class="tag tag-micro hot">
							<span>hot</span>
						</div>
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Simple Product</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Canon EOS 60D</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm3.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
											<div class="tag tag-micro new">
							<span>new</span>
						</div>
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Camera X30</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products special-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Simple Product</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
											<div class="tag tag-micro sale">
							<span>sale</span>
						</div>
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Canon EOS 60D</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm3.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Camera X30</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products special-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
											<div class="tag tag-micro new">
							<span>new</span>
						</div>
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Simple Product</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
											<div class="tag tag-micro hot">
							<span>hot</span>
						</div>
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Canon EOS 60D</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm3.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Camera X30</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL OFFER : END ============================================== -->
			<!-- ============================================== PRODUCT TAGS ============================================== -->
<div class="sidebar-widget product-tag wow fadeInUp">
	<h3 class="section-title">Product tags</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="tag-list">
            <a class="item" title="Phone" href="category.php">Phone</a>
            <a class="item active" title="Vest" href="category.php">Speaker</a>
            <a class="item" title="Smartphone" href="category.php">Smartphone</a>
            <a class="item" title="Furniture" href="category.php">Furniture</a>
            <a class="item" title="T-shirt" href="category.php">Mouses</a>
            <a class="item" title="Sweatpants" href="category.php">Usb</a>
            <a class="item" title="Sneaker" href="category.php">HDD - SSD</a>
            <a class="item" title="Toys" href="category.php">Batterys</a>
            <a class="item" title="Rose" href="category.php">Screens</a>
		</div><!-- /.tag-list -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== -->
			<!-- ============================================== SPECIAL DEALS ============================================== -->

<div class="sidebar-widget outer-bottom-small wow fadeInUp">
	<h3 class="section-title">Special Deals</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
	        	        <div class="item">
	        	<div class="products special-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm4.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm4.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
											<div class="tag tag-micro hot">
							<span>hot</span>
						</div>
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Simple Product</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm5.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm5.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Simple Product</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm6.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm6.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
											<div class="tag tag-micro new">
							<span>new</span>
						</div>
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Camera X30</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products special-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
											<div class="tag tag-micro sale">
							<span>sale</span>
						</div>
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm3.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm3.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products special-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm5.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm5.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
											<div class="tag tag-micro new">
							<span>new</span>
						</div>
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm2.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm2.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
											<div class="tag tag-micro hot">
							<span>hot</span>
						</div>
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/sm1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
						<img data-echo="assets/images/products/sm1.jpg" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$650.99				</span>
				
			</div><!-- /.product-price -->
				<div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL DEALS : END ============================================== -->
			<!-- ============================================== NEWSLETTER ============================================== -->
<div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
	<h3 class="section-title">Newsletters</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<p>Sign Up for Our Newsletter!</p>
        <form role="form">
        	 <div class="form-group">
			    <label class="sr-only" for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
			  </div>
			<button class="btn btn-primary">Subscribe</button>
		</form>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
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
									$600.00
								</span>
									
							    <span class="price-before-discount">$800.00</span>					
							
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
									$600.00
								</span>
									
							    <span class="price-before-discount">$800.00</span>					
							
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
									$600.00
								</span>
									
							    <span class="price-before-discount">$800.00</span>					
							
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
                                <ul class="list-inline list-unstyled">
                                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul><!-- /.list-inline -->
                            </div><!-- /.pagination-container -->		</div><!-- /.col -->
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
                                                                                <button class="btn btn-primary" type="button">Add to cart</button>
                            
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
                                            }
                                        }else{
                                            $hid = $_GET["hid"];
                                            $checkpr = $_GET["checkpr"];
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
                                                                                    <button class="btn btn-primary" type="button">Add to cart</button>
                                
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
                                                                                    <button class="btn btn-primary" type="button">Add to cart</button>
                                
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
                                                                        <h3 class="name"><a href="detail.html">'.$row["name_product_as"].'</a></h3>
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
                                                                                    <button class="btn btn-primary" type="button">Add to cart</button>
                                
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
