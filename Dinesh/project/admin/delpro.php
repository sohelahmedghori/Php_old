<?php
  include("../db.php");


  $a=$_GET['demo'];

  $query="DELETE FROM product WHERE id=$a";

  mysqli_query($con,$query);

  header("location:viewpro.php");

  ?>