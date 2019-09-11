<?php

// print_r($_POST);

$con = mysqli_connect("localhost","root","","onlineshop");

$name = $_FILES['image']['name'];
$size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];

$arr = explode(".",$name);
$ext = end($arr);

if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")
 {
  if($size<=(1024*1024*1))
  {	
  	$new_name = time().rand(10000,100000).".".$ext;
	$a = $_POST['full_name'];
	$b = $_POST['user_name'];
	$c = $_POST['pass'];

	$c = sha1($c);

	$d = $_POST['gender'];
	$e = $_POST['add'];
	$f = $_POST['city'];
	 
	$query = "INSERT into user (full_name, user_name, password, gender,address,city,userimage) 
	VALUES('$a','$b','$c','$d','$e','$f','$new_name')";

   move_uploaded_file($tmp_name, "userimages/".$new_name);
	mysqli_query($con,$query);

	header("location:signin.php");

  }
  else
  {
	$_SESSION['msg'] = "file format is wrong";
 header("location:signup.php");
  }
}
else
{
 $_SESSION['msg'] = "file format is wrong";
 header("location:signup.php");
}




?>
