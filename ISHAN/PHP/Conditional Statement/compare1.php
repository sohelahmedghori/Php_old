<!DOCTYPE html>
<html>
<head>
	<title>Compare 4 Number</title>
	<style>
		#main{
			height: 300px;
			width: 100%; 
		}
		#a1{
			float: left;
			width: 500px;
			height: 300px;
			background-color: yellow;
		}
		#a2{
			float: right;
			width: 500px;
			height: 300px;
			background-color: aqua;
		}
		h1{
			color: red;
			text-align: center;
		}
	</style>
</head>
<body>
<div id="main">
<div id="a1">
	<h1>1.THIS IS THE LONG WAY TO COMPARE 4 NUMBERS</h1><hr>
<?php
//--------------------1.THIS IS THE LONG WAY TO COMPARE 4 NUMBERS-------------------------
$a =900;
$b =120;
$c =7000;
$d =60000;

if ($a>$b) {
	if ($a>$c) {
		if ($a>$d) {?>
	<h1><?php
			echo "A is greater";?>
	</h1><?php
		}
		else{?>
	<h1><?php
			echo "D is greater";?>
	</h1><?php
		}
	}
	else{?>
	<h1><?php
		echo "C is greater";?>
	</h1><?php
	}
}
else{
	if ($b>$c) {
		if ($b>$d) {?>
	<h1><?php
			echo "<h1>B is greater";?>
	</h1><?php
		}
		else{?>
	<h1><?php
			echo "D is greater";?>
	</h1><?php
		}
	}
	else{?>
	<h1><?php
		echo "C is greater";?>
	</h1><?php
	}
}


?>

</div>

<div id="a2">
	<h1>2.THIS IS THE SHORT WAY TO COMPARE 4 NUMBERS</h1><hr>
<?php
//-------------------2.THIS IS THE SHORT WAY TO COMPARE 4 NUMBERS-------------------------
$a =100;
$b =900;
$c =5000;
$d =60000;

if ($a>$b && $a>$c && $a>$d) {
	?>
	<h1><?php
	echo "A is greater";?>
	</h1><?php
}
elseif ($b>$c && $b>$d) {
	?>
	<h1><?php
	echo "B is greater";?>
	</h1><?php
}
elseif ($c>$d && $c>$b) {
	?>
	<h1><?php
	echo "C is greater";?>
	</h1><?php
}
else{
	?>
	<h1><?php
	echo "D is greater";?>
	</h1><?php
}
?>
</div>
</div>
</body>
</html>

