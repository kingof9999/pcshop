<?php
    require ("overfile/connect.php");

    $checkpay = $_GET["checkpay"];

    if($checkpay == 1){
        $query     = "SELECT MAX(id_ca) AS id_custom FROM customer";
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
            echo '
            <script>
                   alert("Please login to checkout!");
            </script>
            <meta http-equiv="refresh" content="0;url=login.php" />
        ';
        }else{
            $query     = "SELECT MAX(id_order) AS id_order FROM orders";
            $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
            $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $id_order = $row["id_order"] + 1;
            $query2="INSERT INTO orders(id_order,id_customer,amount,status,payment_status)
			VALUES('$id_order','$idcustomer','$_SESSION[tongtien]',3,'Postpay Payment')";
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
                //unset($_SESSION['cart']);
                echo '
                <div class="confirm-pay col-sm-offset-4">
                    <div class="col-md-offset-3 col-sm-6 create-new-account">
                            <p class="text title-tag-line"><h3>Payment Successfull!</h3></p>   
                            <p class="text title-tag-line"><h5>Please Check Email!</h5></p> 
                    </div>
                </div>
            ';
            }
        }
    }else{
        $query     = "SELECT MAX(id_ca) AS id_custom FROM customer";
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
            echo '
            <script>
                   alert("Please login to checkout!");
            </script>
            <meta http-equiv="refresh" content="0;url=login.php" />
        ';
        }else{
            $query     = "SELECT MAX(id_order) AS id_order FROM orders";
            $result    = mysqli_query($con,$query) or die ("Error: ".mysqli_error($con));
            $row       = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $id_order = $row["id_order"] + 1;
            $query2="INSERT INTO orders(id_order,id_customer,amount,status,payment_status)
			VALUES('$id_order','$idcustomer','$_SESSION[tongtien]',3,'Ngan Luong Gateway')";
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
                //unset($_SESSION['cart']);
                echo '
                <div class="confirm-pay col-sm-offset-4">
                    <div class="col-md-offset-3 col-sm-6 create-new-account">
                            <p class="text title-tag-line">Pay for your Product! Please confirm.</p>            
                            <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=lequangtin95@gmail.com&product_name='.$id_order.'&price='.$_SESSION['tongtien'].'&return_url=index.php?url=success_pay&comments=Comments"><img src="https://www.nganluong.vn/css/newhome/img/button/pay-lg.png"border="0" /></a>
                    </div>
                </div>
            ';
            }
        }
    }

?>


    