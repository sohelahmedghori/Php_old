<?php
	// print_r($_POST);

include("db.php");
$id = $_SESSION['id'];
if($_FILES['image']['name']=="")
{
	$a = $_POST['full_name'];
	$d = $_POST['add'];
	$e = $_POST['gender'];
	$f = $_POST['city'];
	$g = $_POST['contact'];
	$query = "UPDATE user SET full_name='$a', address ='$d', gender='$e', city='$f', contact='$g' WHERE id=$id";
	mysqli_query($con, $query);
	header("location:my_profile.php");
}
else
{
	$name = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$size = $_FILES['image']['size'];

	$arr = explode(".", $name);
	$ext = end($arr);

	if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext =="png")
	{
		if($size<=(1024*1024*1))
		{
		$new_name = time().rand(10000, 100000).".".$ext;
		$a = $_POST['full_name'];
		$d = $_POST['add'];
		$e = $_POST['gender'];
		$f = $_POST['city'];
		$g = $_POST['contact'];

		$query =" UPDATE user SET full_name='$a', address ='$d', gender='$e', city='$f', contact='$g', image_name='$new_name' WHERE id=$id";

		move_uploaded_file($tmp_name, "user_image/".$new_name);

		mysqli_query($con, $query);
		header("location:my_profile.php");
		}
		else
		{
			$_SESSION['msg']="File is Too Large";
			header("location:edit_profile.php");

		}
	}
	else
	{
		$_SESSION['msg']="File Type is not allowed";
		header("location:edit_profile.php");	
	}
}




?>