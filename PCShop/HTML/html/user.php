<?php 
    include "overfile/connect.php";
    $id_ca 	   =  isset($_SESSION["user-id"]) ? $_SESSION["user-id"] : "";
    $user_name =  isset($_SESSION["user-name"]) ? $_SESSION["user-name"] : "";
    $email     =  isset($_SESSION["user-email"]) ? $_SESSION["user-email"] : "";
    $pass 	   =  isset($_SESSION["user-pass"]) ? $_SESSION["user-pass"] : "";
    $query     = "SELECT * FROM customer WHERE id_ca='$id_ca'";
    $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
    $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);  
?>
<form action="index.php?url=user" method="post" enctype="multipart/form-data">
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li class='active'>User</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-bd">
    <div class="container">
        <div class="sign-in-page inner-bottom-sm">
            <div class="row">
                <!-- Form image,upload -->

                    <div class="col-md-6 col-sm-6 sign-in">
                            <p class="outer-top-xs">Avatar</p>
                            <div>
                                <img src="<?php echo '../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'';?>" style="width:270px;height:324px"/>
                            </div>
                    </div>

                <!-- Form image,upload end-->

                <!-- Form edit account -->
                
                    <div class="col-md-6 col-sm-6 create-new-account">
                        <h4 class="checkout-subtitle"><a href="index.php?url=edit_user">Edit My Account</a> | <a href="index.php?url=security">Change Password</a></h4>
                        <p class="text title-tag-line">Fill the form and click save.</p>
                        
                            <b>Customer Type: </b><em><?php 
                                if($row["cus_type"] == 1){
                                    echo 'VIP';
                                }else echo 'Nomal';
                            ?></em>
                            <!--<h5>User Name</h5>
                            <input type="text" class="form-control unicase-form-control text-input" value="<?php //echo $user_name?>" disabled/>-->
                            <h5>Email</h5>
                            <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $email?>" disabled/>
                            <h5>Password</h5>
                            <input type="password" class="form-control unicase-form-control text-input" value="<?php echo $pass?>" disabled/>
                            <h5>My name</h5>
                            <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row["cus_name"]?>" name="cus_name" disabled/>
                            <h5>Phone</h5>
                            <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row["phone"]?>" name="phone" disabled/>
                            <h5>Address</h5>
                            <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row["address"]?>" name="address" disabled/>
                                <div>
                                    <?php 
        								if(isset($msg)) echo $msg;
        							?>
                                </div>
                       </div>
                       
                    </div>
                <!-- Form edit account end -->            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
    </div><!-- /.container -->
</div><!-- /.body-content -->
</form>