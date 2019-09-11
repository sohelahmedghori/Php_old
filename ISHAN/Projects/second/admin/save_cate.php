<?php

// print_r($_POST);

$con = mysqli_connect("localhost","root","","ebay");

$a = $_POST['category'];

$query = "INSERT INTO category(category) VALUES ('$a')";

mysqli_query($con, $query);

header("location:add_cate.php");
?>