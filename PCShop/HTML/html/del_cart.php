<?php 
    $masp=$_GET["masp"];
    unset($_SESSION['cart'][$masp]);
    require_once "shopping-cart.php";
    include "html/_footer.php";
    echo '<meta http-equiv="refresh" content="0;url=index.php?url=shopping-cart" />';
    die();
?>
