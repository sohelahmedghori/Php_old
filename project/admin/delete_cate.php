O<?php
include("../db.php");

// print_r($_GET);
$a = $_GET['cate'];
$query = "DELETE FROM category WHERE id=$a";

mysqli_query($con, $query);
header("location:view_category.php");

?>`	