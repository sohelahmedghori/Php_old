<?php
include("db_con.php");
// print_r($_POST);
$u=$_POST['username'];
$p=$_POST['pass'];
$p=sha1($p);
$sql="SELECT * FROM `user` WHERE username='$u'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)==1) 
{
	
}
else
{
	echo $_SESSION["msg"]="Incorrect Username and Password!";
	header("location:login.php");
	echo"djhjsgfjh";
}
?>