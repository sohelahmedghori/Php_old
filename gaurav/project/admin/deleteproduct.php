<?php
include("db.php");

// print_r($_GET);
$a = $_GET['product'];

$query = "delete from addproduct where id=$a";
mysqli_query($con, $query);
header("location:view product.php");

?>