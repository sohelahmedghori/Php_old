<?php 

// print_r($_GET);
include ("../db.php");
$a = $_GET['cote'];
$query ="DELETE FROM category WHERE id=$a";
mysqli_query($con,$query);
header("location:view_category.php");
?>
