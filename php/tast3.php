<?php
$a = 15;
$b = 20;
$c = 12;
$d = 7;

if($a > $b)
{
	if($a > $c)
	{
		if($a > $d)
		{
			echo "A is greater";
		}
		else
		{
			echo "D is greater";
		}
	}
	else
	{
		if($c > $d)
		{
			echo "C is greater";
		}
		else
		{
			echo "D is greater";
		}
	}
}
else
{
	
}


?>