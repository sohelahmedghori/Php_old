<?php
include("db.php");
$id = $_SESSION['id'];

// print_r($_POST);
// print_r($_FILES);
if($_FILES['image']['name']=="")
{
	$a = $_POST['full_name'];
	$b = $_POST['gender'];
	$c = $_POST['add'];
	$d = $_POST['contact'];
	$e = $_POST['city'];

	$query =" UPDATE user SET full_name='$a', gender='$b', address='$c', contact='$d', city='$e' WHERE id='$id'";
	mysqli_query($con, $query);
	header("location:my_profile.php");
}
else
{
	$name = $_FILES['image']['name'];
	$size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];

	$arr = explode(".",$name);
	$ext = end($arr);

	if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")
	{
		if($size <= (1024*1024*1))
		{
			$new_name = time().rand(1000, 10000).".".$ext;

			$a = $_POST['full_name'];
			$b = $_POST['gender'];
			$c = $_POST['add'];
			$d = $_POST['contact'];
			$e = $_POST['city'];

			$query =" UPDATE user SET full_name='$a', gender='$b', address='$c', contact='$d', city='$e', image_name='$new_name' WHERE id='$id'";
			move_uploaded_file($tmp_name, "upload_img/".$new_name);
			
			mysqli_query($con, $query);
			header("location:my_profile.php");
		}
		else
		{
			$_SESSION['msg'] = "This file is too large !";
			header("location:edit_profile.php");
		}
	}
	else
	{
			$_SESSION['msg'] = "This file type is not allowed !";
			header("location:edit_profile.php");

	}
}
?>