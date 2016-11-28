<?php
    include_once("../overfile/connect.php"); 
    
    $id_customer = $_GET["id"];

    $query	= "DELETE FROM customer_account WHERE id_ca='$id_customer' LIMIT 1";
    $query2	= "DELETE FROM customer WHERE id_ca='$id_customer' LIMIT 1";
    $result = mysqli_query($con,$query) or die("ERROR: ".mysqli_error($con));
    $result2 = mysqli_query($con,$query2) or die("ERROR: ".mysqli_error($con));
    
    if($result && $result2){
    	echo "Delete Success";
    	header("Location: ../customer_manager.php");
    }
?>