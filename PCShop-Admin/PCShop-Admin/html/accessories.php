<?php
    include_once("overfile/connect.php");
	require_once("models/Setting.php");

if(isset($_POST["add_as"])){
    $name_as = $_POST["name_as"];
    $name_as = trim($name_as);
    $decription = $_POST["decription"];

    $check = true;
    if(strlen($name_as) == 0){
        $name_as_error = "Enter Name <br>";
        $check = false;
    }

    $checklengn = strlen($name_as);
    if($checklengn < 1){
        $check = false;
    }else{
        $check = true;
    }
    if($check){
        $query="INSERT INTO accessories(name_as)
				VALUES('$name_as')";
        $result = mysqli_query($con,$query)or die("Error: ".mysqli_error($con));
        if($result){
            $msg = "Success";
            echo '<meta http-equiv="refresh" content="0;url=index.php?url=accessories" />';
        }
    }
}
?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <form name="form-admin-product" action="index.php?url=accessories" method="post">
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
                                               <input type="text" class="form-control" id="title" name="name_as_search"/>
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
                            <div class="pull-left">New Accessories</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="padd">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                    <!-- Name Accessories -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="title">Name</label>
                                        <div class="col-lg-10">
                                            <input pattern="[a-zA-Z0-9- ]+" type="text" class="form-control" id="title" name="name_as"/>
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
                                            <button type="submit" class="btn btn-primary" name="add_as">Add</button>
                                             <span style="color:red;">
                                                <?php
                                                    if(isset($name_as_error)) echo $name_as_error;
                                                    if(isset($msg)) echo $msg;
                                                ?>
                                             </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-foot">

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
                            Accessories Manager
                        </header>
                            <?php 
                                if(isset($_POST["btn_search"])){
                                    $name_as = $_POST["name_as_search"];
                                    $name_as = trim($name_as);
                                    $query = "SELECT * FROM accessories WHERE name_as LIKE '%$name_as%'";
                                    $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
                                    $num 	= mysqli_num_rows($result);
                                    if($num == 0){
                                        echo '
                                                <span style="color: red"> 
                                                    No items found!
                                                </span>
                                        ';
                                    }else {
                                        echo '
                                            <table class="table table-striped table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                  <th><i class=""></i> ID</th>
                                                  <th><i class=""></i> Name</th>
                                                  <th><i class=""></i> Description</th>
                                                  <th><i class="icon_cogs"></i> Action</th>
                                                </tr>
                                        ';
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            echo '
                                                <tr>
                                                    <td>' . $row["id_as"] . '</td>
                                                    <td>' . $row["name_as"] . '</td>
                                                    <td>' . substr($row["decription"], 0, 19) . '</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary" href="action/update_accessories.php?id=' . $row["id_as"] . '"><i class="icon_plus_alt2"></i></a>
                                                            <a class="btn btn-danger" href="action/delete_accessories.php?id=' . $row["id_as"] . '"><i class="icon_close_alt2"></i></a>
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
                                    $result		= Setting::adminAccessi();
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
