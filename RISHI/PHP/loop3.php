<?php
$a=604550;
$b=50000;
$c=8000;
$d=7000;

if($a > $b)// A big B
{
	if($a > $c) // A big C
	{
		if($a > $d) // A big D
		{
			echo "a is greater";
		}
		else // D big A
		{
			echo "d is greater";
		}
	}	
	else // C big A
	{
		if($c > $d)
		{
			echo "c is greater";
		}	
		else
		{
			echo "d is greater";
		}
	}
}	
else
{
	echo "b is greater";
}

?>