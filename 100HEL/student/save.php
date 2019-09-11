<?php
// print_r($_POST);
include("db.php");
$fullname=$_POST['fullname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$query="INSERT INTO student_detail(fullname,age,gender,contact) VALUES ('$fullname','$age','$gender','$contact')";
mysqli_query($con, $query);
header("location: index.php");
?>