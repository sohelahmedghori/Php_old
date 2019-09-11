<?php
include("../db.php");
// print_r($_POST);
// die;
$a=$_POST['cate-name'];//name attribute from edit_cate page//
$b=$_POST['cid'];//name attribute from edit_cate page and comes from hidden tag//
$query="UPDATE category SET categoryname = '$a' WHERE id=$b";
mysqli_query($con, $query);
header("location:view_cate.php");
?>