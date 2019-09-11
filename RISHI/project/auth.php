<?php
// print_r($_POST);

include("db.php");

$u=$_POST['full'];
$p=$_POST['pass'];


$query="SELECT * FROM user WHERE username='$u'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
	{
		$data = mysqli_fetch_assoc($result);
		// print_r($data);
		if ($data['password']==$p) 
		{
			$_SESSION['id']=$data['id'];
			$_SESSION['name']=$data['fullname'];
			$_SESSION['is_user_logged_in']=true;
			header("location:my_account.php");
		}
		else
		{
			$_SESSION['msg']="This password is Incorrect !";
			header("location:login.php");
		}
	}
	else{

		$_SESSION['msg']="This username and password is Incorrect !";
			header("location:login.php");
	}
?>