<?php
 
     include("../db.php");

     $a=$_POST['username'];
     $b=$_POST['password'];

     $query="INSERT INTO admin (username,password)
     VALUES ('$a','$b')";

     mysqli_query($con,$query);
     header("location:dashboard.php");
?>