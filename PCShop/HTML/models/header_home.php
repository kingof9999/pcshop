<?php
    class Setting{
        static function headerHome(){
            session_start();
            include_once("overfile/connect.php");
            $email     =  isset($_SESSION["user-email"]) ? $_SESSION["user-email"] : "";
            $pass 	   =  isset($_SESSION["user-pass"]) ? $_SESSION["user-pass"] : "";
            $idcustomer	   =  isset($_SESSION["user-id"]) ? $_SESSION["user-id"] : "";
            $query     = "SELECT * FROM customer_account WHERE email='$email' AND password='$pass'";
            $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
            $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($email == "")
            {
                echo $email;
                echo '
                <div class="top-bar animate-dropdown">
                	<div class="container">
                		<div class="header-top-inner">
                			<div class="cnt-account">
                				<ul class="list-unstyled">
                					Not a Member?<a href="register.php"> Click Here</a>
                					<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
                				</ul>
                			</div><!-- /.cnt-account -->
                
                			<div class="cnt-block">
                				<!--<ul class="list-unstyled list-inline">
                					<li class="dropdown dropdown-small">
                						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                						<ul class="dropdown-menu">
                							<li><a href="#">VÁS</a></li>
                							<li><a href="#">VND</a></li>
                							<li><a href="#">EUR</a></li>
                						</ul>
                					</li>
                
                					<li class="dropdown dropdown-small">
                						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                						<ul class="dropdown-menu">
                							<li><a href="#">English</a></li>
                							<li><a href="#">Vietnamese</a></li>
                						</ul>
                					</li>
                				</ul>--><!-- /.list-unstyled -->
                			</div><!-- /.cnt-cart -->
                			<div class="clearfix"></div>
                		</div><!-- /.header-top-inner -->
                	</div><!-- /.container -->
                </div><!-- /.header-top -->
            ';
            }else{
                echo '
                <div class="top-bar animate-dropdown">
                	<div class="container">
                		<div class="header-top-inner">
                			<div class="cnt-account">
                				<ul class="list-unstyled">
                					<li><a href="index.php?url=user"><i class="icon fa fa-user"></i>'.$email.'</a></li>
                					<li><a href="index.php?url=shopping-cart"><i class="icon fa fa-shopping-cart"></i>Cart</a></li>
                					<li><a href="checkout.php"><i class="icon fa fa-key"></i>Checkout</a></li>
                					<li><a href="models/sign-out.php"><i class="icon fa fa-sign-in"></i>Logout</a></li>
                				</ul>
                			</div><!-- /.cnt-account -->
                
                			<div class="cnt-block">
                				<!--<ul class="list-unstyled list-inline">
                					<li class="dropdown dropdown-small">
                						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                						<ul class="dropdown-menu">
                							<li><a href="#"></a></li>
                							<li><a href="#">VND</a></li>
                							<li><a href="#">EUR</a></li>
                						</ul>
                					</li>
                
                					<li class="dropdown dropdown-small">
                						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                						<ul class="dropdown-menu">
                							<li><a href="#">English</a></li>
                							<li><a href="#">Vietnamese</a></li>
                						</ul>
                					</li>
                				</ul>--><!-- /.list-unstyled -->
                			</div><!-- /.cnt-cart -->
                			<div class="clearfix"></div>
                		</div><!-- /.header-top-inner -->
                	</div><!-- /.container -->
                </div><!-- /.header-top -->
            ';
            }
            
        }
    }
?>