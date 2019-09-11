<?php
// print_r($_GET);
$a=$_GET['pid'];
if (isset($_COOKIE['cart']))
{
	$x=$_COOKIE['cart'];
	$y=$x."#".$a;
	setcookie("cart", $y,time()+20000);
}
else
{
	setcookie("cart", $a, time()+20000);
}
header("location:index.php");
?>