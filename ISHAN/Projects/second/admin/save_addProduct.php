<?php
// print_r($_POST);
include("../db.php");
if (! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
// print_r($_FILES);
// die;

$name = $_FILES['image']['name'];
$size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];

$arr = explode(".",$name);
//Break files witn . and change string into array.
$ext = end($arr);
// It get the Extention

if($ext =="jpeg" || $ext == "jpg" || $ext == "gif" || $ext == "png")
{  //It Check's The File Extention of Image
	if ($size <= (1024*1024*1)) 
	{//It Checks the File Upload Size, Less then 1MB.
		if ($_FILES['image']['error'] == 0) {
			$new_name = time().rand(10000, 100000).".".$ext;

			$a = $_POST['p_name'];
			$b = $_POST['p_cate'];
			$c = $_POST['p_price'];		
			$d = $_POST['detail'];
			$e = $_POST['discount'];

			$query = "INSERT INTO product(pname,pcate,pprice,pdetail,pdiscount,image_name) VALUES ('$a','$b','$c','$d','$e','$new_name')";

			move_uploaded_file($tmp_name, "upload/".$new_name);

			mysqli_query($con, $query);

			header("location:add_product.php");
		}
		else
		{
			$_SESSION['msg']="Somthing Went Wrong !";
			header("location:add_product.php");
		}
	}
	else
	{
			$_SESSION['msg']="This file size is too large ";
			header("location:add_product.php");
	}
}
else
{
			$_SESSION['msg']="This file type is not allowed !";
			header("location:add_product.php");
}

?>