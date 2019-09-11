<?php
// print_r($_POST);
include("../db.php");
$u = $_POST['username'];
$p = $_POST['password'];

$query = "INSERT INTO admin (username,password) VALUES ('$u','$p')";

mysqli_query($con,$query);
header("location:dashboard.php");
?>