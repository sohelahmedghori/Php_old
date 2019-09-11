<?php
$con=mysqli_connect("localhost","root","","mytest");
session_start();
// print_r($_POST);
// die;
$a=$_POST['s_name'];
$b=$_POST['s_fee'];
$c=$_POST['s_age'];
$d=$_POST['s_class'];
$e=$_POST['s_contact'];
$query="INSERT INTO student(studentname,studentfee,studentage,studentclass,contact) VALUES ('$a','$b','$c','$d','$e')";
mysqli_query($con,$query);
header("location:index.php");
?>