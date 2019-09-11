<?php  

$con = mysqli_connect( "localhost","root","password","myproject");

$user = $_POST['username'];
$pass = $_POST['password'];

 $query = " INSERT INTO add_new_admin ( username,password) VALUES ('$user','$pass')";
 mysqli_query($con,$query);
 header( "location:add_admin.php");


?>