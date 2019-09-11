<?php
$con = mysqli_connect("localhost","root","password","e_commerce");

$a = $_POST['d1'];
$b = $_POST['d2'];

$que = "INSERT INTO student (studentname,fee) VALUES('$a' ,'$b')";

mysqli_query($con ,$que);

?>