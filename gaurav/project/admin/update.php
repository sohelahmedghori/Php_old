<?php
include("db.php");
include("dashboard.php");

$a = $_POST['cate_name'];
$b = $_POST['cid'];

$query = "UPDATE admincategory set cate_name = '$a' where id=$b";
mysqli_query($con,$query);

header("location:view category.php");
// print_r($_POST);
?>