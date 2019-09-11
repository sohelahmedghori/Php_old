<?php
include("db.php");
// print_r($_POST);
// die;
$id=$_SESSION['id'];
if ($_FILES['profile_image']['name']=="")
{
	$a=$_POST['fullname'];
	$b=$_POST['gender'];
	$c=$_POST['add'];
	$d=$_POST['city'];
	$e=$_POST['contact'];
	$query="UPDATE user SET fullname='$a', gender='$b', address='$c', city='$d', contact='$e' WHERE id=$id";
	mysqli_query($con, $query);
	header('location:myprofile.php');
}
else
{
	$name=$_FILES['profile_image']['name'];
	$size=$_FILES['profile_image']['size'];
	$tmp_name=$_FILES['profile_image']['tmp_name'];
	$arr=explode(".", $name);
	$ext=end($arr);
	if ($ext=="png" || $ext=="jpg" || $ext=="gif" || $ext=="jpeg")
	{
		if ($size<=(1024*1024*1))
		{
			if ($$_FILES['profile_image']['error']==0)
			{
				$a=$_POST['fullname'];
				$b=$_POST['gender'];
				$c=$_POST['add'];
				$d=$_POST['city'];
				$e=$_POST['contact'];
				$new_name=time().rand(1000, 100000000).".".$ext;
				$query="UPDATE user SET fullname='$a', gender='$b', address='$c', city='$d', contact='$e', image='$new_name' WHERE id=$id";
				move_uploaded_file($tmp_name, "user_image/".$new_name);
				mysqli_query($con, $query);
				header('location:myprofile.php');
			}
			else
			{
				$_SESSION['msg']="Somthing went wrong !";
				header("location:edit_profile.php");
			}
		}
		else
		{
			$_SESSION['msg']="This file size too larg";
			header("location:edit_profile.php");
		}
	}
	else
	{
		$_SESSION['msg']="This file type not allowed";
		header("location:edit_profile.php");
	}
}
?>