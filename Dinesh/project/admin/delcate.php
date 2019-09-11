<?php 
   include("../db.php");

   $a=$_GET['cate'];
   $query="DELETE FROM category WHERE id=$a";

   mysqli_query($con,$query);
   header("location:viewcat.php");

 ?>p