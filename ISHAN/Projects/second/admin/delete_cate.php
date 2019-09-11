<?php
include("../db.php");

// print_r($_GET);
// die;
$a = $_GET['cate'];

$query = "DELETE FROM category WHERE id=$a";

mysqli_query($con, $query);

header("location:view_cate.php");
?>