<?php
include("../db.php");

// print_r($_GET);

$a = $_GET['pro'];

$query = "DELETE FROM product WHERE id=$a";

mysqli_query($con, $query);

header("location:view_pro.php");

?>