<?php
$m=9;
$r=10;
if ($m==9 || $r==9) {
	echo "july";
}
elseif ($m==2) {
	echo"march";
}
elseif ($m==9 && $r==10) {
	echo"true";	
}
else {
	echo "false";
}
echo "<br/> NOTE:As soon as one condition of ELSEIF is correct, the statement ends, while IF examines all the circumstances after one.";
?>