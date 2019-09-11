<?php
$con = mysqli_connect("localhost","root","","onlineshop");
$a = $_POST['name'];
$b = $_POST['fees'];
$query = "INSERT INTO student (name,fee) VALUES ('$a','$b')";
mysqli_query($con,$query);

?>