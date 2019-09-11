<?php 
include ("db.php");
$u = $_POST['user_name'];
$p = $_POST['password'];
$p = shal($p);
$query " SELECT * FROM project where user_name= $u";
$result = mysqli_query($con,$query);
if(mysqli_num_row($result)==1)
{ 
	

}else
{
	$_SESSION['MSG']="THIS USER NAME AND PASSWORD IS INCORRECT";
	header("location:log in.php");
}



?>