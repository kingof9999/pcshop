<?php
    include_once("../overfile/connect.php");
	require_once("../models/Setting.php");
    if(isset($_POST["submit"])){
		$name_product_as = $_POST["name_product_as"];

		$quantity = $_POST["quantity"];
		$price = $_POST["price"];
        $id_as = ["id_as"];
        $day = $_POST["day"];
        $description = $_POST["description"];
        $file_name= $_FILES['file']['name'];
		$file_type= $_FILES['file']['type'];
		$file_size= $_FILES['file']['size'];
		$file_tmp_name= $_FILES['file']['tmp_name'];
		
		$check = true;

        if($file_name == ''){
            echo"<script>alert('Please select an Image')</script>";
            $check = false;
        }else{
            move_uploaded_file($file_tmp_name,"../images/$file_name");
        }
        if(strlen($name_product_as) == 0 || strlen($quantity) == 0 || strlen($price) == 0 ||strlen($day) == 0){
			$name_product_as_error = "Please Fultill All of Product Accessories <br>";
			$check = false;
		}
        if($check){
			$query="INSERT INTO product_assosi(name_product_as,quantity,price,id_as,day,description,image)
				VALUES('$name_product_as','$quantity','$price','$id_as','$day','$description','$file_name')";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
			if($result){
				$msg = "Success";
                header ('Location: ../index.php?url=accessories_product');
			}
		}
    }else if(isset($_POST["cancel"])){
        header ('Location: ../index.php?url=accessories_product');
    }else if(isset($_POST["test"])){
        echo"<script>alert('Please select an Image')</script>";
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
                                <span class="photo"><img alt="avatar" src="../img/avatar-mini.jpg"></span>
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
                                <span class="photo"><img alt="avatar" src="../img/avatar-mini2.jpg"></span>
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
                                <span class="photo"><img alt="avatar" src="../img/avatar-mini3.jpg"></span>
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
                                <span class="photo"><img alt="avatar" src="../img/avatar-mini4.jpg"></span>
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
                                <img alt="" src="../img/avatar-mini2.jpg">
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
                            <a href="../login.php"><i class="icon_key_alt"></i> Log Out</a>
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
        <?php include "../overfile/menu2.php" ?>
    </aside>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> Input new product accessories</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
                        <li><i class="fa fa-table"></i><a href="../index.php?url=accessories_product">Product Accessories Manager</a></li>
                        <li><i class="fa fa-th-list"></i>New Product Accessories</li>
                    </ol>
                </div>
            </div>
            <!-- page start--> 
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Input New Product Accessories
                        </header>
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="padd">
                            <form name="form-admin-newproduct" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                    <form class="form-horizontal">
                                    
                                        <!-- Manufacturer -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Accessories</label>
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
                						</p>
                                        <!-- Name Product -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Name Product</label>
                                            <div class="col-lg-10">
                                                <input pattern="[a-zA-Z0-9 ./\\,()]+" type="text" placeholder="Enter Name Product" name="name_product_as" class="form-control" id="name_product_as"/>
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
                                                <button type="cancel" class="btn btn-default" name="cancel">Cancel</button>
                                            </div>
                                        </div>
                                        <!-- Error Message -->
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-9">
                                                <span>
                                                    <h5 style="color: red">
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
