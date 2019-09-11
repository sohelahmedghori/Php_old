<?php
// print_r($_POST);
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
if ($_FILES['pro_image']['name']=="")
{
	$a=$_POST['pro_name'];
	$b=$_POST['pro_price'];
	$c=$_POST['pro_detail'];
	$d=$_POST['pro_cate'];
	$e=$_POST['pro_discount'];
	$x=$_POST['pid'];
	$query="UPDATE addproduct SET productname='$a', productprice='$b', productdetail='$c', productcategory='$d', productdiscount='$e' WHERE id=$x";
	mysqli_query($con, $query);
	header("location:view_pro.php");
}
else
{
	$a=$_POST['pro_name'];
	$b=$_POST['pro_price'];
	$c=$_POST['pro_detail'];
	$d=$_POST['pro_cate'];
	$e=$_POST['pro_discount'];
	
	$x=$_POST['pid'];
	
	$name=$_FILES['pro_image']['name'];/*product name attribute use to for first array (pro_image)*/
	$size=$_FILES['pro_image']['size'];
	$tmp_name=$_FILES['pro_image']['tmp_name'];
	$arr=explode(".", $name);
	$ext=end($arr);

if ($ext=="jpg"||$ext="jpeg"||$ext="png"||$ext="gif")
{
	if  ($size<=(1024*1024*1))
	{
		if ($_FILES['pro_image']['error']==0) 
		{
			$image_name=time().rand(1000, 100000).".".$ext;

			$query="UPDATE addproduct SET productname='$a', productprice='$b', productdetail='$c', productcategory='$d', productdiscount='$e', imagename='$image_name' WHERE id=$x";
			move_uploaded_file($tmp_name, "upload/".$image_name);
			mysqli_query($con, $query);

			header("location:view_pro.php");
		}
		else
		{
			$_SESSION['msg']="Something Went Wrong";
			header("location:edit_pro.php?demo=".$x);
		}
	}
	else
	{
		$_SESSION['msg']="This file size is too larg";
		header("location:edit_pro.php?demo=".$x);
	}
}
else
{
	$_SESSION['msg']="This file type not allowed";
	header("location:addproduct.php");
}
}
?>