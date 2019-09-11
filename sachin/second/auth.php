<?php 
include("db.php");
$u = $_POST["username"];
$p = $_POST["password"];
 
 $query = "SELECT * FROM sec_project WHERE username = '$u'";
 $result = mysqli_query($con,$query);
 // print_r($result);die;
if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	if($data['password']==$p)
	{
		$_SESSION["id"]=$data['id'];
		$_SESSION["name"]=$data['full_name'];
		$_SESSION["is_user_logged_in"]=true;
		header("location:home.php");
	}
	else
	{
		$_SESSION['msg']="This Password is incorrect";
		header("location:login.php");
	}

}
else
{
	$_SESSION['msg']= "This username and password is incorrect";
	header("location:login.php");
}

 ?>