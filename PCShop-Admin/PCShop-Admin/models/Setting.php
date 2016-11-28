<?php
include_once("overfile/connect.php"); 

class Setting{
    static function adminProd(){
        global $con;
        $query = "SELECT * FROM product";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        $num 	= mysqli_num_rows($result);
        echo'
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
                  <th><i class=""></i> HDH</th>
                  <th><i class=""></i> PIN</th>
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
    }
    
    
    static function adminProdAS(){
        global $con;
        $query = "SELECT * FROM product_assosi";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        $num 	= mysqli_num_rows($result);
        echo'
            <table class="table table-striped table-advance table-hover">
            <tbody>
                <tr>
                  <th><i class=""></i> ID</th>
                  <th><i class=""></i> Name</th>
                  <th><i class=""></i> Quantity</th>
                  <th><i class=""></i> Price</th>
                  <th><i class=""></i> ID_AS</th>
                  <th><i class=""></i> Date Imp Pro</th>
                  <th><i class=""></i> Description</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
        ';
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo'
                <tr>
                    <td>'.$row["id_product_as"].'</td>
                    <td>'.$row["name_product_as"].'</td>
                    <td>'.$row["quantity"].'</td>
                    <td>'.$row["price"].'</td>
                    <td>'.$row["id_as"].'</td>
                    <td>'.$row["day"].'</td>
                    <td>'.substr($row["description"],0,19).'</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="action/update_product_as.php?id='.$row["id_product_as"].'"><i class="icon_plus_alt2"></i></a>
                            <a class="btn btn-danger" href="action/delete_product_as.php?id='.$row["id_product_as"].'"><i class="icon_close_alt2"></i></a>
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
    
    static function adminCustomer(){
        global $con;
        $query = "SELECT c.id_customer,c.id_ca,c.cus_type,c.phone,c.address,c.cus_name,ca.email,ca.user_name,ca.status,ca.password 
                    FROM customer c,customer_account ca WHERE ca.id_ca=c.id_customer";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        $num 	= mysqli_num_rows($result);
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
        echo'
                <tr>
                    <td>'.$row["id_customer"].'</td>
                    <td>'.$row["cus_name"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["password"].'</td>
                    <td>'.$row["status"].'</td>
                    <td>'.$row["cus_type"].'</td>
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
    static function adminManufac(){
        global $con;
        $query = "SELECT * FROM manufacturer";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        $num 	= mysqli_num_rows($result);
        echo'
            <table class="table table-striped table-advance table-hover">
            <tbody>
                <tr>
                  <th><i class=""></i> ID</th>
                  <th><i class=""></i> Name</th>
                  <th><i class=""></i> Decription</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
        ';
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo'
                <tr>
                    <td>'.$row["id_mf"].'</td>
                    <td>'.$row["name_mf"].'</td>
                    <td>'.substr($row["decription"],0,20).'</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="action/update_manufacturer.php?id='.$row["id_mf"].'"><i class="icon_plus_alt2"></i></a>
                            <a class="btn btn-danger" href="action/delete_manufacturer.php?id='.$row["id_mf"].'"><i class="icon_close_alt2"></i></a>
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
    static function adminCatal(){
        global $con;
        $query = "SELECT * FROM catalog";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        $num 	= mysqli_num_rows($result);
        echo'
            <table class="table table-striped table-advance table-hover">
            <tbody>
                <tr>
                  <th><i class=""></i> ID</th>
                  <th><i class=""></i> Name</th>
                  <th><i class=""></i> Parent ID</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
        ';
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo'
                <tr>
                    <td>'.$row["id_catalog"].'</td>
                    <td>'.$row["name_catalog"].'</td>
                    <td>'.$row["parent_id"].'</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="action/update_catalog.php?id='.$row["id_catalog"].'"><i class="icon_plus_alt2"></i></a>
                            <a class="btn btn-danger" href="action/delete_catalog.php?id='.$row["id_catalog"].'"><i class="icon_close_alt2"></i></a>
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
    static function adminAccessi(){
        global $con;
        $query = "SELECT * FROM accessories";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        $num 	= mysqli_num_rows($result);
        echo'
            <table class="table table-striped table-advance table-hover">
            <tbody>
                <tr>
                  <th><i class=""></i> ID</th>
                  <th><i class=""></i> Name</th>
                  <th><i class=""></i> Description</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
        ';
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo'
                <tr>
                    <td>'.$row["id_as"].'</td>
                    <td>'.$row["name_as"].'</td>
                    <td>'.substr($row["decription"],0,19).'</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="action/update_accessories.php?id='.$row["id_as"].'"><i class="icon_plus_alt2"></i></a>
                            <a class="btn btn-danger" href="action/delete_accessories.php?id='.$row["id_as"].'"><i class="icon_close_alt2"></i></a>
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
    static function adminOrder(){
        global $con;
        $query = "SELECT id_customer,amount,status,id_order 
                    FROM orders";
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
                    <td>'.$row["id_customer"].'</td>
                    <td>'.$row["amount"].'</td>
                    <td>
                        <!--<select name="status" id="status">
                            <option value="'.$row["status"].'">'.$status.'</option>
                            <option value="1">Order Complete</option>
                            <option value="2">Not Order Yet</option>
                            <option value="3">Incoming Order</option>
                        </select>-->
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
    
    
    
    
    
    
    
    static function dropBday($date_imp_pro){
		for($i=1;$i<=31;$i++){
			$check = $i==$date_imp_pro ? 'selected="selected"':'';
			echo '<option value="'.$i.'" '.$check.'>'.$i.'</option>';
		}
	}
	
	static function dropBmonth($month_imp_pro){
		$month_arr = array(1=>'Month 1','Month 2','Month 3','Month 4','Month 5','Month 6','Month 7','Month 8','Month 9','Month 10','Month 11','Month 12');
		foreach($month_arr as $value => $display){
			echo '<option value="'.$value.'">'.$display.'</option>';
		}
	}
	
	static function dropByear($year_imp_pro){
		$current_year = date('Y');
		$min_age = $current_year-16;
		$max_age = $current_year-80;
		for($i=$max_age;$i<=$min_age; $i++){
			echo '<option value="'.$i.'">'.$i.'</option>';
		}
	}
    
    static function dropBday2($date_imp_as){
		for($i=1;$i<=31;$i++){
			$check = $i==$date_imp_pro ? 'selected="selected"':'';
			echo '<option value="'.$i.'" '.$check.'>'.$i.'</option>';
		}
	}
	
	static function dropBmonth2($month_imp_as){
		$month_arr = array(1=>'Month 1','Month 2','Month 3','Month 4','Month 5','Month 6','Month 7','Month 8','Month 9','Month 10','Month 11','Month 12');
		foreach($month_arr as $value => $display){
			echo '<option value="'.$value.'">'.$display.'</option>';
		}
	}
	
	static function dropByear2($year_imp_as){
		$current_year = date('Y');
		$min_age = $current_year-16;
		$max_age = $current_year-80;
		for($i=$max_age;$i<=$min_age; $i++){
			echo '<option value="'.$i.'">'.$i.'</option>';
		}
	}
}
?>