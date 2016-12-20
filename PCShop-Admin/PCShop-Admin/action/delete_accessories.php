<?php
    include_once("../overfile/connect.php"); 
    
    $id_as = $_GET["id"];

    $query	= "DELETE FROM accessories WHERE id_as='$id_as' LIMIT 1";
    $result = mysqli_query($con,$query) or die("ERROR: ".mysqli_error($con));
    
    if($result){
    	echo "Delete Success";
    	header("Location: ../index.php?url=accessories");
    }
?>