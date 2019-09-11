<?php
$a = 1000;
$b = 210;
$c = 500;

if($a > $b)
{
	if($a > $c)
	{
		echo "A is greater";
	}
	else
	{
		echo "C is greater";
	}
}
else
{
	if($b > $c)
	{
		echo "B is greater";
	}
	else
	{
		echo "C is greater";
	}
}
?>