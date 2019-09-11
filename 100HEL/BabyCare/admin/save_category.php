<?php
// print_r($_POST);
// die;
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
$a=$_POST['cate-name'];
$query="INSERT INTO CATEGORY(categoryname) VALUES('$a')";
mysqli_query($con,$query);
header("location:dashboard.php");
?>