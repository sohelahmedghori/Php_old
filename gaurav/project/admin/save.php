<?php
// print_r($_POST);

$con = mysqli_connect("localhost", "root", "","onlineshop");

$a = $_POST['cate_name'];


$query = "INSERT INTO admincategory (cate_name) VALUES('$a')";

mysqli_query($con, $query);

header("location:addcategory.php");

?>