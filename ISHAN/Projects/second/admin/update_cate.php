<?php
include("../db.php");
// print_r($_POST);
// die;
$cat = $_POST['cate_name'];
$id = $_POST['cat_id'];

//cid is comming from input type hidden name attribute of hidden in edit cate 

$query =" UPDATE category SET category = '$cat' WHERE id = $id";
mysqli_query($con, $query);
header("location:view_cate.php");
?>