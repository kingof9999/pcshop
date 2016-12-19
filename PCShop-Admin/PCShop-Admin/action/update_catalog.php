<?php
    include_once ("../overfile/connect.php");
    
    $userid = $_GET["id"];
	$query = "SELECT * FROM catalog WHERE id_catalog='$userid'";
	$result = mysqli_query($con,$query) or die("Loi truy van: ".mysqli_error($con));
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if(isset($_POST["submit"])){
		$name_catalog = $_POST["name_catalog"];
		$name_catalog = trim($name_catalog);
		
		$check = true;
        if(strlen($name_catalog) == 0){
			$name_catalog_error = "Please Enter Name <br>";
			$check = false;
		}
        if($check){
			$query="UPDATE catalog SET name_catalog='$name_catalog'
                    WHERE id_catalog='$userid'";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
			if($result){
				$msg = "Success";
                header ('Location: ../index.php?url=catalog');
			}
		}
    }else if(isset($_POST["cancel"])){
        header ('Location: ../index.php?url=catalog');
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
        <a href="index.php" class="logo">PC Shop <span class="lite">Admin</span></a>
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
                    <h3 class="page-header"><i class="fa fa-table"></i> Update Catalog</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
                        <li><i class="fa fa-table"></i><a href="../index.php?url=catalog">Catalog</a></li>
                        <li><i class="fa fa-th-list"></i>Update Catalog</li>
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
                            <div class="pull-left">Update Catalog <?php echo $userid?></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">
                            <form name="form-admin-newproduct" action="update_catalog.php?id=<?php echo $userid?>" method="post">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                    <form class="form-horizontal">
                                        <!-- Name Manufacturer -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Name Manufacturer</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="Enter Name Manufacturer" name="name_catalog" class="form-control" id="name_catalog" value="<?php echo $row["name_catalog"]?>"/>
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
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-9">
                                                <span style="color: red">
                                                    <h5>
                                                        <?php
                                                        if(isset($name_catalog_error)) echo $name_catalog_error;

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
