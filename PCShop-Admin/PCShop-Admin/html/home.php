<?php
    include_once ("overfile/connect.php");
?>
<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                    </ol>
                </div>
            </div>
            <?php
                $query = "select sum(amount) AS amount from orders";
                $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            ?>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        <div class="count"><?php echo floor($row["amount"])?></div>
                        <div class="title">VND</div>
                    </div><!--/.info-box-->
                </div><!--/.col-->
                <?php
                    $query = "select count(payment_status) AS payment_status1 from orders where payment_status = 'Postpay Payment'";
                    $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="count"><?php echo $row["payment_status1"]?></div>
                        <div class="title">Postpay</div>
                    </div><!--/.info-box-->
                </div><!--/.col-->
                <?php
                    $query = "select count(payment_status) AS payment_status2 from orders where payment_status = 'Ngan Luong Gateway'";
                    $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <div class="count"><?php echo $row["payment_status2"]?></div>
                        <div class="title">Online payment</div>
                    </div><!--/.info-box-->
                </div><!--/.col-->
                <?php
                    $query = "select count(status) AS status from orders where status = 1";
                    $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">
                        <i class="fa fa-truck"></i>
                        <div class="count"><?php echo $row["status"]?></div>
                        <div class="title">Delivered</div>
                    </div><!--/.info-box-->
                </div><!--/.col-->

            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-9 col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                            <div class="panel-actions">
                            </div>
                        </div>
                        <div class="panel-body-map">
                            <div id="map" style="height:380px;"></div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <!-- List starts -->
                </div>

                <div class="col-md-3">

                    <div class="social-box facebook">
                        <i class="fa fa-facebook"></i>
                        <ul>
                            <li>
                                <strong>256k</strong>
                                <span>friends</span>
                            </li>
                            <li>
                                <strong>359</strong>
                                <span>feeds</span>
                            </li>
                        </ul>
                    </div><!--/social-box-->
                </div>
            </div>
            <!-- Today status end -->
              <!-- statics end -->
            <!-- project team & activity start -->
        </section>
    </section>