<?php
    include_once ("../overfile/connect.php");
    require_once("../models2/Setting.php");
    
    $userid = $_GET["id"];
	$query = "SELECT * FROM product WHERE id_product='$userid'";
	$result = mysqli_query($con,$query) or die("Loi truy van: ".mysqli_error($con));
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if(isset($_POST["submit"])){
		$name_product_as = $_POST["name_product_as"];
		$name_product_as = trim($name_product_as);
		$quantity = $_POST["quantity"];
		$price = $_POST["price"];
        $id_as = $_POST["id_as"];
        $day = $_POST["day"];
        $description = $_POST["description"];
		
		$check = true;

        if(strlen($name_product_as) == 0 || strlen($quantity) == 0 || strlen($price) == 0 ||strlen($day) == 0){
            $name_product_as_error = "Please Fultill All of Product Accessories <br>";
            $check = false;
        }
        if($check){
			$query="UPDATE product_assosi SET name_product_as='$name_product_as',quantity='$quantity',price='$price',id_as='$id_as',description='$description',day='$day'
                    WHERE id_product_as='$userid'";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
			if($result){
				$msg = "Success";
                header ('Location: ../index.php?url=accessories_product');
			}
		}
    }else if(isset($_POST["cancel"])){
        header ('Location: ../index.php?url=accessories_product');
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
                    <h3 class="page-header"><i class="fa fa-table"></i> Update Accessosires Product</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
                        <li><i class="fa fa-table"></i><a href="../index.php?url=accessories_product">Manager Accessosires</a></li>
                        <li><i class="fa fa-th-list"></i>Update Accessosires Product</li>
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
                            <div class="pull-left">Update Accessosires Product <?php echo $userid;?></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">
                            <form name="form-admin-newproduct" action="update_product_as.php?id=<?php echo $userid?>" method="post" enctype="multipart/form-data">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                    <form class="form-horizontal">
                                        <!-- Manufacturer -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Accessosires</label>
                                            <div class="col-lg-12">
                                               <select name="id_as" id="id_as">
                    								<?php
                    									$query= "SELECT * FROM accessories";
                    									$result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                    									while($row= mysqli_fetch_assoc($result)){
             									              $id_as= $row['id_as'];
                    										$name_as= $row['name_as'];
                    								?>
                    								<option value="<?php echo $id_as;?>"><?php echo $name_as;?></option>
                    								<?php
                    									}
                                                        $userid = $_GET["id"];
                                                    	$query = "SELECT * FROM product_assosi WHERE id_product_as='$userid'";
                                                    	$result = mysqli_query($con,$query) or die("Loi truy van: ".mysqli_error($con));
                                                    	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    								?>
                    							</select>
                                            </div>
                                        </div>
                                        <!-- Date Improve -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Time Improve</label>
                                            <div class="col-lg-12">
                                                <input type="date" name="day" value="<?php echo $row["day"]?>"/>
                                            </div>
                                        </div>
                                        <!-- Name Product -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Name Product</label>
                                            <div class="col-lg-10">
                                                <input pattern="[a-zA-Z0-9- ]+" type="text" placeholder="Enter Name Product" name="name_product_as" class="form-control" id="name_product_as" value="<?php echo $row["name_product_as"]?>"/>
                                            </div>
                                        </div>
                                        <!-- Quantity -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Quantity</label>
                                            <div class="col-lg-10">
                                                <input type="number" placeholder="Enter Quantity" name="quantity" class="form-control" id="quantity" value="<?php echo $row["quantity"]?>" min="1"/>
                                            </div>
                                        </div>
                                        <!-- Price -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Price</label>
                                            <div class="col-lg-10">
                                                <input type="number" placeholder="Enter Price" name="price" class="form-control" id="price" value="<?php echo $row["price"]?>" step="0.01" min="0"/>
                                            </div>
                                        </div>
                                        <!-- Decription -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Decription</label>
                                            <div class="col-lg-10">
                                                <textarea name="description" rows="10" cols="100" class="input-medium" id="description"><?php echo $row["description"]?></textarea>
                                            </div>
                                        </div>
                                        <div>
                                            
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
                                                <span style="color: red">
                                                    <h5>
                                                        <?php
                                                        if(isset($name_product_as_error)) echo $name_product_as_error;
                                                        if(isset($quantity_error)) echo $quantity_error;
                                                        if(isset($price_error)) echo $price_error;
                                                        if(isset($day_error)) echo $day_error;


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
