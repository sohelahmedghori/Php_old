<?php
include("../db.php");
// print_r($_GET);
$a=$_GET['d_pro'];
$query="DELETE FROM addproduct WHERE id=$a";
mysqli_query($con, $query);
header("location:view_pro.php");
?>