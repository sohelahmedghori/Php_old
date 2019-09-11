<?php
// print_r($_POST);
// die;
include("../db.php");
$a=$_POST['username'];
$b=$_POST['password'];
$query="SELECT * FROM admin WHERE username='$a'";
$result=mysqli_query($con,$query);
// echo mysqli_num_rows($result);
// die;
if (mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if ($data['password']==$b)
	{
		$_SESSION['is_admin_logged_in']=true;
		header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg']="This password is incorrect !";
		header("location:index.php");
	}
}
else
{
	$_SESSION['msg']="This username or password is incorrect !";
	header("location:index.php");
}
?>