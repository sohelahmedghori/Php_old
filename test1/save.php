<?php
// print_r($_POST);
$con = mysqli_connect("localhost","root","","mytest");
$a = $_POST['stud_name'];
$b = $_POST['stud_fee'];
$c = $_POST['age'];
$d = $_POST['class'];
$e = $_POST['contact'];

$query = "insert into student(stud_name,stud_fee,age,class,contact)values('$a','$b','$c','$d','$e')";
mysqli_query($con,$query);
header("location:index.php");
?>