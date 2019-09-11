<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a =9000;
$b =120;
$c =700;
$d =6000;

if ($a>$b) {
			if ($a>$c) {
				if ($a>$d) {
					echo "A is Greater";
				}
				else{
					echo "D is Greater";
				}
			}
			else{
				echo "C is Greater";
			}
		}
		else{
			if ($b>$c) {
				if ($b>$d) {
					echo "B is Greater";
				}
				else{
					echo "D is Greater";
				}
			}
			else{
				echo "C is Greater";
			}
		}


?>
</body>
</html>