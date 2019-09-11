<?php
include("../db.php");
// print_r($_GET);

$a=$_GET['p_dlt'];
$query="DELETE FROM addproduct WHERE id='$a'";

mysqli_query($con,$query);
header("location:view_product.php");
?>