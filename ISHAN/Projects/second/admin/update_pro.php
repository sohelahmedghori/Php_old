<?php
include("../db.php");

// print_r($_FILES);
if($_FILES['image']['name']=="")
{
	$a = $_POST['p_name'];
	$b = $_POST['p_cate'];
	$c = $_POST['p_price'];
	$d = $_POST['detail'];
	$e = $_POST['discount'];

	$id = $_POST['pid'];

	$query ="UPDATE product SET pname='$a', pcate='$b', pprice='$c', pdetail='$d', pdiscount='$e' WHERE id=$id";
	// print_r($query);
	// die;
	mysqli_query($con, $query);
	header("location:view_pro.php");
}
else
{
	$a = $_POST['p_name'];
	$b = $_POST['p_cate'];
	$c = $_POST['p_price'];
	$d = $_POST['detail'];
	$e = $_POST['discount'];

	$id = $_POST['pid'];

	$name = $_FILES['image']['name'];
	$size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];

	// print_r($_FILES);
	$arr = explode(".",$name);
	$ext = end($arr);
	if($ext == "jpeg" || $ext == "jpg" || $ext == "png" || $ext == "gif")
	{
		if($size <= (1024*1024*1))
		{
			$new_name = time().rand(1000,10000).".".$ext;
			$query ="UPDATE product SET pname='$a', pcate='$b', pprice='$c', pdetail='$d', pdiscount='$e', image_name='$new_name' WHERE id=$id";
			mysqli_query($con, $query);
			move_uploaded_file($tmp_name, "upload/".$new_name);
			header("location:view_pro.php");
		}
		else
		{
			$_SESSION['msg'] = "This file size is too large !";
			header("location:edit_pro.php?pro=".$id);
		}
	}
	else
	{
		$_SESSION['msg'] = "This file type is not allowed !";
		header("location:edit_pro.php?pro=".$id);
	}
}
?>