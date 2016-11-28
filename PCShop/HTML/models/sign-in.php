<?php
    session_start();
    include_once("overfile/connect.php");
	if(isset($_POST["btn_login"])){
		$email	=$_POST["email"];
		$pass	=$_POST["pass"];
		$query 	="SELECT * FROM customer_account WHERE email='$email' AND password='$pass'";
		$result=mysqli_query($con,$query);
		$num	=mysqli_num_rows($result);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $id_ca = $row["id_ca"];
        $user_name = $row["user_name"];
		if($num == 0){
			$msg ='Wrong Email or Password';
		}else{
            $_SESSION["user-id"] = $id_ca;
            $_SESSION["user-name"] = $user_name;
			$_SESSION["user-email"] = $email;
			$_SESSION["user-pass"]= $pass;
			$status =$row["status"];
			if ($status == '1'){
		      header("location: ../../PCShop-Admin/PCShop-Admin/index.php");
              session_destroy();
            }
		 else{
			 header("location: index.php");
		 }
		}
	}else if(isset($_POST["btn_signup"])){
	   $email_signup = $_POST["email"];
       $password_signup = $_POST["pass"];
       $check = true;
       
       $query 	="SELECT * FROM customer_account WHERE email='$email_signup'";
	   $result=mysqli_query($con,$query);
       $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
       
       if($email_signup == $row["email"]){
        $email_signup_error1 = "Email alredy have <br/>";
        $check = false;
       }
       if(strlen($email_signup) == 0){
        $email_signup_error = "Please Enter email <br/>";
        $check = false;
       }
       if(strlen($password_signup) == 0){
        $password_signup_error = "Please Enter password <br/>";
        $check = false;
       }
       if($check){
           $query = "INSERT INTO customer_account (email,password,status)
    				VALUES('$email_signup','$password_signup',3)";
            $result = mysqli_query($con,$query);
    	       if ($result){
    				$msg1= '<p style="color:blue"> Sign Up Successed!</p>';
                }
       }
	}
    class Setting{
        static function homeSignin(){
            echo '
                <!--<div class="col-md-6 col-sm-6 sign-in">
            	<h4 class="">sign in</h4>
            	<p class="">Hello, Welcome to your account.</p>
            	<div class="social-sign-in outer-top-xs">
            		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
            		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
            	</div>
            	<form class="register-form outer-top-xs" role="form">
            		<div class="form-group">
            		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email"/>
            		</div>
            	  	<div class="form-group">
            		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
            		    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="pass"/>
            		</div>
            		<div class="radio outer-xs">
            		  	<label>
            		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" name="luu"/>Remember me!
            		  	</label>
            		  	<a href="#" class="forgot-password pull-right">Forgot your Password?</a>
            		</div>
            	  	<input id="btn-login" class="abc"type="submit" name="btn_login" value="Login"/>-->
                    
                    <div class="login-wrap">
                        <span class="pull-right"> <a href="index.php"> Home</a></span>
                        <p class="login-img">Login<i class="icon_lock_alt"></i></p>  
                        <div class="input-group">   
                            <span class="input-group-addon"><i class="icon_profile"></i></span>
                            <input type="email" class="form-control" placeholder="Email" name="email" autofocus>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="pass">
                        </div>
                        <label class="checkbox">
                            <input type="checkbox" value="remember-me"> Remember me
                            <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                            <span class="pull-right"> <a href="register.php"> New member?</a></span>
                        </label>
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn_login">Login</button>
                    </div>
            ';
        }
        static function homeSignup(){
            echo '
                <!--<div class="col-md-6 col-sm-6 sign-in">
            	<h4 class="">sign in</h4>
            	<p class="">Hello, Welcome to your account.</p>
            	<div class="social-sign-in outer-top-xs">
            		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
            		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
            	</div>
            	<form class="register-form outer-top-xs" role="form">
            		<div class="form-group">
            		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email"/>
            		</div>
            	  	<div class="form-group">
            		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
            		    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="pass"/>
            		</div>
            		<div class="radio outer-xs">
            		  	<label>
            		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" name="luu"/>Remember me!
            		  	</label>
            		  	<a href="#" class="forgot-password pull-right">Forgot your Password?</a>
            		</div>
            	  	<input id="btn-login" class="abc"type="submit" name="btn_login" value="Login"/>-->
                    
                    <div class="login-wrap">
                        <span class="pull-right"> <a href="index.php"> Home</a></span>
                        <p class="login-img">Register</i></p>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_profile"></i></span>
                            <input type="email" class="form-control" placeholder="Email" name="email" autofocus>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="pass">
                        </div>
                        <label class="checkbox">
                            <input type="checkbox" value="remember-me"> Remember me
                            <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                            <span class="pull-right"> <a href="login.php"> Alredy have account!</a></span>
                        </label>
                        <button class="btn btn-info btn-lg btn-block" type="submit" name="btn_signup">Signup</button>
                    </div>
            ';
        }
    }
        
?>