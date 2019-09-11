<?php
// print_r($_POST);die;
$con = mysqli_connect("localhost","root","","onlineshop");
$a = $_POST['u'];
// echo $a;
// die;
$query = "SELECT * FROM user WHERE user_name = '$a'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	echo "this username is already taken";
}
?>