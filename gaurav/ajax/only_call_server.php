<?php
$con = mysqli_connect("localhost","root","","onlineshop");
$query="DELETE FROM student WHERE id =2";
mysqli_query($con,$query);
?>