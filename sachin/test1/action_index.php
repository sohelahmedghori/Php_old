<?php  
// 
$con =mysqli_connect( "localhost","root","password","mytest");


$a = $_POST['student'];
$b = $_POST['fees'];
$c = $_POST['age'];
$d = $_POST['contact'];
$e = $_POST['class'];

$query = "  INSERT INTO student ( student,fees,age,class,contact) VALUES ('$a','$b','$c','$e','$d')";
$result = mysqli_query($con,$query);
header( "location:index.php");




 ?>s