<?php 
    $keyword=$_GET["keyword"];
    require("../../library/funtions.php");
    $keyword_kodau = seoname($keyword);
    
    require("../../overfile/connect.php");
    
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
                        '.$row["name_product"].'
                    </a>
                </li>
            ';
        }
    }
?>