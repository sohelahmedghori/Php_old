<?php
// print_r($_POST);
$con = mysqli_connect("localhost","root","","onlineshop");
$a = $_POST['name'];
$b = $_POST['fee'];
$query = "INSERT into student(name,fee)VALUES('$a','$b')";
mysqli_query($con,$query);
header("location:student.php");


?>


