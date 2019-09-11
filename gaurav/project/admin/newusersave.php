<?php
 $con = mysqli_connect("localhost","root","","onlineshop");
 
 $a = $_POST['username'];
 $b = $_POST['password'];

 $query	= "insert into adminlogin(username,password) values('$a',
 '$b')";

 mysqli_query($con,$query);
 header("location:create_user_admin.php");


?>