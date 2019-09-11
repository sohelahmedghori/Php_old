<?php
include("../db.php");
// print_r($_POST);
$a=$_POST['username'];
$b=$_POST['password'];
$query="INSERT INTO admin (username,password) VALUES ('$a','$b')";
mysqli_query($con, $query);
header("location:create_new_admin.php");
?>