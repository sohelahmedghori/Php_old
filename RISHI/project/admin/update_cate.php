<?php
include("../db.php");
print_r($_POST);
// die;
$a=$_POST['cate_name'];
$b=$_POST['cid'];
$query="UPDATE category SET category ='$a' WHERE id='$b'";
// die;
mysqli_query($con ,$query);
header("location:view_category.php");

?>