<?php

include("../db.php");

// print_r($_POST);


$a = $_POST['cate_name'];

$query = "INSERT INTO category (cate_name) VALUES ('$a')";

mysqli_query($con, $query);
header("location:add_category.php");
?>