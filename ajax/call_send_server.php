<?php
print_r($_POST);
die();
$con = mysqli_connect("localhost", "root", "", "tss_11");


$a = $_POST['demo1'];
$b = $_POST['demo2'];

$query = "INSERT INTO student (name, fee) VALUES ('$a', '$b')";
mysqli_query($con, $query);

?>