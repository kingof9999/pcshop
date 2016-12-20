<?php
    include_once("../overfile/connect.php"); 
    
    $id_product_as = $_GET["id"];

    $query	= "DELETE FROM product_assosi WHERE id_product_as='$id_product_as' LIMIT 1";
    $result = mysqli_query($con,$query) or die("ERROR: ".mysqli_error($con));
    
    if($result){
    	echo "Delete Success";
    	header("Location: ../index.php?url=accessories_product");
    }
?>