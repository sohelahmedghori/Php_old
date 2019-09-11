<?php
include("db.php");
$a=$_POST['u'];
$query="SELECT * FROM user WHERE email='$a'";
$result=mysqli_query($con , $query);
if (mysqli_num_rows($result)==1)
{
	echo "This Email already register";
}
?>