<?php

$a =10;
$b =20;
$c =30;

if ($a<$b) {
	
	echo "A is LessThen B";
}
elseif ($b<$c) {
	
	echo "B is LessThen C";
}
else{
	echo "C is GreaterThen A & B";
}
?>
<br>
<?php
$i =10;
$j =20;
$k =30;

if ($i>$j) {
	
	echo "I is GreaterThen J";
}
elseif ($j<$k) {
	
	echo "J is LessThen K";
}
else{
	echo "K is GreaterThen I & J";
}
?>
<br>
<?php
$x =10;
$y =20;
$z =30;

if ($x>$y) {
	
	echo "I is GreaterThen J";
}
elseif ($y>$z) {
	
	echo "J is LessThen K";
}
else{
	echo "Z is GreaterThen X & Y";
}
?>
<br>
<?php
/* prob.1*/
$x=5;
echo $x;  echo "<br>";
echo $x++ + $x++;  echo "<br>";
echo $x;   echo "<br>";
echo $x-- - $x--;   echo "<br>";
echo $x;echo "<br>";
?> 
