<?php
// print_r($_POST);
$con=mysqli_connect("localhost","root","","shopping");
$a=$_POST['fullname'];
$b=$_POST['email'];
$c=$_POST['pass'];
$d=$_POST['gender'];
$e=$_POST['add'];
$f=$_POST['city'];
$g=$_POST['contact'];
$query="INSERT INTO USER(fullname,email,password,gender,address,city,contact) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$query);
header("location:index.php");
?>