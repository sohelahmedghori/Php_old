<?php
include("db_con.php");
// print_r($_POST);
$a=$_POST['full_name'];
$b=$_POST['username'];
$c=$_POST['pass'];

$c=sha1($c); //[sha1(); function convert function into a string]

$d=$_POST['gender'];
$e=$_POST['address'];
$f=$_POST['contact'];
$g=$_POST['city'];
echo $sql="insert into user (full_name, username, pass, gender, address, contact, city) values ('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$sql);
header("location:login.php");
?>