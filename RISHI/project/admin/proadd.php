<?php
// print_r($_POST);
$con = mysqli_connect("localhost","root","password","e_commerce");

$a=$_POST['p_name'];
$b=$_POST['p_cate'];
$c=$_POST['p_price'];
$d=$_POST['p_detail'];
$e=$_POST['p_discount'];


$query="INSERT INTO addproduct(productname,productcate,productprice,productdetail,productdiscount) VALUES('$a','$b','$c','$d','$e')";

mysqli_query($con ,$query);

header("location:add_product.php");
?>