<?php
    include_once("../overfile/connect.php");
	require_once("../models/Setting.php");
    
    if(isset($_POST["submit"])){
		$name_product = ["name_product"];
		$name_product = trim($name_product);
		$quantity = $_POST["quantity"];
		$price = $_POST["price"];
        $manufacturer = ["manufacturer"];
        $day = $_POST["day"];
        $screen = ["screen"];
        $screen = trim($screen);
        $cpu = ["cpu"];
        $cpu = trim($cpu);
        $ram = ["ram"];
        $ram = trim($ram);
        $vga = ["vga"];
        $vga = trim($vga);
        $hdh = ["hdh"];
        $hdh = trim($hdh);
        $pin = ["pin"];
        $pin = trim($pin);
        $hd = ["hd"];
        $hd = trim($hd);
        $description = ["description"];



        
        $file_name= $_FILES['file']['name'];
		$file_type= $_FILES['file']['type'];
		$file_size= $_FILES['file']['size'];
		$file_tmp_name= $_FILES['file']['tmp_name'];
		
		$file1_name = $_FILES['file1']['name'];
		$file1_type = $_FILES['file1']['type'];
		$file1_size = $_FILES['file1']['size'];
		$file1_tmp_name = $_FILES['file1']['tmp_name'];
		
		$file2_name = $_FILES['file2']['name'];
		$file2_type = $_FILES['file2']['type'];
		$file2_size = $_FILES['file2']['size'];
		$file2_tmp_name = $_FILES['file2']['tmp_name'];
        
        $file3_name = $_FILES['file3']['name'];
		$file3_type = $_FILES['file3']['type'];
		$file3_size = $_FILES['file3']['size'];
		$file3_tmp_name = $_FILES['file3']['tmp_name'];
		
		$check = true;
        
        if($file_name == ''){
			echo"<script>alert('Please select an Image')</script>";
			$check = false;
		}else move_uploaded_file($file_tmp_name,"../images/$file_name");
		if($file1_name == ''){
			echo"<script>alert('Please select an Image')</script>";
            $check = false;
		}else move_uploaded_file($file1_tmp_name,"../images/$file1_name");
		if($file2_name == ''){
			echo"<script>alert('Please select an Image')</script>";
            $check = false;
		}else move_uploaded_file($file2_tmp_name,"../images/$file2_name");
        if($file3_name == ''){
			echo"<script>alert('Please select an Image')</script>";
            $check = false;
		}else move_uploaded_file($file3_tmp_name,"../images/$file3_name");
        
        if(strlen($name_product) == 0){
			$name_product_error = "Please Enter Name <br>";
			$check = false;
		}
		if(strlen($quantity) == 0){
			$quantity_error = "Please Enter Quantity <br>";
			$check = false;
		}
        if(strlen($price) == 0){
			$price_error = "Please Enter Price <br>";
			$check = false;
		}
        if(strlen($manufacturer) == 0){
			$manufacturer_error = "Please Enter Manufacturer <br>";
			$check = false;
		}
        if($check){
			$query="INSERT INTO product(name_product,quantity,price,id_mf,day,screen,cpu,ram,vga,hdh,pin,hd,description,image,image1,image2,imageqc)
				VALUES('$name_product','$quantity','$price','$manufacturer','$day','$screen','$cpu','$ram','$vga','$hdh','$pin','$hd','$description','$file_name','$file1_name','$file2_name','$file3_name')";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
			if($result){
				$msg = "Success";
                echo '<meta http-equiv="refresh" content="0;url=../index.php?url=product" />';
			}
		}
    }else if(isset($_POST["cancel"])){
        header ('Location: ../index.php?url=product');
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
    <script src="../js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="../js/lte-ie7.js"></script>
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
        <?php include "../overfile/menu2.php" ?>
    </aside>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> New Product</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
                        <li><i class="fa fa-table"></i><a href="../index.php?url=product">Manager Product</a></li>
                        <li><i class="fa fa-th-list"></i>Update Product</li>
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
                            <div class="pull-left">Input New Product</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">
                            <form name="form-admin-newproduct" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                    <form class="form-horizontal">
                                    
                                        <!-- Manufacturer -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Manufacturer</label>
                                            <div class="col-lg-12">
                                               <select name="manufacturer" id="manufacturer">
                    								<?php
                    									$query= "SELECT * FROM manufacturer";
                    									$result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                    									while($row= mysqli_fetch_assoc($result)){
             									              $id_mf= $row['id_mf'];
                    										$name_mf= $row['name_mf'];
                    								?>
                    								<option value="<?php echo $id_mf;?>"><?php echo $name_mf;?></option>
                    								<?php
                    									}
                    								?>
                    							</select>
                                            </div>
                                        </div>
                                        <!-- Date Improve -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Time Improve</label>
                                            <div class="col-lg-12">
                                                <input type="date" name="day"/>
                                            </div>
                                        </div>
                                        <!-- Images -->
                                        <p>
                							<label>Enter img: <input type="file" name="file"/></label>
                							<label>Enter img1: <input type="file" name="file1"/></label>
                							<label>Enter img2: <input type="file" name="file2"/></label>
                                            <label>Enter imgqc: <input type="file" name="file3"/></label>
                						</p>
                                        <!-- Name Product -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Name Product</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter Name Product" name="name_product" class="form-control" id="name_product"/>
                                            </div>
                                        </div>
                                        <!-- Quantity -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Quantity</label>
                                            <div class="col-lg-10">
                                                <input type="number" placeholder="Enter Quantity" name="quantity" class="form-control" id="quantity" min="1"/>
                                            </div>
                                        </div>
                                        <!-- Price -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Price</label>
                                            <div class="col-lg-10">
                                                <input type="number" placeholder="Enter Price" name="price" class="form-control" id="price" step="0.01" min="0"/>
                                            </div>
                                        </div>
                                        <!-- Screen -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Screen</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter Screen" name="screen" class="form-control" id="screen"/>
                                            </div>
                                        </div>
                                        <!-- CPU -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">CPU</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter CPU" name="cpu" class="form-control" id="cpu"/>
                                            </div>
                                        </div>
                                        <!-- RAM -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">RAM</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter RAM" name="ram" class="form-control" id="ram"/>
                                            </div>
                                        </div>
                                        <!-- VGA -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">VGA</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter VGA" name="vga" class="form-control" id="vga"/>
                                            </div>
                                        </div>
                                        <!-- OS -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">OS</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter HDH" name="hdh" class="form-control" id="hdh"/>
                                            </div>
                                        </div>
                                        <!-- HDD -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">HDD/SSD</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter HDD" name="hd" class="form-control" id="hd"/>
                                            </div>
                                        </div>
                                        <!-- PIN -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">BATERRY</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter PIN" name="pin" class="form-control" id="pin"/>
                                            </div>
                                        </div>
                                        <!-- Decription -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Decription</label>
                                            <div class="col-lg-10">
                                                <textarea name="description" value="" rows="10" cols="130" class="input-medium" id="description"></textarea>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="form-group">
                                            <!-- Buttons -->
                                            <div class="col-lg-offset-2 col-lg-9">
                                                <button type="submit" class="btn btn-danger" name="submit" id="submit">Add</button>
                                                <button type="cancel" class="btn btn-default" name="cancel" id="cancel">Cancel</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-9">
                                                <span style="color: red">
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
