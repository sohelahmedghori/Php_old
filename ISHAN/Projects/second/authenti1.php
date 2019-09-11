<?php
// print_r($_POST);
include("db.php");
$u = $_POST['username'];
$p = $_POST['password'];

$query = "SELECT * FROM user1 WHERE username='$u'";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result)==1)
 {
	$data = mysqli_fetch_assoc($result);
	//This fn is convert Object into a associative array format
	if ($data['password']==$p)
	{
		$_SESSION['id'] = $data['id'];
		$_SESSION['name'] = $data['full_name'];
		$_SESSION['is_user_logged_in']=true;
		header("location:my_account1.php");

		// mosiba;
	}
	else{

		$_SESSION['msg'] = "This password is Incorrect !";
		header("location:login1.php");
	}
}
else{

	$_SESSION['msg'] = "This username and password is  incorrecr !";
	header("location:login1.php");
}
?>