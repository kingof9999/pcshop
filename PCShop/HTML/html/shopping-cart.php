<div class="col-md-12 col-sm-12 shopping-cart-table ">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="cart-romove item">Remove</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Price</th>
					<th class="cart-total last-item">Subtotal</th>
				</tr>
			</thead><!-- /thead -->
			<tbody>
				<?php
                    $flag=NULL;
                    if(!isset($_SESSION['cart'])){
                        $flag=false;
                    }else{
                        foreach($_SESSION['cart'] as $masp=>$soluong){
                            if(isset($masp)){
                                $flag=true;
                            }else{
                                $flag=false;
                            }
                        } 
                    }
                    if($flag==false){
                        echo"<tr>";
                            echo"<td colspan='5'>There is no item in the cart!</td>";
                        echo"</tr>";
                    }else{ 
                        foreach($_SESSION['cart'] as $masp=>$soluong){
                            $arr[]="'".$masp."'";
                        }
                        $string=implode(",",$arr);
                        require ("overfile/connect.php");
                        $query	= "SELECT id_product,name_product,price,image from product WHERE id_product in ($string)";
    				    $result = mysqli_query($con,$query) or die("Error:" .mysqli_error($con));
                        $tongtien=0;
                        while($row=mysqli_fetch_assoc($result)){
                            echo '
                                <form action="index.php?url=shopping-cart" method="post">
                    				<tr>
                    					<td class="romove-item"><a href="index.php?url=del_cart&masp='.$row["id_product"].'" title="cancel" class="icon"><i class="fa fa-trash-o fa-2x"></i></a></td>
                    					<td class="cart-image">
                    						<a class="entry-thumbnail" href="index.php?url=detail&spid='.$row["id_product"].'">
                    						    <img src="../../PCShop-Admin/PCShop-Admin/images/'.$row["image"].'" alt="" height="146" width="154">
                    						</a>
                    					</td>
                    					<td class="cart-product-name-info">
                    						<h4 class="cart-product-description"><a href="index.php?url=detail&spid='.$row["id_product"].'">'.$row["name_product"].'</a></h4>
                    						<div class="row">
                    						</div><!-- /.row -->
                    					</td>
                    					<td class="cart-product-quantity">
                                        ';
                    				    echo'<select class="quantity" data-masp="'.$row["id_product"].'" style="border:1px solid #CCC;">';
                                            $soluong=$_SESSION['cart'][$row['id_product']];
                                            for($i=1;$i<=100;$i++){
                                                if($i==$soluong){
                                                    echo "<option value='$i' selected='selected'>$i</option>";
                                                }else{
                                                    echo'<option value="'.$i.'">'.$i.'</option>';
                                                }
                                            }
                                        echo'</select>';
                    			        echo'      </div>';
                    		            echo'</td>';
                    					echo'<td class="cart-product-sub-total"><span class="cart-sub-total-price">'.number_format($row["price"]).'</span></td>';
                                        $thanhtien=$soluong*$row["price"];
                                        
                    					echo'<td class="cart-product-grand-total"><span class="cart-grand-total-price">$'.$thanhtien.'</span></td>';
                                        $tongtien+=$thanhtien;
                    				echo'</tr>
                                      </form>
                                     ';
                                    
                            }
                                    echo'<tr align="right">';
                                        echo'<td colspan="7" class="cart-product-grand-total">
                                                <div class="cart-grand-total">
                            						<span class="inner-left-md "><h4>Total: '.$tongtien.' VND</h4></span>
                            					</div>
                                             </td>
                                        ';
                                    echo'</tr>';
                                    $_SESSION['tongtien']=$tongtien;
                        }            
                 ?>
			</tbody><!-- /tbody -->
            <tfoot>
				<tr>
					<td colspan="7">
						<div class="shopping-cart-btn">
							<span class="">
								<a href="index.php" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
								<a href="index.php?url=checkorder" class="btn btn-upper btn-primary pull-right outer-right-xs">Pay</a>
							</span>
						</div><!-- /.shopping-cart-btn -->
					</td>
				</tr>
			</tfoot>
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/cart.js"></script>