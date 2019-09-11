<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
$a = $_POST['p_name'];
$b = $_POST['p_price'];
$c = $_POST['p_detail'];
$d = $_POST['p_cate'];
$e = $_POST['discount'];
// print_r($_POST);
$name = $_FILES['image']['name'];
$size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];
$arr = explode(".", $name);
$ext = end($arr);

if($ext=="jpeg" || $ext=="gif" || $ext=="jpg" || $ext=="png")
{ 
	if($size <= (1024*1024*1))
	{ 

		if($_FILES['image']['error']==0)
		{

		$new_name = time().rand(10000, 100000).".".$ext;

		$a = $_POST['p_name'];
		$b = $_POST['p_price'];
		$c = $_POST['p_detail'];
		$d = $_POST['p_cate'];
		$e = $_POST['discount'];

		$query = "INSERT INTO product (p_name, p_price, p_detail, p_cate, discount, image_name) VALUES ('$a', '$b', '$c', '$d', '$e', '$new_name')";

		move_uploaded_file($tmp_name, "upload/".$new_name);

		mysqli_query($con, $query);
		header("location:add_product.php");
		}
		else
		{
			$_SESSION['msg']="Somthing Wrong";
			header("location:add_product.php");		
		}
	}
	else
	{
		$_SESSION['msg']="This File size is too large";
		header("location:add_product.php");
	}
	
}
else
{
	$_SESSION['msg']="This File type not allowed";
	header("location:add_product.php");
}


?>