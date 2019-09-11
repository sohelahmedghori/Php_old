<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

if($_FILES['image']['name']=="")
{
	$a = $_POST['p_name'];
	$b = $_POST['p_price'];
	$c = $_POST['p_detail'];
	$d = $_POST['p_cate'];
	$e = $_POST['discount'];

	$x = $_POST['pid'];


	$query = "UPDATE product SET product_name='$a', product_price='$b', product_detail='$c', product_category='$d', discount='$e' WHERE id = $x";
	mysqli_query($con, $query);
	header("location:view_product.php");
}
else
{
	$a = $_POST['p_name'];
	$b = $_POST['p_price'];
	$c = $_POST['p_detail'];
	$d = $_POST['p_cate'];
	$e = $_POST['discount'];

	$x = $_POST['pid'];

	$name = $_FILES['image']['name'];
	$size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];

	$arr = explode(".", $name);
	$ext = end($arr);
	if($ext=="jpeg" || $ext=="gif" || $ext=="jpg" || $ext=="png")
	{
		if($size <= (1024*1024*1))
		{
			$new_name = time().rand(10000, 100000).".".$ext;
			$query = "UPDATE product SET product_name='$a', product_price='$b', product_detail='$c', product_category='$d', discount='$e', image_name='$new_name' WHERE id = $x";
			mysqli_query($con, $query);
			move_uploaded_file($tmp_name, "upload/".$new_name);
			header("location:view_product.php");
		}
		else
		{
			$_SESSION['msg']="This File is too large";
			header("location:edit_product.php?demo=".$x);
		}
	}
	else
	{
		$_SESSION['msg']="This File type not allowed";
		header("location:edit_product.php?demo=".$x);
	}
}
