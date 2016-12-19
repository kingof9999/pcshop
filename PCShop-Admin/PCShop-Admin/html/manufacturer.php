<?php
    include_once ("overfile/connect.php");
	require_once("models/Setting.php");
    
    if(isset($_POST["add_mf"])){
        $name_mf = $_POST["name_mf"];
        $name_mf = trim($name_mf);
		$decription = $_POST["decription"];
        
        $check = true;
        if(strlen($name_mf) == 0){
			$name_mf_error = "Please Enter Name <br>";
			$check = false;
		}
        $checklengn = strlen($name_mf);
        if($checklengn < 1){
            $check = false;
        }else{
            $check = true;
        }
        if($check){
			$query="INSERT INTO manufacturer(name_mf,decription)
				VALUES('$name_mf','$decription')";
			$result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
			if($result){
				$msg = "Success";
                echo '<meta http-equiv="refresh" content="0.5;url=index.php?url=manufacturer" />';
			}
		}
    }
?>
<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <form name="form-admin-product" action="index.php?url=manufacturer" method="post">
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
                                            <label class="control-label col-lg-2" for="title">Name</label>
                                            <div class="col-lg-10">
                                               <input type="text" class="form-control" id="title" name="search_name_mf"/>
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
                <div class="col-md-6 portlets">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-left">New Manufacturer</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                        <!-- Name Manufacturer -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Name</label>
                                            <div class="col-lg-10">
                                               <input type="text" class="form-control" id="title" name="name_mf"/>
                                            </div>
                                        </div>
                                        <!-- Decription -->
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Decription</label>
                                            <div class="col-lg-10">
                                                <textarea name="decription" value="" rows="5" cols="60" class="input-medium" id="decription"></textarea>
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="form-group">
                                            <!-- Buttons -->
                                            <div class="col-lg-offset-2 col-lg-9">
                                                <button type="submit" class="btn btn-primary" name="add_mf">Add</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="widget-foot">
                                <?php 
    								if(isset($name_product_error)) echo $name_mf_error;		
    								if(isset($msg)) echo $msg;
    							?>
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
                            Manufacturer Manager
                        </header>
                            <?php 
                                if(isset($_POST["btn_search"])) {
                                    $name_mf = $_POST["search_name_mf"];
                                    $name_mf = trim($name_mf);

                                    $query = "SELECT * FROM manufacturer WHERE name_mf LIKE '%$name_mf%'";
                                    $result = mysqli_query($con, $query) or die("LOI LIET KE: " . mysqli_error($con));
                                    $num = mysqli_num_rows($result);
                                    if ($num == 0) {
                                        echo '
                                           <span style="color: red"> 
                                                No items found!
                                            </span>
                                        ';
                                    } else {
                                        echo '
                                            <table class="table table-striped table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                  <th><i class=""></i> ID</th>
                                                  <th><i class=""></i> Name</th>
                                                  <th><i class=""></i> Decription</th>
                                                  <th><i class="icon_cogs"></i> Action</th>
                                                </tr>
                                        ';
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            echo '
                                                <tr>
                                                    <td>' . $row["id_mf"] . '</td>
                                                    <td>' . $row["name_mf"] . '</td>
                                                    <td>' . substr($row["decription"], 0, 20) . '</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary" href="action/update_manufacturer.php?id=' . $row["id_mf"] . '"><i class="icon_plus_alt2"></i></a>
                                                            <a class="btn btn-danger" href="action/delete_manufacturer.php?id=' . $row["id_mf"] . '"><i class="icon_close_alt2"></i></a>
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
                                }
                                    else{
                                        $result = Setting::adminManufac();
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