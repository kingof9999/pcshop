<?php 
    $masp=$_GET["masp"];
    if(isset($_SESSION['cart'][$masp])){
        $soluong=$_SESSION['cart'][$masp];
    }else{
        $soluong=1;
    }
    $_SESSION['cart'][$masp]=$soluong;
    //header("location: shopping-cart.php");
    require_once "shopping-cart.php";
    include "html/_footer.php";
    exit();
?>

