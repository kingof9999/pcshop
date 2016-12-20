<?php 
    $keyword=$_GET["keyword"];
    $check = $_GET["check"];
    require("../../library/funtions.php");
    $keyword_kodau = seoname($keyword);
    
    require("../../overfile/connect.php");

    if($check == 1){
        $query = "SELECT * FROM product WHERE name_product LIKE '%$keyword_kodau%'";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        if(mysqli_num_rows($result)==0){
            echo '<p>There is no item in the store.</p>';
        }else{
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo '
                <li>
                    <a href="index.php?url=detail&spid='.$row["id_product"].'">
                        <img src="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" width="27"/>
                        '.substr($row["name_product"],0,45).'
                    </a>
                </li>
            ';
            }
        }
    }else if($check == 2){
        $query = "SELECT * FROM product_assosi WHERE name_product_as LIKE '%$keyword_kodau%'";
        $result = mysqli_query($con,$query)or die("LOI LIET KE: ".mysqli_error($con));
        if(mysqli_num_rows($result)==0){
            echo '<p>There is no item in the store.</p>';
        }else{
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo '
                <li>
                    <a href="index.php?url=detail&asid='.$row["id_product_as"].'">
                        <img src="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" width="27"/>
                        '.substr($row["name_product_as"],0,45).'
                    </a>
                </li>
            ';
            }
        }
    }
?>