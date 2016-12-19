<?php
    include_once ("../overfile/connect.php");
    
    $userid = $_GET["id"];
    $query = "SELECT c.id_ca,c.cus_type,c.phone,c.address,c.cus_name,ca.email,ca.user_name,ca.status,ca.password,ca.id_ca 
                    FROM customer c,customer_account ca WHERE ca.id_ca='$userid' AND c.id_ca='$userid'";
	$result = mysqli_query($con,$query) or die("Loi truy van: ".mysqli_error($con));
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if(isset($_POST["submit"])){
		$cus_type = $_POST["cus_type"];
		$phone = $_POST["phone"];
		$phone = trim($phone);
		$address = $_POST["address"];
		$address = trim($address);
        $cus_name = $_POST["cus_name"];
        $cus_name = trim($cus_name);
        $user_name = $_POST["user_name"];
        $user_name = trim($user_name);
        $status = $_POST["status"];

        $check = true;

        if($check){
			$query="UPDATE customer_account SET user_name='$user_name',password='$password',status='$status' 
                    WHERE id_ca='$userid'";
            $query2="UPDATE customer SET cus_type='$cus_type',phone='$phone',address='$address',cus_name='$cus_name' 
                    WHERE id_ca='$userid'";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
            $result2 = mysqli_query($con,$query2)or die("Error: ".mysqli_error($con));
			if($result && $result2){
				$msg = "Success";
                header ('Location: ../index.php?url=customer');
			}
		}
        /*if($check){
			$query="UPDATE product SET name_product='$name_product',quantity='$quantity',price='$price',manufacturer='$manufacturer',date_imp_pro='$date_imp_pro',month_imp_pro='$month_imp_pro',year_imp_pro='$year_imp_pro',screen='$screen',cpu='$cpu',ram='$ram',vga='$vga',hdh='$hdh',pin='$pin' 
                    WHERE id_product='$userid'";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
			if($result){
				$msg = "Success";
			}
		}*/
    }else if(isset($_POST["cancel"])){
        header ('Location: ../index.php?url=customer');
    }else if(isset($_POST["resetpass"])){
        $query="UPDATE customer_account SET password='123456'
                    WHERE id_ca='$userid'";
        $result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
        header ('Location: ../index.php?url=customer');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="../css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/lte-ie7.js"></script>
    <![endif]-->
</head>

<body>
<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                    class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="../index.php" class="logo">PC Shop <span class="lite">Admin</span></a>
        <!--logo end-->

    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <?php include "../overfile/menu2.php"?>
    </aside>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> Update Customer</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
                        <li><i class="fa fa-table"></i><a href="../index.php?url=customer">Customer Manager</a></li>
                        <li><i class="fa fa-th-list"></i>Update Customer</li>
                    </ol>
                </div>
            </div>
            <!-- page start--> 
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">

                        </header>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-left">Update Customer <?php echo $userid?></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">
                            <form name="form-admin-newproduct" action="update_customer.php?id=<?php echo $userid?>" method="post">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                    <form class="form-horizontal">
                                        <!-- Cus Type -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Cus Type</label>
                                            <div class="">
                                                <select name="cus_type">
                                                    <option value="1">VIP</option>
                                                    <option value="2">Normal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Status -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Status</label>
                                            <div class="">
                                                <select name="status">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Customer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Phone -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Phone</label>
                                            <div class="col-lg-10">
                                                <input type="number" placeholder="Enter Customer Phone" name="phone" class="form-control" id="phone" value="<?php echo $row["phone"]?>"/>
                                            </div>
                                        </div>
                                        <!-- Address -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Address</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter Address" name="address" class="form-control" id="address" value="<?php echo $row["address"]?>"/>
                                            </div>
                                        </div>
                                        <!-- Customer Name -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Customer Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter Customer Name" name="cus_name" class="form-control" id="cus_name" value="<?php echo $row["cus_name"]?>"/>
                                            </div>
                                        </div>
                                        <!-- User Name -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">User Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter username" name="user_name" class="form-control" id="user_name" value="<?php echo $row["user_name"]?>"/>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Email</label>
                                            <div class="col-lg-10">
                                                <input type="email" placeholder="Enter Email" name="email" class="form-control" id="email" value="<?php echo $row["email"]?>" disabled/>
                                            </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Password</label>
                                            <div class="col-lg-10">
                                                <button type="submit" class="btn btn-compose" name="resetpass" id="resetpass">Reset Password</button>
                                            </div>
                                        </div>
                                        

                                        <!-- Buttons -->
                                        <div class="form-group">
                                            <!-- Buttons -->
                                            <div class="col-lg-offset-2 col-lg-9">
                                                <button type="submit" class="btn btn-danger" name="submit" id="submit">Save</button>
                                                <button type="cancel" class="btn btn-default" name="cancel">Cancel</button>
                                            </div>
                                        </div>

                                        <!-- Error Massage -->
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-9">
                                                <span>
                                                    <h5>
                                                        <?php
                                                        if(isset($name_product_error)) echo $name_product_error;
                                                        if(isset($quantity_error)) echo $quantity_error;
                                                        if(isset($price_error)) echo $price_error;
                                                        if(isset($manufacturer_error)) echo $manufacturer_error;

                                                        if(isset($msg)) echo $msg;
                                                        ?>
                                                    </h5>
                                                 </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </form>
                            </div>
                            <div class="widget-foot">
                                <!-- Footer goes here -->
                            </div>
                        </div>
                    </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
<!-- container section end -->
<!-- javascripts -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- nicescroll -->
<script src="../js/jquery.scrollTo.min.js"></script>
<script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="../js/scripts.js"></script>


</body>
</html>
