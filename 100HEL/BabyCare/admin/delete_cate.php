<?php
include("../db.php");
// print_r($_GET);
$a=$_GET['d_cate'];
$query="DELETE FROM category WHERE id=$a";
mysqli_query($con, $query);
header("location:view_cate.php");
?>