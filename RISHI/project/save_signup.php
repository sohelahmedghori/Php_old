<?php
// print_r($_POST);
$con= mysqli_connect("localhost","root","password","e_commerce");

 
 $a=$_POST["fullname"];
 $b=$_POST["email"];
 $c=$_POST["mobile"];
 $d=$_POST["pass"];
 $e=$_POST["gender"];
 $f=$_POST["add"];
 $g=$_POST["city"];

 $query="INSERT INTO user(fullname,username,mobile,password,gender,address,city) VALUES('$a','$b','$c','$d','$e','$f','$g')";

 mysqli_query($con,$query);
 
 header("location:login.php");
?>