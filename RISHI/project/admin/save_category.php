<?php
// print_r($_POST);
include("../db.php");

$a=$_POST['cate_name'];
$query="INSERT INTO category(category) VALUES('$a')";

mysqli_query($con,$query);
header("location:add_category.php");
?>