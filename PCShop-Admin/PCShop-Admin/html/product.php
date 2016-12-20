<?php
    include_once ("overfile/connect.php");
	require_once("models/Setting.php");
?>
    <section id="main-content">
        <section class="wrapper">
            <form name="form-admin-product" action="index.php?url=product" method="post">
            <div class="row">
                <div class="col-md-6 portlets">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-left">Search Product</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                        <!-- Cateogry -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Manufacturer</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="id_mf">
                                                    <option value="">--Manufacturer--</option>
                                                    <?php
                    									$query= "SELECT * FROM manufacturer";
                    									$result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                    									while($row= mysqli_fetch_assoc($result)){
             									              $id_mf= $row['id_mf'];
                    										$name_mf= $row['name_mf'];
                    								?>
                    								<option value="<?php echo $id_mf;?>"><?php echo $name_mf;?></option>
                    								<?php
                    									}
                    								?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Title -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Name</label>
                                            <div class="col-lg-10">
                                               <input type="text" class="form-control" id="title" name="name_product"/>
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
                <div class="col-md-4 col-sm-offset-1 portlets">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-left">New Product</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                    <!-- Buttons -->
                                    <div class="form-group">
                                        <!-- Buttons -->
                                        <div class="col-lg-offset-4 col-lg-9">
                                            <button type="submit" class="btn btn-primary" name="new_product">New Product</button>
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
                            Product Management
                        </header>
                            <?php 
                                if(isset($_POST["btn_search"])){
                                    $id_mf = $_POST["id_mf"];
                                    if($id_mf != 0){
                                        $name_product = "";
                                        $query = "SELECT * FROM product WHERE id_mf='$id_mf'";
                                        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                        $num 	= mysqli_num_rows($result);
                                    }else{
                                       $name_product = $_POST["name_product"];
                                       $name_product = trim($name_product);
                                       $query = "SELECT * FROM product WHERE name_product LIKE '%$name_product%'";
                                        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                        $num 	= mysqli_num_rows($result);
                                    }
                                    echo'
                                        <span style="color: red">There are '.$num.' item found!</span>
                                        <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                            <tr>
                                              <th><i class=""></i> ID</th>
                                              <th><i class=""></i> Name</th>
                                              <th><i class=""></i> Quantity</th>
                                              <th><i class=""></i> Price</th>
                                              <th><i class=""></i> Screen</th>
                                              <th><i class=""></i> CPU</th>
                                              <th><i class=""></i> RAM</th>
                                              <th><i class=""></i> VGA</th>
                                              <th><i class=""></i> OS</th>
                                              <th><i class=""></i> HDD/SSD</th>
                                              <th><i class=""></i> BATERRY</th>
                                              <th><i class=""></i> Manufacturer</th>
                                              <th><i class=""></i> Date Imp Pro</th>
                                              <th><i class=""></i> Description</th>
                                              <th><i class="icon_cogs"></i> Action</th>
                                            </tr>
                                    ';
                                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                    echo'
                                            <tr>
                                                <td>'.$row["id_product"].'</td>
                                                <td>'.$row["name_product"].'</td>
                                                <td>'.$row["quantity"].'</td>
                                                <td>'.$row["price"].'</td>
                                                <td>'.substr($row["screen"],0,5).'</td>
                                                <td>'.substr($row["cpu"],0,5).'</td>
                                                <td>'.substr($row["ram"],0,5).'</td>
                                                <td>'.substr($row["vga"],0,5).'</td>
                                                <td>'.substr($row["hdh"],0,5).'</td>
                                                <td>'.substr($row["hd"],0,5).'</td>
                                                <td>'.substr($row["pin"],0,5).'</td>
                                                <td>'.$row["id_mf"].'</td>
                                                <td>'.$row["day"].'</td>
                                                <td>'.substr($row["description"],0,19).'</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary" href="action/update_product.php?id='.$row["id_product"].'"><i class="icon_plus_alt2"></i></a>
                                                        <a class="btn btn-danger" href="action/delete_product.php?id='.$row["id_product"].'"><i class="icon_close_alt2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                    ';
                                    }
                                    echo'
                                        </tbody>
                                        </table>
                                    ';
                                }else if(isset($_POST["new_product"])){
                                    echo '<meta http-equiv="refresh" content="0;url=action/input_product.php" />';
                                }else{
                                    $result		= Setting::adminProd();
                                }
    				        ?>   
                    </section>
                </div>
            </div>
            <!-- page end-->
            </form>
        </section>
    </section>
