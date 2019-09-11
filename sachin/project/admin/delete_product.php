<?php  
include("../db.php");


$a = $_GET['delete'];
$query = " DELETE FROM product WHERE id=$a";
mysqli_query($con,$query);
header("location:view_product.php");




?>