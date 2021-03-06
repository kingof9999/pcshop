<?php
    include_once ("../overfile/connect.php");
    $userid = $_GET["id"];
    if(isset($_POST["submit"])){
        $check=$_POST["status"];
        $query="UPDATE orders SET status='$check' WHERE id_order='$userid'";		
        $result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
        if($result){
				header("Location: ../index.php?url=order");
        }
    }else if(isset($_POST["cancel"])){
        header("Location: ../index.php?url=order");
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
                    <h3 class="page-header"><i class="fa fa-table"></i> Edit Status Order</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
                        <li><i class="fa fa-table"></i><a href="../index.php?url=order">Order</a></li>
                        <li><i class="fa fa-th-list"></i>Edit Status</li>
                    </ol>
                </div>
            </div>
            <!-- page start--> 
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Status
                        </header>
                        <form name="form-admin-order" action="edit_order.php?id=<?php echo $userid;?>" method="post">
                            <?php 
    							$query = "SELECT * FROM orders WHERE id_order='$userid'";
                                $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                $num 	= mysqli_num_rows($result);
                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                    if($row["status"] == 1){
                                        $status = "Order Complete";
                                    }else if($row["status"] == 2){
                                        $status = "Not Order Yet";
                                    }else if($row["status"] == 3){
                                        $status = "Incoming Order";
                                    }
                                echo '
                                    <table>
                                        <tr>
                                           <td>Edit Order</td>
                                           <td>
                                              <select name="status" id="status">
                                                 <option value="'.$row["status"].'">'.$status.'</option>
                                                 <option value="1">Order Complete</option>
                                                 <option value="2">Not Order Yet</option>
                                                 <option value="3">Incoming Order</option>
                                              </select>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td><?php $row["status"]?></td>
                                            <td>
                                                <button type="submit" class="btn btn-danger" name="submit" id="submit">Save</button>
                                                <button type="cancel" class="btn btn-default" name="cancel">Cancel</button>
                                            </td>                      
                                        </tr>
                                     </table>
                                ';
                             ?>
                        </form>
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
