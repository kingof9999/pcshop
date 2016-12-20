<?php 
    include "overfile/connect.php";
    $id_ca 	   =  isset($_SESSION["user-id"]) ? $_SESSION["user-id"] : "";
    $email     =  isset($_SESSION["user-email"]) ? $_SESSION["user-email"] : "";
    $pass 	   =  isset($_SESSION["user-pass"]) ? $_SESSION["user-pass"] : "";
    $query     = "SELECT * FROM customer WHERE id_ca='$id_ca'";
    $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
    $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if(isset($_POST["submit"])){
        $password = $_POST["password"];
        $old_password = $_POST["old_password"];
        $cfpassword = $_POST["cfpassword"];
        
        
        $check = true;
        
        /*if($pass == $password && $password != $old_password){
            if($check){
    			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
                $query="UPDATE customer_account SET password='$password'
                        WHERE id_ca='$id_ca'";
    			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
                if($result){
    				$msg = "Success";
    			}
            }
        }*/
        if($old_password != $pass){
            $msg1 = "Old password is Incorrect!";
        }else if($password == $old_password){
            $msg2 = "New password mush diffenent with the old one!";
        }else if($password == $cfpassword){
            if($check){
    			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
                $query="UPDATE customer_account SET password='$password'
                        WHERE id_ca='$id_ca'";
    			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
                if($result){
    				$msg = "Success";
    			}
            }
        }else if($password != $cfpassword){
            $msg3 = "New password and Confirm password is not Match!";
        }
    }
    
?>
<form action="index.php?url=security" method="post" enctype="multipart/form-data">
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>User</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<form name="form-user-detail" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
<div class="body-content outer-top-bd">
    <div class="container">
        <div class="sign-in-page inner-bottom-sm">
            <div class="row">
               <!-- Form edit account -->
                <div class="col-md-6 col-sm-6 create-new-account">
                    <h4 class="checkout-subtitle"><a href="index.php?url=user">Edit My Account</a> | <a href="index.php?url=security">Change Password</a></h4>
                    <p class="text title-tag-line">Fill the form and click save.</p>
                        <h5>Your password:</h5>
                        <input pattern="[a-zA-Z0-9@_ .]{6,}" title="Password must have at least 6 characters and not have special characters" type="text" class="form-control unicase-form-control text-input" value="" name="old_password"/>
                        <h5>New Password</h5>
                        <input pattern="[a-zA-Z0-9@_ .]{6,}" title="Password must have at least 6 characters and not have special characters" type="text" class="form-control unicase-form-control text-input" value="" name="password"/>
                        <h5>Confirm New Password</h5>
                        <input pattern="[a-zA-Z0-9@_ .]{6,}" title="Password must have at least 6 characters and not have special characters" type="text" class="form-control unicase-form-control text-input" value="" name="cfpassword"/>
                            <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-info outer-top-xs"/>
                            <div>
                                <?php 
    								if(isset($msg)) echo $msg;
                                    if(isset($msg1)) echo $msg1;
                                    if(isset($msg2)) echo $msg2;
                                    if(isset($msg3)) echo $msg3;
    							?>
                            </div>
                        </div>
                   
                </div>
                <!-- Form edit account end -->            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
    </div><!-- /.container -->
    </form> 
</div><!-- /.body-content -->
</form>