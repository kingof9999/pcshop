<?php
    include_once("../overfile/connect.php"); 
    
    $id_product = $_GET["id"];

    $query	= "DELETE FROM product WHERE id_product='$id_product' LIMIT 1";
    $result = mysqli_query($con,$query) or die("ERROR: ".mysqli_error($con));
    
    if($result){
    	echo "Delete Success";
    	header("Location: ../basic_table.php");
    }
?>