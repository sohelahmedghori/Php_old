<?php
// print_r($_GET);
$a = $_GET['pid'];

if(isset($_COOKIE['cart']))
{
	$x = $_COOKIE['cart'];
	$y = $x."#".$a;
	setcookie("cart", $y, time()+3600);
	
}
else
{
	setcookie("cart", $a, time()+3600);
}


header("location:index.php");
?>