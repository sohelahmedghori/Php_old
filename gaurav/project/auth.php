<?php
session_start();
$con = mysqli_connect("localhost","root","","onlineshop");

$u = $_POST['username'];
$p = $_POST['password'];

$p = sha1($p);
$query = "select * from user where user_name = '$u'";
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	if ($data['password']==$p) {
		$_SESSION['id'] = $data['id'];
		$_SESSION['name'] = $data['full_name'];
		$_SESSION['is_user_logged_in']=true;
		header("location:myaccount.php");
	} 
	else
	{
	$_SESSION['msg'] = "This password is incorrect!";
	header("location:signin.php");
	}
	

}
else
{
	$_SESSION['msg'] = "This user name and password is incorrect!";
	header("location:signin.php");
	
}

?>