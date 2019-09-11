<?php
$con = mysqli_connect("localhost", "admin", "admin", "tss_11");

$a = $_POST['s_name'];
$b = $_POST['fee'];

$n=0;
foreach($a as $x)
{
	$c = $b[$n];
	$query = "INSERT INTO student (name, fee) VALUES ('$x', '$c')";
	mysqli_query($con, $query);
	$n++;
	
}
header("location:tast.php");

?>