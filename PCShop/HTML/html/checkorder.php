<?php
    require ("overfile/connect.php");

    $email     =  isset($_SESSION["user-email"]) ? $_SESSION["user-email"] : "";
    $idcustomer	   =  isset($_SESSION["user-id"]) ? $_SESSION["user-id"] : "";
    $price= $_SESSION['tongtien'];

    $query = "SELECT c.id_ca,c.cus_type,c.phone,c.address,c.cus_name,ca.email,ca.user_name,ca.status,ca.password,ca.id_ca 
                      FROM customer c,customer_account ca WHERE ca.id_ca = '$idcustomer' AND ca.id_ca=c.id_ca";
    $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
    $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);

    if(isset($_POST["confirm_check"])){
        $checkpay = $_POST["pay_method"];
            error_reporting(E_ALL & ~E_NOTICE);
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            if($row["address"] == "" && $row["phone"] == ""){
                $query2 = "UPDATE customer SET address='$address',phone='$phone'
                    WHERE id_ca='$idcustomer'";
                $result2 = mysqli_query($con,$query2)or die("Error: ".mysqli_error($con));
                echo '<meta http-equiv="refresh" content="0;url=index.php?url=checkorder" />';
            }else{
                echo '<meta http-equiv="refresh" content="0;url=index.php?url=confirm_pay&checkpay='.$checkpay.'" />';
            }
    }
?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li class='active'>Check Order</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="track-order-page inner-bottom-sm">
            <div class="row">
                <div class="col-md-6">
                    <form action="index.php?url=checkorder" method="post">
                    <div class="panel panel-default checkout-step-01">
                        <!-- panel-heading -->
                        <div class="panel-heading">
                            <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne"><h4>YOUR
                                        CURRENT ADDRESS</h4></a>
                            </h4>
                        </div>
                        <!-- panel-heading -->
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <!-- panel-body  -->
                            <div class="panel-body" style="font-size:20px">
                                Name: <?php echo $row["cus_name"]?> <br/>
                                Address: <?php echo $row["address"]?>  <br/>
                                City: Da Nang <br/>
                                Nation: Viet Nam <br/>
                                Phone: (+84) <?php echo $row["phone"]?> <br/>
                                <form action="" id="form-1">
                                    <label class="info-title outer-top-xs" for="phone">Shipping option</label>
                                    <select name="shipping-1" id="shipping-1"
                                            class="form-control unicase-form-control text-input">
                                        <option value="free-1">Free shipping</option>
                                        <option value="fast-1">Fast shipping (1 VND)</option>
                                    </select>
                                    <div class="form-group outer-top-xs">
                                        <label class="info-title" for="phone">Payment method</label>
                                        <select name="pay_method" id="pay_method"
                                                class="form-control unicase-form-control text-input">
                                            <option value="1">Postpay Payment</option>
                                            <option value="2">Ngan Luong Gateway</option>
                                        </select>
                                    </div>
                                        <?php
                                            if($row["address"] == "" || $row["cus_name"] == "" || $row["phone"] == ""){
                                                echo '
                                                    <div class="form-group outer-top-xs">
                                                        <label class="info-title" for="name">Enter Your Address*</label>
                                                        <input type="text" class="form-control unicase-form-control text-input"
                                                               id="address"
                                                               name="address" value="'.$row["address"].'">
                                                    </div>
                                                    <div class="form-group outer-top-xs">
                                                        <label class="info-title" for="name">Enter Your Phone*</label>
                                                        <input type="text" class="form-control unicase-form-control text-input"
                                                               id="phone"
                                                               name="phone" value="'.$row["phone"].'">
                                                    </div>
                                                ';
                                            }
                                        ?>
                                    <br/>
                                                        <table class="table table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Quatity</th>
                                                                <th>Price</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                        <?php
                                            foreach($_SESSION['cart'] as $masp=>$soluong){
                                                $query = "SELECT * FROM product WHERE id_product='$masp'";
                                                $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                    echo '
                                                            <tr>
                                                                <td>'.$row["name_product"].'</td>
                                                                <td>'.$soluong.'</td>
                                                                <td>'.$row["price"].' VND</td>
                                                            </tr>
                                                    ';
                                                }
                                            }
                                                    echo '
                                                            <tr>
                                                                <td><b>Total</b></td>
                                                                <td></td>
                                                                <td style="color: red">'.$price.'</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    ';
                                        ?>
                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="confirm_check">Ship to
                                            address
                                        </button>
                                </form>
                            </div>
                            <!-- panel-body  -->

                        </div><!-- row -->
                    </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default checkout-step-02">
                        <div class="panel-heading">
                            <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                   href="#collapseTwo"><h4>ADD NEW ADDRESS</h4></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <span class="title-tag inner-top-vs">Please enter valid your information for us can delivery. </span>
                                <form class="register-form outer-top-xs" role="form" action="" id="form-2">
                                    <div class="form-group">
                                        <label class="info-title" for="name">Full Name*</label>
                                        <input type="text" class="form-control unicase-form-control text-input"
                                               id="name"
                                               name="name">
                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="address">Address*</label>
                                        <input type="text" class="form-control unicase-form-control text-input"
                                               id="address"
                                               name="address">
                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="city">City*</label>
                                        <input type="text" class="form-control unicase-form-control text-input"
                                               id="city"
                                               name="city">
                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="phone">Phone number*</label>
                                        <input type="email" class="form-control unicase-form-control text-input"
                                               id="phone"
                                               name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="phone">Shipping option</label>
                                        <select name="shipping-2" id="shipping-2"
                                                class="form-control unicase-form-control text-input">
                                            <option value="free-2">Free shipping</option>
                                            <option value="fast-2">Fast shipping (1 USD)</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="info-title" for="phone">Payment method</label>
                                        <select name="pay-method-2" id="pay-method-2"
                                                class="form-control unicase-form-control text-input">
                                            <option value="later-2">Pay when i recieve products</option>
                                            <option value="gatewate-2">Ngan Luong gateway</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Ship to
                                        address
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
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
</div><!-- /.body-content -->