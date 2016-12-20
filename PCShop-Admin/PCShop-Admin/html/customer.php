<?php
    include_once ("overfile/connect.php");
	require_once("models/Setting.php");
?>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <form name="form-admin-product" action="index.php?url=customer" method="post">
            <div class="row">
                <div class="col-md-6 portlets">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-left">Search</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">

                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                        <!-- Title -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Find By</label><br />
                                            <div class="col-lg-10">
                                               <?php 
                                    				echo '<select name="trangthai" class="trangthai">
                                    					<option value="">--Find What--</option>';
                                    				$arr_loai = array ('1'=>'Name','2'=>'Email','3'=>'Phone');
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
                                        <br />
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Search</label>
                                            <div class="col-lg-10">
                                               <input type="text" class="form-control" id="title" name="text"/>
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
                            Customer Management
                        </header>
                            <?php 
                               if(isset($_POST["btn_search"])){
                                    $trangthai 	 = $_POST["trangthai"];
                                    $text = $_POST["text"];
                                    $text = trim($text);
                                    if($trangthai == 1){
                                        $query = "SELECT c.id_ca,c.cus_type,c.phone,c.address,c.cus_name,ca.email,ca.user_name,ca.status,ca.password,ca.id_ca 
                                                    FROM customer c,customer_account ca WHERE ca.id_ca=c.id_ca AND c.cus_name LIKE '%$text%'";
                                        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                        $num 	= mysqli_num_rows($result);
                                        if($num == 0){
                                            echo '
                                                <span style="color: red">
                                                    The Customer does not exist!
                                                </span>
                                            ';
                                        }else{
                                            echo'
                                                <table class="table table-striped table-advance table-hover">
                                                <tbody>
                                                    <tr>
                                                      <th><i class=""></i> ID</th>
                                                      <th><i class=""></i> Name</th>
                                                      <th><i class=""></i> Email</th>
                                                      <th><i class=""></i> Password</th>
                                                      <th><i class=""></i> Status</th>
                                                      <th><i class=""></i> Cus_Type</th>
                                                      <th><i class=""></i> Phone</th>
                                                      <th><i class=""></i> Address</th>
                                                      <th><i class=""></i> User Name</th>
                                                      <th><i class="icon_cogs"></i> Action</th>
                                                    </tr>
                                                ';
                                                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                        if($row["cus_type"] == 1){
                                                            $cus_type = "VIP";
                                                        }else if($row["cus_type"] == 2){
                                                            $cus_type = "Normal";
                                                        }
                                                        if($row["status"] == 1){
                                                            $status = "Admin";
                                                        }else if($row["status"] == 2){
                                                            $status = "Customer";
                                                        }else if($row["status"] == 3){
                                                            $status = "New Customer";
                                                        }
                                                        echo'
                                                        <tr>
                                                            <td>'.$row["id_ca"].'</td>
                                                            <td>'.$row["cus_name"].'</td>
                                                            <td>'.$row["email"].'</td>
                                                            <td>'.$row["password"].'</td>
                                                            <td>'.$status.'</td>
                                                            <td>'.$cus_type.'</td>
                                                            <td>'.$row["phone"].'</td>
                                                            <td>'.$row["address"].'</td>
                                                            <td>'.$row["user_name"].'</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-primary" href="action/update_customer.php?id='.$row["id_ca"].'"><i class="icon_plus_alt2"></i></a>
                                                                    <a class="btn btn-danger" href="action/delete_customer.php?id='.$row["id_ca"].'"><i class="icon_close_alt2"></i></a>
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
                                    }else if($trangthai == 2){
                                        $query = "SELECT c.id_ca,c.cus_type,c.phone,c.address,c.cus_name,ca.email,ca.user_name,ca.status,ca.password,ca.id_ca 
                                                    FROM customer c,customer_account ca WHERE ca.id_ca=c.id_ca AND ca.email LIKE '%$text%'";
                                        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                        $num 	= mysqli_num_rows($result);
                                        if($num == 0){
                                            echo '
                                                <span style="color: red">
                                                    The Customer does not exist!
                                                </span>
                                            ';
                                        }else {
                                            echo '
                                            <table class="table table-striped table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                  <th><i class=""></i> ID</th>
                                                  <th><i class=""></i> Name</th>
                                                  <th><i class=""></i> Email</th>
                                                  <th><i class=""></i> Password</th>
                                                  <th><i class=""></i> Status</th>
                                                  <th><i class=""></i> Cus_Type</th>
                                                  <th><i class=""></i> Phone</th>
                                                  <th><i class=""></i> Address</th>
                                                  <th><i class=""></i> User Name</th>
                                                  <th><i class="icon_cogs"></i> Action</th>
                                                </tr>
                                            ';
                                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                if($row["cus_type"] == 1){
                                                    $cus_type = "VIP";
                                                }else if($row["cus_type"] == 2){
                                                    $cus_type = "Normal";
                                                }
                                                if($row["status"] == 1){
                                                    $status = "Admin";
                                                }else if($row["status"] == 2){
                                                    $status = "Customer";
                                                }else if($row["status"] == 3){
                                                    $status = "New Customer";
                                                }
                                                echo '
                                                    <tr>
                                                        <td>' . $row["id_ca"] . '</td>
                                                        <td>' . $row["cus_name"] . '</td>
                                                        <td>' . $row["email"] . '</td>
                                                        <td>' . $row["password"] . '</td>
                                                        <td>' . $status . '</td>
                                                        <td>' . $cus_type . '</td>
                                                        <td>' . $row["phone"] . '</td>
                                                        <td>' . $row["address"] . '</td>
                                                        <td>' . $row["user_name"] . '</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a class="btn btn-primary" href="action/update_customer.php?id=' . $row["id_ca"] . '"><i class="icon_plus_alt2"></i></a>
                                                                <a class="btn btn-danger" href="action/delete_customer.php?id=' . $row["id_ca"] . '"><i class="icon_close_alt2"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            ';
                                            }
                                            echo '
                                                </tbody>
                                                </table>
                                            ';
                                        }
                                    }else if($trangthai == 3){
                                        $query = "SELECT c.id_ca,c.cus_type,c.phone,c.address,c.cus_name,ca.email,ca.user_name,ca.status,ca.password,ca.id_ca 
                                                    FROM customer c,customer_account ca WHERE ca.id_ca=c.id_ca AND c.phone LIKE '%$text%'";
                                        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                        $num 	= mysqli_num_rows($result);
                                        if($num == 0){
                                            echo '
                                                <span style="color: red">
                                                    The Customer does not exist!
                                                </span>
                                            ';
                                        }else {
                                            echo '
                                            <table class="table table-striped table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                  <th><i class=""></i> ID</th>
                                                  <th><i class=""></i> Name</th>
                                                  <th><i class=""></i> Email</th>
                                                  <th><i class=""></i> Password</th>
                                                  <th><i class=""></i> Status</th>
                                                  <th><i class=""></i> Cus_Type</th>
                                                  <th><i class=""></i> Phone</th>
                                                  <th><i class=""></i> Address</th>
                                                  <th><i class=""></i> User Name</th>
                                                  <th><i class="icon_cogs"></i> Action</th>
                                                </tr>
                                            ';
                                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                if($row["cus_type"] == 1){
                                                    $cus_type = "VIP";
                                                }else if($row["cus_type"] == 2){
                                                    $cus_type = "Normal";
                                                }
                                                if($row["status"] == 1){
                                                    $status = "Admin";
                                                }else if($row["status"] == 2){
                                                    $status = "Customer";
                                                }else if($row["status"] == 3){
                                                    $status = "New Customer";
                                                }
                                                echo '
                                                    <tr>
                                                        <td>' . $row["id_ca"] . '</td>
                                                        <td>' . $row["cus_name"] . '</td>
                                                        <td>' . $row["email"] . '</td>
                                                        <td>' . $row["password"] . '</td>
                                                        <td>' . $status . '</td>
                                                        <td>' . $cus_type . '</td>
                                                        <td>' . $row["phone"] . '</td>
                                                        <td>' . $row["address"] . '</td>
                                                        <td>' . $row["user_name"] . '</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a class="btn btn-primary" href="action/update_customer.php?id=' . $row["id_ca"] . '"><i class="icon_plus_alt2"></i></a>
                                                                <a class="btn btn-danger" href="action/delete_customer.php?id=' . $row["id_ca"] . '"><i class="icon_close_alt2"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            ';
                                            }
                                            echo '
                                                </tbody>
                                                </table>
                                            ';
                                        }
                                    }else{
                                        echo '
                                            <span style="color: red">
                                                You search by what?
                                            </span>
                                        ';
                                    }
                                }else{
                                    $result		= Setting::adminCustomer();
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
