<?php
include "overfile/connect.php";
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$spid 	= $_GET["spid"];
if(isset($_POST["btn_comment"])){
	$comment	= $_POST["comment"];
	$namecm		= $_POST["namecm"];
    $email      = $_POST["email"];
	$query 		= "INSERT INTO comment(name,email,comment,id_product) VALUES ('$namecm','$email','$comment','$spid')";
	$result=mysqli_query($con,$query);
	if($result){
		$msg ='<p style="color:blue">Thanks for your comment !</p>';
	}
}
    $query 	= "SELECT * FROM product WHERE id_product='$spid'";
	$result	= mysqli_query($con,$query)or die("LOI LKSP: ".mysqli_error($con));
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="index.php">Home</a></li>
				<li class='active'><?php echo $row["name_product"]?></li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product outer-bottom-sm '>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">

<!-- ==============================================CATEGORY============================================== -->
<!-- ============================================== CATEGORY : END ============================================== -->

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
<?php 
    $query 	= "SELECT * FROM product WHERE id_product='$spid'";
	$result	= mysqli_query($con,$query)or die("LOI LKSP: ".mysqli_error($con));
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
				</div>
			</div><!-- /.sidebar -->
			<div class='col-md-9'>
				<div class="row  wow fadeInUp">
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-lightbox="image-1" data-title="Gallery" href="../../PCShop-Admin/PCShop-Admin/images/<?php echo $row["image"];?>">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/<?php echo $row["image"];?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide2">
                <a data-lightbox="image-1" data-title="Gallery" href="../../PCShop-Admin/PCShop-Admin/images/<?php echo $row["image1"];?>">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/<?php echo $row["image1"];?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide3">
                <a data-lightbox="image-1" data-title="Gallery" href="../../PCShop-Admin/PCShop-Admin/images/<?php echo $row["image3"];?>">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/<?php echo $row["image2"];?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->
        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                        <img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/<?php echo $row["image"];?>" />
                    </a>
                </div>

                <div class="item">
                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                        <img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/<?php echo $row["image1"];?>"/>
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                        <img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="../../PCShop-Admin/PCShop-Admin/images/<?php echo $row["image2"];?>" />
                    </a>
                </div>
            </div><!-- /#owl-single-product-thumbnails -->



        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->
					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name"><?php echo $row["name_product"]?></h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
										<div class="rating rateit-small"></div>
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">(06 Reviews)</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->

							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
                                            <span class="value"><?php 
                                                if($row["quantity"] == 0){
                                                    echo 'Out of Stock';
                                                }else{
                                                    echo 'In Stock';
                                                }
                                            ?></span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

							<div class="description-container m-t-20">
								<table>
                                    <tr>
                                        <td style="width: 70px">
                                            <b>Screen:</b>
                                        </td>
                                        <td>
                                            <span class="text-info"><?php echo $row["screen"];?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>CPU:</b>
                                        </td>
                                        <td>
                                            <span class="text-info"><?php echo $row["cpu"];?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Battery:</b>
                                        </td>
                                        <td>
                                            <span class="text-info"><?php echo $row["pin"];?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>HDH:</b>
                                        </td>
                                        <td>
                                            <span class="text-info"><?php echo $row["hdh"];?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>RAM:</b>
                                        </td>
                                        <td>
                                            <span class="text-info"><?php echo $row["ram"];?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>VGA:</b>
                                        </td>
                                        <td>
                                            <span class="text-info"><?php echo $row["vga"];?></span>
                                        </td>
                                    </tr>
                                </table>
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-6">
										<div class="price-box">
											<span class="price"><?php echo $row["price"]?> VND</span>
											<!--<span class="price-strike">$900.00</span>-->
										</div>
									</div>

									<div class="col-sm-6">
										<div class="favorite-button m-t-10">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
											    <i class="fa fa-heart"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
											   <i class="fa fa-retweet"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
											    <i class="fa fa-envelope"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">

									<div class="col-sm-7">
										<a href="index.php?url=add_cart&masp=<?php echo $row["id_product"]?>" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
									</div>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							<div class="product-social-link m-t-20 text-right">
								<span class="social-label">Share :</span>
								<div class="social-icons">
						            <ul class="list-inline">
						                <li><a class="fa fa-facebook" href="http://facebook.com/transvelo"></a></li>
						                <li><a class="fa fa-twitter" href="#"></a></li>
						                <li><a class="fa fa-linkedin" href="#"></a></li>
						                <li><a class="fa fa-rss" href="#"></a></li>
						                <li><a class="fa fa-pinterest" href="#"></a></li>
						            </ul><!-- /.social-icons -->
						        </div>
							</div>

							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                <!-- tai day -->
				
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
								<li><a data-toggle="tab" href="#review">COMMENT</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text"><?php echo $row["description"]?></p>
									</div>	
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">
										<div class="product-add-review">
											<h4 class="title">Write your own review</h4>
											
											<div class="review-form">
												<div class="form-container">
													<form role="form" class="cnt-form" action="<?php echo'index.php?url=detail&spid='.$spid.''?>" method="post">
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="exampleInputName">Your Name <span class="astk">*</span></label>
																	<input type="text" class="form-control txt" name="namecm" id="exampleInputName" placeholder="">
																</div><!-- /.form-group -->
																<div class="form-group">
																	<label for="exampleInputSummary">Email <span class="astk">*</span></label>
																	<input type="email" class="form-control txt" name="email" id="exampleInputSummary" placeholder="">
																</div><!-- /.form-group -->
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputReview">Review <span class="astk">*</span></label>
																	<textarea class="form-control txt txt-review" name="comment" id="exampleInputReview" rows="4" placeholder=""></textarea>
																</div><!-- /.form-group -->
															</div>
														</div><!-- /.row -->
														<?php 
                                                            if(isset($msg)) echo $msg;
                                                        ?>
														<div class="action text-right">
															<button class="btn btn-primary btn-upper" name="btn_comment">SUBMIT REVIEW</button>
														</div><!-- /.action -->

													</form><!-- /.cnt-form -->
												</div><!-- /.form-container -->
											</div><!-- /.review-form -->

										</div><!-- /.product-add-review -->										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->


							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

<!-- ============================================== UPSELL PRODUCTS ============================================== -->
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
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
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->