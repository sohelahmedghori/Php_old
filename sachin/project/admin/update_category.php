<?php
include("../db.php");
// print_r($_POST);
$a = $_POST['cate_name'];
$b = $_POST['cid'];
// cid is comming from hidden tag for where clause
$query = "UPDATE category SET cate_name = '$a' WHERE id=$b";

mysqli_query($con, $query);
header("location:view_category.php");


?>