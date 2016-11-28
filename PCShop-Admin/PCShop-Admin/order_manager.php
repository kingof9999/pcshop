<?php
    include_once ("overfile/connect.php");
	require_once("models/Setting.php");
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
            <form name="form-admin-product" action="order_manager.php" method="post">
            <div class="row">
                <div class="col-md-6 portlets">
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

                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                        <!-- Cateogry -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Status</label><br />
                                            <div class="col-lg-10">
                                                    <?php 
                                    				echo '<select name="trangthai" class="trangthai">
                                    					<option value="">--Status Order--</option>';
                                    				$arr_loai = array ('1'=>'Order Complete','2'=>'Not Order Yet','3'=>'Incoming Order');
                                    				foreach($arr_loai as $value=>$display){
                                    					if(isset($_POST["trangthai"]) && $_POST["trangthai"]==$value){
                                    					echo '<option value="'.$value.'" selected="selected">'.$display.'</option>';
                                    					}
                                    					else
                                    					{
                                    					echo '<option value="'.$value.'">'.$display.'</option>';
                                    					}
                                    				}echo '</select>';
                                				    ?>
                                            </div>
                                        </div>
                                        <!-- Title -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">ID Order</label>
                                            <div class="col-lg-10">
                                               <input type="text" class="form-control" id="title" name="id_order"/>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="form-group">
                                            <!-- Buttons -->
                                            <div class="col-lg-offset-2 col-lg-9">
                                                <button type="submit" class="btn btn-primary" name="btn_search">Search</button>
                                            </div>
                                        </div>
                                </div>


                            </div>
                            <div class="widget-foot">
                                <!-- Footer goes here -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- page start--> 
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Product Manager
                        </header>
                            <?php 
                                if(isset($_POST["btn_search"])){
                                    $trangthai 	 = $_POST["trangthai"];
                                    if($trangthai != 0){
                                        if($trangthai == 1){
                                            $query = "SELECT id_customer,amount,status,id_order 
                                                        FROM orders WHERE status = 1";
                                            $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                            $num 	= mysqli_num_rows($result);
                                            echo'
                                                <table class="table table-striped table-advance table-hover">
                                                <tbody>
                                                    <tr>
                                                      <th><i class=""></i> ID Order</th>
                                                      <th><i class=""></i> ID Customer</th>
                                                      <th><i class=""></i> Amount</th>
                                                      <th><i class=""></i> Status</th>
                                                      <th><i class="icon_cogs"></i> Action</th>
                                                    </tr>
                                            ';
                                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                $row["status"] = $trangthai;
                                                $status = "Order Complete";
                                            echo'
                                                    <tr>
                                                        <td>'.$row["id_order"].'</td>
                                                        <td>'.$row["id_customer"].'</td>
                                                        <td>'.$row["amount"].'</td>
                                                        <td>
                                                            <a class="" href="action/edit_order.php?id='.$row["id_order"].'">'.$status.'</a>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a class="btn btn-primary" href="action/order_detail.php?id='.$row["id_order"].'"><i class="icon_plus_alt2"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            ';
                                            }
                                            echo'
                                                </tbody>
                                                </table>
                                            ';
                                        }else if($trangthai == 2){
                                            $query = "SELECT id_customer,amount,status,id_order 
                                                        FROM orders WHERE status = 2";
                                            $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                            $num 	= mysqli_num_rows($result);
                                            echo'
                                                <table class="table table-striped table-advance table-hover">
                                                <tbody>
                                                    <tr>
                                                      <th><i class=""></i> ID Order</th>
                                                      <th><i class=""></i> ID Customer</th>
                                                      <th><i class=""></i> Amount</th>
                                                      <th><i class=""></i> Status</th>
                                                      <th><i class="icon_cogs"></i> Action</th>
                                                    </tr>
                                            ';
                                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                $row["status"] = $trangthai;
                                                $status = "Not Order Yet";
                                            echo'
                                                    <tr>
                                                        <td>'.$row["id_order"].'</td>
                                                        <td>'.$row["id_customer"].'</td>
                                                        <td>'.$row["amount"].'</td>
                                                        <td>
                                                            <a class="" href="action/edit_order.php?id='.$row["id_order"].'">'.$status.'</a>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a class="btn btn-primary" href="action/order_detail.php?id='.$row["id_order"].'"><i class="icon_plus_alt2"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            ';
                                            }
                                            echo'
                                                </tbody>
                                                </table>
                                            ';
                                        }else if($trangthai == 3){
                                            $query = "SELECT id_customer,amount,status,id_order 
                                                        FROM orders WHERE status = 3";
                                            $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                            $num 	= mysqli_num_rows($result);
                                            echo'
                                                <table class="table table-striped table-advance table-hover">
                                                <tbody>
                                                    <tr>
                                                      <th><i class=""></i> ID Order</th>
                                                      <th><i class=""></i> ID Customer</th>
                                                      <th><i class=""></i> Amount</th>
                                                      <th><i class=""></i> Status</th>
                                                      <th><i class="icon_cogs"></i> Action</th>
                                                    </tr>
                                            ';
                                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                $row["status"] = $trangthai;
                                                $status = "Incoming Order";
                                            echo'
                                                    <tr>
                                                        <td>'.$row["id_order"].'</td>
                                                        <td>'.$row["id_customer"].'</td>
                                                        <td>'.$row["amount"].'</td>
                                                        <td>
                                                            <a class="" href="action/edit_order.php?id='.$row["id_order"].'">'.$status.'</a>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a class="btn btn-primary" href="action/order_detail.php?id='.$row["id_order"].'"><i class="icon_plus_alt2"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            ';
                                            }
                                            echo'
                                                </tbody>
                                                </table>
                                            ';
                                        }
                                    }else{
                                        $id_order = $_POST["id_order"];
                                        $query = "SELECT id_customer,amount,status,id_order 
                                                        FROM orders WHERE id_order LIKE '%$id_order%'";
                                        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                        $num 	= mysqli_num_rows($result);
                                        echo'
                                            <table class="table table-striped table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                  <th><i class=""></i> ID Order</th>
                                                  <th><i class=""></i> ID Customer</th>
                                                  <th><i class=""></i> Amount</th>
                                                  <th><i class=""></i> Status</th>
                                                  <th><i class="icon_cogs"></i> Action</th>
                                                </tr>
                                        ';
                                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                            if($row["status"] == 1){
                                                $status = "Order Complete";
                                            }else if($row["status"] == 2){
                                                $status = "Not Order Yet";
                                            }else if($row["status"] == 3){
                                                $status = "Incoming Order";
                                            }
                                        echo'
                                                <tr>
                                                    <td>'.$row["id_order"].'</td>
                                                    <td>'.$row["id_customer"].'</td>
                                                    <td>'.$row["amount"].'</td>
                                                    <td>
                                                        <!--<select name="status" id="status">
                                                            <option value="'.$row["status"].'">'.$status.'</option>
                                                            <option value="1">Order Complete</option>
                                                            <option value="2">Not Order Yet</option>
                                                            <option value="3">Incoming Order</option>
                                                        </select>-->
                                                        <a class="" href="action/edit_order.php?id='.$row["id_order"].'">'.$status.'</a>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary" href="action/order_detail.php?id='.$row["id_order"].'"><i class="icon_plus_alt2"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                        ';
                                        }
                                        echo'
                                            </tbody>
                                            </table>
                                        ';
                                    }
                                }else{
                                    $result		= Setting::adminOrder();
                                }
    				        ?>   
                    </section>
                </div>
            </div>
            <!-- page end-->
            </form>
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