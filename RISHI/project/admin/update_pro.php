<?php
// print_r($_POST);
include("../db.php");
if(! isset ($_SESSION["is_user_logged_in"]))
 {
 	header("location:index.php");
 }
if($_FILES['image']['name']=="")
{
$x=$_POST['pid'];
$a=$_POST['p_name'];
$b=$_POST['p_price'];
$c=$_POST['p_cate'];
$d=$_POST['p_detail'];
$e=$_POST['p_discount'];

$query="UPDATE addproduct SET productname='$a', productcate ='$c',productdetail ='$d',productprice='$b' ,productdiscount = '$e' WHERE id = $x";

mysqli_query($con ,$query);
header("location:view_product.php");
}
else
{
	$x=$_POST['pid'];
	$a =$_POST['p_name'];
	$b =$_POST['p_price'];
	$c =$_POST['p_cate'];
	$d =$_POST['p_detail'];
	$e =$_POST['p_discount'];

$name =$_FILES['image']['name'];
$size =$_FILES['image']['size'];
$tmp_name=$_FILES['image']['tmp_name'];

$arr=explode(".", $name);

$ext=end($arr);

if($ext=="gif" || $ext=="jpeg" || $ext=="jpg" || $ext=="png")
{
	if(1024*1024*1)
	{
		$new_name=time().rand(10000,100000).".".$ext;
		$query="UPDATE addproduct SET productname='$a',productcate='$c',productdetail='$d', productprice='$b',productdiscount='$e',image_name='$new_name' WHERE id=$x";
		mysqli_query($con,$query);
		move_uploaded_file($tmp_name,"upload/".$new_name);
		header("location:view_product.php");

	}
	else
	{
		$_SESSION("This file type is too large");
		header("location:update_pro.php");
	}
}
else
{
	$_SESSION("This file type type is  not allowed");
	header("location:update_pro.php");
}
}




?>