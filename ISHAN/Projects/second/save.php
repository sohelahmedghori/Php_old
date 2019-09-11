<?php

// print_r($_POST);

// print_r($_FILES);
// die;

include("db.php");

$name = $_FILES['simage']['name'];
$size = $_FILES['simage']['size'];
$tmp_name = $_FILES['simage']['tmp_name'];

$arr = explode(".",$name);

$ext = end($arr);

if ($ext == "jpeg" || $ext == "jpg" || $ext == "png" || $ext == "gif")
 {
	if($size <= (1024*1024*1))
	{
		$new_name = time().rand(1000,10000).".".$ext;

		$a = $_POST['full_name'];
		$b = $_POST['username'];
		$c = $_POST['pass'];
		$d = $_POST['gender'];
		$e = $_POST['add'];
		$f = $_POST['contact'];
		$g = $_POST['city'];

		$query = "INSERT INTO user(full_name,username,password,gender,address,contact,city,image_name) VALUES 
				('$a','$b','$c','$d','$e','$f','$g','$new_name')";

		move_uploaded_file($tmp_name, "upload_img/".$new_name);

		mysqli_query($con, $query);

		header("location:login.php");

	}

	else
	{
			$_SESSION['msg']="This file size is too large ";
			header("location:signup.php");
	}
}
else
{
			$_SESSION['msg']="This file type is not allowed !";
			header("location:signup.php");
}

?>