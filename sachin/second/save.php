<?php
$con = mysqli_connect("localhost","root","password","second");
// print_r($_POST);
$a = $_POST["full_name"];
$b = $_POST["username"];
$c = $_POST["password"];
$d = $_POST["address"];
$e = $_POST["city"];
$f = $_POST["gender"];
$g = $_POST["contact"];
 
 $query = "INSERT INTO sec_project (full_name,username,password,address,city,gender,contact) VALUES ('$a','$b','$c','$d','$e','$f','g')";
 mysqli_query($con,$query);
 header("location:login.php");

 ?>