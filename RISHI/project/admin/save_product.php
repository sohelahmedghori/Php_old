<?php
// print_r($_POST);
include("../db.php");
if(! isset($_SESSION["is_user_logged_in"]))
{
	header("location:index.php");
}
// print_r($_FILES);
// die;
$name=$_FILES['image']['name'];
$size=$_FILES['image']['size'];
$tmp_name=$_FILES['image']['tmp_name'];

 echo $arr=explode(".", $name);
// break file name with . for ext

$ext=end($arr);
// getiing extenction

if($ext=="png" || $ext=="gif" || $ext=="jpeg" || $ext=="jpg")
{
	if($size <= (1024*1024*1))
	{
		if($_FILES['image']['error']==0)
		{

			$new_name=time().rand(1000,100000).".".$ext;
			$a=$_POST['p_name'];
			$b=$_POST['p_price'];
			$c=$_POST['p_cate'];
			$d=$_POST['p_detail'];
			$e=$_POST['p_discount'];

			$query="INSERT INTO addproduct(productname,productcate,productprice,productdetail,productdiscount,image_name)VALUES('$a','$c','$b','$d','$e','$new_name')";

			move_uploaded_file($tmp_name,"upload/".$new_name);

			mysqli_query($con ,$query);
			header("location:add_product.php");

		}
		else
		{
			$_SESSION['msg']="something went wrong";
			header("location:add_product.php");
		}
	}
	else
	{
		$_SESSION['msg']="This file type is too large";
		header("location:add_product.php");
	}
}
else
{
	$_SESSION['msg']="This file type is not allowed";
	header("location:add_product.php");
}


?>