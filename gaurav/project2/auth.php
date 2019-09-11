<?php
session_start();
$con = mysqli_connect("localhost","root","","online_shop2");
$a = $_POST['email'];
$b = $_POST['pass'];
$query = "SELECT * FROM signup where email='$a'";
$result = mysqli_query($con, $query);
// print_r($_POST); die;	

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
		// print_r($_data);
	if($data['password']==$b)
	{
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['fullname'];
		$_SESSION['is_user_logged_in']=true;
		header("location:myaccount.php");
	}
	else
	{
		$_SESSION['msg']="this password is incorrect";
		header("location:signin.php");

	}

}
else
{
   $_SESSION['msg']="this username and password is incorrect";
   header("location:signin.php");
}


?>