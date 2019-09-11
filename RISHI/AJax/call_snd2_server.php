<?php
$con = mysqli_connect("localhost", "root","password","e_commerce");


$a = $_POST['demo1'];
$b = $_POST['demo2'];

$query = "INSERT INTO student(studentname, fee) VALUES('$a', '$b')";
mysqli_query($con, $query);


?>