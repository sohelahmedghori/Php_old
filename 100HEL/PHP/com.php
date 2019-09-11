<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$a=111;
		$b=222;
		$c=333;
		$d=444;
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