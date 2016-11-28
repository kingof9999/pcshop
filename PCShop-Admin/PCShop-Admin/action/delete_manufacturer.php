<?php
    include_once("../overfile/connect.php"); 
    
    $id_mf = $_GET["id"];

    $query	= "DELETE FROM manufacturer WHERE id_mf='$id_mf' LIMIT 1";
    $result = mysqli_query($con,$query) or die("ERROR: ".mysqli_error($con));
    
    if($result){
    	echo "Delete Success";
    	header("Location: ../manufacturer_manager.php");
    }
?>