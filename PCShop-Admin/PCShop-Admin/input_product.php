<?php
    include_once ("overfile/connect.php");
	require_once("models/Setting.php");
    
    if(isset($_POST["submit"])){
		$name_product = $_POST["name_product"];
		$quantity = $_POST["quantity"];
		$price = $_POST["price"];
        $manufacturer = $_POST["manufacturer"];
        $day = $_POST["day"];
        $screen = $_POST["screen"];
        $cpu = $_POST["cpu"];
        $ram = $_POST["ram"];
        $vga = $_POST["vga"];
        $hdh = $_POST["hdh"];
        $pin = $_POST["pin"];
        $description = $_POST["description"];
        
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
		}else move_uploaded_file($file_tmp_name,"images/$file_name");	
		if($file1_name == ''){
			echo"<script>alert('Please select an Image')</script>";
		}else move_uploaded_file($file1_tmp_name,"images/$file1_name");
		if($file2_name == ''){
			echo"<script>alert('Please select an Image')</script>";
		}else move_uploaded_file($file2_tmp_name,"images/$file2_name");
        if($file3_name == ''){
			echo"<script>alert('Please select an Image')</script>";
		}else move_uploaded_file($file3_tmp_name,"images/$file3_name");
        
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
			$query="INSERT INTO product(name_product,quantity,price,id_mf,day,screen,cpu,ram,vga,hdh,pin,description,image,image1,image2,imageqc)
				VALUES('$name_product','$quantity','$price','$manufacturer','$day','$screen','$cpu','$ram','$vga','$hdh','$pin','$description','$file_name','$file1_name','$file2_name','$file3_name')";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
			if($result){
				$msg = "Success";
			}
		}
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>

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
        <a href="index.php" class="logo">PC Shop <span class="lite">Admin</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- task notificatoin start -->
                <li id="task_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="icon-task-l"></span></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 5 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Design PSD</div>
                                    <div class="percent">90%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                        <span class="sr-only">90% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">
                                        Project 1
                                    </div>
                                    <div class="percent">30%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                        <span class="sr-only">30% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Digital Marketing</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Logo Designing</div>
                                    <div class="percent">78%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                        <span class="sr-only">78% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">50%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 50%">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- task notificatoin end -->
                <!-- inbox notificatoin start-->
                <li id="mail_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-l"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox notificatoin end -->
                <!-- alert notification start-->
                <li id="alert_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-l"></i>
                        <span class="badge bg-important">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 4 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="icon_profile"></i></span>
                                Friend Request
                                <span class="small italic pull-right">5 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon_pin"></i></span>
                                John location.
                                <span class="small italic pull-right">50 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                Project 3 Completed.
                                <span class="small italic pull-right">1 hr</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon_like"></i></span>
                                Mick appreciated your work.
                                <span class="small italic pull-right"> Today</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- alert notification end-->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar-mini2.jpg">
                            </span>
                        <span class="username">Thuan</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"><i class="icon_profile"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                        </li>
                        <li>
                            <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
                        </li>
                        <li>
                            <a href="documentation.php"><i class="icon_key_alt"></i> Documentation</a>
                        </li>
                        <li>
                            <a href="documentation.php"><i class="icon_key_alt"></i> Documentation</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <?php include "overfile/menu.php"?>
    </aside>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-table"></i>Table</li>
                        <li><i class="fa fa-th-list"></i>Basic Table</li>
                    </ol>
                </div>
            </div>
            <!-- page start--> 
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Input New Product
                        </header>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-left">Quick Post</div>
                            <div class="widget-icons pull-right">
                                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                            </div>
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
                                            <label class="control-label col-lg-2" for="tags">Brand</label>
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
                                            <label class="control-label col-lg-2" for="tags">Create At</label>
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
                                            <label class="control-label col-lg-2" for="content">Amount</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter Quantity" name="quantity" class="form-control" id="quantity"/>
                                            </div>
                                        </div>
                                        <!-- Price -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Price</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter Price" name="price" class="form-control" id="price"/>
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
                                        <!--HDD/SSD-->

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">HDD/SSD</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter hdd or ssd" name="hdd" class="form-control" id="hdd"/>
                                            </div>
                                        </div>

                                        <!-- HDH -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">OS</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter OS" name="hdh" class="form-control" id="hdh"/>
                                            </div>
                                        </div>
                                        <!-- PIN -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Battery</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter PIN" name="pin" class="form-control" id="pin"/>
                                            </div>
                                        </div>
                                        <!-- Decription -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Description</label>
                                            <div class="col-lg-10">
                                                <textarea name="description" value="" rows="10" cols="100" class="input-medium" id="description"></textarea>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="form-group">
                                            <!-- Buttons -->
                                            <div class="col-lg-offset-2 col-lg-9">
                                                <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-danger"/>
                                                <button type="button" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nicescroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>


</body>
</html>
