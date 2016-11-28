<?php
$currency = '&#8377; '; //Currency Character or code
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );	
$shipping_cost      = 1.50; //shipping cost							
$host	= "localhost";
$db 		= "pcshop";
$user 		= "root";
$passwd	 	= "usbw";
$con = mysqli_connect($host,$user,$passwd,$db);
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysql_query("SET NAMES 'UTF8'");
?>