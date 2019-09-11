<?php
// Parametrized Function

function demo($a=10, $b=20) // Creating A function
{
	
	
	$c = 2;
	$x = $a+$b;
	$y = $x/$c;
	echo $y;
}

demo(100, 50);
echo "<Br />";
demo(300, 100);

demo();
demo(50);

?>