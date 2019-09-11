<?php
include("db.php");
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
	$b = $_POST['username'];
	$c = $_POST['pass'];

	$c = sha1($c);
	$d = $_POST['add'];
	$e = $_POST['gender'];
	$f = $_POST['city'];
	$g = $_POST['contact'];
	
	$query="INSERT INTO user (full_name, username, password, address, city, gender, contact, image) VALUES ('$a', '$b', '$c', '$d', '$f', '$e', '$g', '$new_name')";
	move_uploaded_file($tmp_name, "user_image/".$new_name);

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
	$_SESSION['msg']="File Type is not allowed";
	header("location:signup.php");	
}
?>
