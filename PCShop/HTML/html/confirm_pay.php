<?php
    require ("overfile/connect.php");
    $query     = "SELECT MAX(id_customer) AS id_custom FROM customer";
    $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
    $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $id_customers = $row["id_custom"] + 1;
    $email     =  isset($_SESSION["user-email"]) ? $_SESSION["user-email"] : "";
    $idcustomer	   =  isset($_SESSION["user-id"]) ? $_SESSION["user-id"] : "";
    if($email == ''){
        $check = false;
    }else{
        $check = true;
    }
    if($check == false){
        if(isset($_POST["submit"])){
            $email = $_POST["email"];
            $cus_name = $_POST["cus_name"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            
            $check_info = true;
            
            if(strlen($email) == 0){
				$email_error = "Please enter your email! <br>";
				$check_info = false;
			}
            if(strlen($cus_name) == 0){
				$cus_name_error = "Please enter your name! <br>";
				$check_info = false;
			}
            if(strlen($phone) == 0){
				$phone_error = "Please enter your phone! <br>";
				$check_info = false;
			}
            if(strlen($address) == 0){
				$address_error = "Please enter your address! <br>";
				$check_info = false;
			}
            if($check_info){
                    $query     = "SELECT MAX(id_order) AS id_order FROM orders";
                    $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
                    $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $id_order = $row["id_order"] + 1;
                    
					$query="INSERT INTO customer(id_customer,email,cus_type,phone,address,cus_name)
						VALUES('$id_customers','$email',4,'$phone','$address','$cus_name')";
                    $query2="INSERT INTO orders(id_order,id_customer,amount,status)
						VALUES('$id_order','$id_customers','$_SESSION[tongtien]',3)";
                    foreach($_SESSION['cart'] as $masp=>$soluong){
                        $query3="INSERT INTO order_detail(id_product,id_order,number)
						VALUES('$masp','$id_order','$soluong')";
                        $result3 = mysqli_query($con,$query3)or die("Error: ".mysqli_error($con));
                    }
					$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
                    $result2 = mysqli_query($con,$query2)or die("Error: ".mysqli_error($con));
                    unset($_SESSION['cart']);
                    if($result && $result2 && $result3){
                        echo '<meta http-equiv="refresh" content="1;url=index.php?url=success_pay" />';
                    }
			}
        }
        echo '
            <form name="confirm_pay" action="index.php?url=confirm_pay" method="post">
                <div class="col-md-offset-3 col-sm-6 create-new-account">
                    <p class="text title-tag-line">Pay for your Product! Please enter the information below.</p>  
                    <h5>Email</h5>
                    <input type="text" class="form-control unicase-form-control text-input" value="" name="email"/>
                    <h5>Your name</h5>
                    <input type="text" class="form-control unicase-form-control text-input" value="" name="cus_name"/>
                    <h5>Phone</h5>
                    <input type="text" class="form-control unicase-form-control text-input" value="" name="phone"/>
                    <h5>Address</h5>
                    <input type="text" class="form-control unicase-form-control text-input" value="" name="address"/>
                    <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-info outer-top-xs"/>
                </div>
            </form>
        ';
    }else{
        $query     = "SELECT MAX(id_order) AS id_order FROM orders";
        $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
        $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $id_order = $row["id_order"] + 1;
        $query2="INSERT INTO orders(id_order,id_customer,amount,status)
			VALUES('$id_order','$idcustomer','$_SESSION[tongtien]',3)";
        foreach($_SESSION['cart'] as $masp=>$soluong){
        $query3="INSERT INTO order_detail(id_product,id_order,number)
			VALUES('$masp','$id_order','$soluong')";
        $result3 = mysqli_query($con,$query3)or die("Error: ".mysqli_error($con));
        }
		$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
        $result2 = mysqli_query($con,$query2)or die("Error: ".mysqli_error($con));
        if($_SESSION['cart'] == ""){
            echo '
                <script>
                   alert("Please but at least 1 item!");
                </script>
                <meta http-equiv="refresh" content="0;url=index.php?url=home" />
            ';
        }else{
            unset($_SESSION['cart']);
            echo '
                <!--<form name="confirm_pay" action="https://www.nganluong.vn/button_payment.php" method="post">
                    <input type=hidden name=receiver value="'.$email.'" />
                    <input type=hidden name=product_name value="'.$id_order.'" />
                    <input type=hidden name=price value="'.$_SESSION['tongtien'].'" />
                    <input type=hidden name=return_url value="index.php?url=home" />
                    <input type=hidden name=comments value="Comments" />
                    <input type=image src="https://www.nganluong.vn/data/images/buttons/11.gif" />
                </form>-->
                <div class="confirm-pay col-sm-offset-4">
                    <div class="col-md-offset-3 col-sm-6 create-new-account">
                            <p class="text title-tag-line">Pay for your Product! Please confirm.</p>            
                            <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=lequangtin95@gmail.com&product_name='.$id_order.'&price='.$_SESSION['tongtien'].'&return_url=index.php?url=home&comments=Comments"><img src="https://www.nganluong.vn/css/newhome/img/button/pay-lg.png"border="0" /></a>
                    </div>
                </div>
            ';
        }
    }
?>


    