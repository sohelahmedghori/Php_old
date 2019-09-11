<?php
include("db.php");

$a = $_GET['cate'];

$query = "delete from admincategory where id=$a";
mysqli_query($con,$query);
header("location:view category.php");

?>