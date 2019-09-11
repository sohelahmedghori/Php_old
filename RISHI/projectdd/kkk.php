<?php
print_r($_POST);
$con= mysqli_connect("localhost","root","password","e-commerce");

$a =$_POST['full_name'];
$b =$_POST["username"];
$c =$_POST["pass"];
$d =$_POST["gender"];
$e =$_POST["add"];
$f =$_POST["contact"];
$g =$_POST["city"];


$query="INSERT INTO user(full_name,username,password,address,city,gender,contact) values('$a','$b','$c','$d','$e','$f','$g')";


mysqli_query($con, $query);

header("location:login.php");
?>