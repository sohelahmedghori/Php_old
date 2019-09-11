<?php
include("db.php");
// print_r($_GET);die;
$id=$_GET['d_student'];
$query="DELETE FROM student_detail WHERE id=$id";
mysqli_query($con, $query);
header("location:index.php");
?>