<?php
    include_once("../overfile/connect.php"); 
    
    $id_catalog = $_GET["id"];

    $query	= "DELETE FROM catalog WHERE id_catalog='$id_catalog' LIMIT 1";
    $result = mysqli_query($con,$query) or die("ERROR: ".mysqli_error($con));
    
    if($result){
    	echo "Delete Success";
    	header("Location: ../catalog.php");
    }
?>