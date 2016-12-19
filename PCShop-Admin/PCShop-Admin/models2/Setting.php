<?php
include_once("../overfile/connect.php"); 

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
                  <th><i class=""></i> ID Asso</th>
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
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
        ';
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo'
                <tr>
                    <td>'.$row["id_product"].'</td>
                    <td>'.$row["name_product"].'</td>
                    <td>'.$row["id_as"].'</td>
                    <td>'.$row["quantity"].'</td>
                    <td>'.$row["price"].'</td>
                    <td>'.substr($row["screen"],0,5).'</td>
                    <td>'.substr($row["cpu"],0,5).'</td>
                    <td>'.substr($row["ram"],0,5).'</td>
                    <td>'.substr($row["vga"],0,5).'</td>
                    <td>'.substr($row["hdh"],0,5).'</td>
                    <td>'.substr($row["pin"],0,5).'</td>
                    <td>'.$row["id_mf"].'</td>
                    <td>'.$row["date_imp_pro"].'/'.$row["month_imp_pro"].'/'.$row["year_imp_pro"].'</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="action/update_product.php?id='.$row["id_product"].'"><i class="icon_plus_alt2"></i></a>
                            <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
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
    
    static function adminCustomer(){
        global $con;
        $query = "SELECT * FROM customer_account";
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
                    <td>'.$row["id_ca"].'</td>
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
                            <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
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
                            <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
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
    /*static function dropManufac(){
        $query= "SELECT * FROM manufacturer";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        while($row= mysqli_fetch_assoc($result)){
              $id_mf= $row['id_mf'];
              $name_mf= $row['name_mf'];
              echo '<option value="'.$id_mf.'">'.$name_mf.'</option>';
        }
    }*/
    static function adminOrderDetail(){
        global $con;
        global $userid;
        $query = "SELECT * FROM order_detail WHERE id_order='$userid'";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        $num 	= mysqli_num_rows($result);
        echo'
            <div>ID Order: '.$userid.'</div>
            <table class="table table-striped table-advance table-hover">
            <tbody>
                <tr>
                  <th><i class=""></i> ID Product </th>
                  <th><i class=""></i> Number</th>
                </tr>
        ';
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo'
                <tr>
                    <td>'.$row["id_product"].'</td>
                    <td>'.$row["number"].'</td>
                </tr>
        ';
        }
        echo'
            </tbody>
            </table>
        ';
    }

    static function adminCusDetail(){
        global $con;
        global $userid;
        $query = "SELECT c.id_ca,c.cus_type,c.phone,c.address,c.cus_name,ca.email,ca.user_name,ca.status,ca.password,ca.id_ca 
                         FROM customer c,customer_account ca WHERE c.id_ca=ca.id_ca AND c.id_ca='$userid'";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        $num 	= mysqli_num_rows($result);
        echo'
            <div>ID User: '.$userid.'</div>
            <table class="table table-striped table-advance table-hover">
            <tbody>
                <tr>
                    <th><i class=""></i> Email </th>
                    <th><i class=""></i> Name</th>
                    <th><i class=""></i> Customer Type</th>
                    <th><i class=""></i> Address</th>
                    <th><i class=""></i> Phone</th>
                </tr>
        ';
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            if($row["cus_type"] == 1){
                $cus_type = "VIP";
            }else if($row["cus_type"] == 2){
                $cus_type = "Normal";
            }
            echo'
                <tr>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["cus_name"].'</td>
                    <td>'.$cus_type.'</td>
                    <td>'.$row["address"].'</td>
                    <td>'.$row["phone"].'</td>
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