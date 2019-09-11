<?php
// print_r($_POST);
// die();
$con=mysqli_connect("localhost","root","password","my_test");


$a=$_POST['st_name'];
$b=$_POST['fee'];
$c=$_POST['age'];
$d=$_POST['class'];
$e=$_POST['mobile'];

$query="INSERT INTO student(studentname,fee,age,class,contact) VALUES('$a','$b','$c','$d','$e')";

mysqli_query($con,$query);

header("location:index.php");

?>