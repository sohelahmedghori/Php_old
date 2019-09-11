<?php 
     // print_r($_POST);
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

$name = $_FILES['image']['name'];
$size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];


$arr = explode(".", $name);
// break file name with . for ext
$ext = end($arr);
// getiing extenction

if($ext=="jpeg" || $ext=="gif" || $ext=="jpg" || $ext=="png")
{ // check the file extenction
	if($size <= (1024*1024*1))
	{ // check upload file size, less then 1mb

		if($_FILES['image']['error']==0)
		{

		$new_name = time().rand(10000, 100000).".".$ext;
$a=$_POST['p_name'];
$b=$_POST['p_price'];
$c=$_POST['p_detail'];
$d=$_POST['p_cate'];
$e=$_POST['discount'];

 $query="insert into product(product_name,product_price,product_detail,product_category,discount,img_name) values ('$a','$b','$c','$d','$e', '$new_name')";
 move_uploaded_file($tmp_name, "upload/".$new_name);

mysqli_query($con,$query);
header("location:addpro.php");

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