<?php
session_start();
// print_r($_POST);
$con = mysqli_connect("localhost","root","","onlineshop");

$u = $_POST['username'];
$p = $_POST['pass'];

$query = "select * from adminlogin where username='$u'"; 
$result =mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if ($data['password']==$p)
	 {	
	 	$_SESSION['is_user_logged_in']=true;
	 	header("location:dashboard.php");
	} 
	else 
	{
		 $_SESSION['msg'] = "password is incorrect!";
		 header("location:index.php");

	}
	

}
else{
 $_SESSION['msg'] = "username and password is incorrect!";
 header("location:index.php");

}
?>