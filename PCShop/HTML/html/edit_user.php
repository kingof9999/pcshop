<?php 
    include "overfile/connect.php";
    $id_ca 	   =  isset($_SESSION["user-id"]) ? $_SESSION["user-id"] : "";
    $user_name =  isset($_SESSION["user-name"]) ? $_SESSION["user-name"] : "";
    $email     =  isset($_SESSION["user-email"]) ? $_SESSION["user-email"] : "";
    $pass 	   =  isset($_SESSION["user-pass"]) ? $_SESSION["user-pass"] : "";
    $query     = "SELECT * FROM customer WHERE id_ca='$id_ca'";
    $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
    $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if(isset($_POST["submit"])){
        $cus_name = $_POST["cus_name"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        
        $file_name= $_FILES['file']['name'];
		$file_type= $_FILES['file']['type'];
		$file_size= $_FILES['file']['size'];
		$file_tmp_name= $_FILES['file']['tmp_name'];
        
        $check = true;
        if($file_size < 1){
			echo '';
		}else move_uploaded_file($file_tmp_name,"../../PCShop-Admin/PCShop-Admin/images/$file_name");
        if($check){
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
            $query="UPDATE customer SET phone='$phone',address='$address',cus_name='$cus_name'
                    WHERE id_ca='$id_ca'";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
            if($result){
				$msg = "Success";
                echo '<meta http-equiv="refresh" content="0;url=index.php?url=user" />';
			}
		}
        
    }
    if(isset($_POST["submit2"])){
        $file_name= $_FILES['file']['name'];
		$file_type= $_FILES['file']['type'];
		$file_size= $_FILES['file']['size'];
		$file_tmp_name= $_FILES['file']['tmp_name'];
        
        $check = true;
        move_uploaded_file($file_tmp_name,"../../PCShop-Admin/PCShop-Admin/images/$file_name");
        if($check){
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
            $query="UPDATE customer SET image='$file_name'
                    WHERE id_ca='$id_ca'";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
            if($result){
				$msg = "Success";
                echo '<meta http-equiv="refresh" content="0;url=index.php?url=user" />';
			}
		}
    }
    
?>
<form action="index.php?url=edit_user" method="post" enctype="multipart/form-data">
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
                            <h5>Upload new image</h5>
                            <input type="file" name="file"/>
                            <input type="submit" value="Save" name="submit2" id="submit2" class="btn btn-info outer-top-xs"/>
                    </div>

                <!-- Form image,upload end-->
                
                <!-- Form edit account -->
                
                    <div class="col-md-6 col-sm-6 create-new-account">
                        <h4 class="checkout-subtitle"><a href="index.php?url=user">Edit My Account</a> | <a href="index.php?url=security">Change Password</a></h4>
                        <p class="text title-tag-line">Fill the form and click save.</p>
                        
                            <b>Customer Type: </b><em><?php 
                                if($row["cus_type"] == 1){
                                    echo 'VIP';
                                }else echo 'Nomal';
                            ?></em>
                            <h5>My name</h5>
                            <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row["cus_name"]?>" name="cus_name"/>
                            <h5>Phone</h5>
                            <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row["phone"]?>" name="phone"/>
                            <h5>Address</h5>
                            <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row["address"]?>" name="address"/>
                            <input type="submit" value="Save" name="submit" id="submit" class="btn btn-info outer-top-xs"/>
                                <div>
                                    <?php 
        								if(isset($msg)) echo $msg;
        							?>
                                </div>
                       </div>
                       
                    </div>
                <!-- Form edit account end -->            
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
    </div><!-- /.container -->
</div><!-- /.body-content -->
</form>