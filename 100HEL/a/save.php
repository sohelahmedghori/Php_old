<?php
include("db.php");
// print_r($_POST);
// print_r($_FILES);
// die;
$name=$_FILES['profile_image']['name'];
$size=$_FILES['profile_image']['size'];
$tmp_name=$_FILES['profile_image']['tmp_name'];
$arr=explode(".", $name);
$ext=end($arr);
if ($ext=="jpg" || $ext=="png" || $ext=="jpeg" || $ext=="gif") 
{
	if ($size<=(1024*1024*1))
	{
		$a=$_POST['fullname'];
		$b=$_POST['email'];
		$c=$_POST['pass'];
		$d=$_POST['gender'];
		$e=$_POST['add'];
		$f=$_POST['city'];
		$g=$_POST['contact'];
		$user_image=time().rand(100,1000000).".".$ext;

		$query = "INSERT INTO user (fullname,email,password,gender,address,city,contact,image) VALUES ('$a','$b','$c','$d','$e','$f','$g','$user_image')";
		move_uploaded_file($tmp_name, "user_image/".$user_image);

		mysqli_query($con, $query);

		header("location:login.php");	
	}
	else
	{
		$_SESSION['msg']="File is Too Large";
		header("location:signup.php");

	}
}
else
	{
		$_SESSION['msg']="This file type not allowd";
		header("location:signup.php");

	}
?>