<?php
    session_start();
    $sls=$_POST["sls"];
    $mar=$_POST["mar"];
    $_SESSION["sls"] = $sls;
    $_SESSION["mar"] = $mar;
?>