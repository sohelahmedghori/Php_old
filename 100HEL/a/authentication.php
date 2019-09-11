<?php
// print_r($_POST);
include("db.php");
$u=$_POST['username'];
$p=$_POST['password'];
$query="SELECT * FROM user WHERE email='$u'";
$result=mysqli_query($con, $query);
if (mysqli_num_rows($result)==1) 
{
	$data=mysqli_fetch_assoc($result);
	
	if ($data['password']==$p) 
	{
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['fullname'];
		$_SESSION['is_user_logged_in']=true;
		header("location:myaccount.php");
	}
	else
	{
		$_SESSION['msg']="This Password is Incorrect";
		header("location:login.php");
	}
}
else
{
	$_SESSION['msg']="This Username and Password is Incorrect";
	header("location:login.php");
}
?>