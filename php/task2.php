<?php
for($i=1; $i<=5; $i++)
{
	for($j=1; $j<=$i; $j++)
	{
		echo " * ";

	}
	echo "<Br />";
}
echo "<Hr/>";
for($i=1; $i<=5; $i++)
{
	for($j=$i; $j<=5; $j++)
	{
		echo " * ";

	}
	echo "<Br />";
}
echo "<Hr/>";
for($i=1; $i<=5; $i++)
{
	for($j=5; $j>=$i; $j--)
	{
		echo " * ";
	}
	echo "<Br />";
}
echo "<Hr/>";
for($i=1; $i<=6; $i++)
{
	for($k=$i; $k<=5; $k++)
	{
		echo "&nbsp;&nbsp;";
	}
	$a = $i*2;
		for($j=1; $j<= ($a-1); $j++)
		{
			echo "*";
		}
		echo "<br >";

	
}

echo "<hr />";

$a = 0;
$b = 1;

echo $a;
echo " , ";
echo $b;
echo " , ";
for($i=1; $i<=15; $i++)
{
	$x = $a+$b;
	echo $x;
	echo " , ";
	$a = $b;
	$b = $x;


}

?>