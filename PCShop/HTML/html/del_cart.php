<?php 
    $masp=$_GET["masp"];
    unset($_SESSION['cart'][$masp]);
    require_once "shopping-cart.php";
    include "html/_footer.php";
    exit();
?>