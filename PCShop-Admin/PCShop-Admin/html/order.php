<?php
    include_once("overfile/connect.php");
	require_once("models/Setting.php");
?>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <form name="form-admin-product" action="index.php?url=order" method="post">
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
                                               <input type="number" class="form-control" id="title" name="id_order" min="0"/>
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
                            Order Management
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
                                                    <td>
                                                        <a href="action/customer_detail.php?id='.$row["id_customer"].'">'.$row["id_customer"].' (Customer Detail)</a>
                                                    </td>
                                                    <td>'.$row["amount"].'</td>
                                                    <td>
                                                        <a class="" href="action/edit_order.php?id='.$row["id_order"].'">'.$status.'</a>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary" href="action/order_detail.php?id='.$row["id_order"].'"><i class="icon_plus_alt2"></i>More Detail</a>
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
