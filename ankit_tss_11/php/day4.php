<html>
<head>
	<title>day4</title>
</head>
<body>
		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	 
	<?php 
echo "<p>";
	 ?>

<h1 align="center"	>php Table Pratic</h1>
<table border="1px" cellspacing="0" cellpadding="15" align="center">
	<tr>
		<td>5</td>
		<td>*</td>
		<td>1</td>
		<td>=</td>
		<td>5</td>
	</tr>
	<tr>
		<td>5</td>
		<td>*</td>
		<td>2</td>
		<td>=</td>
		<td>10</td>
	</tr>
	<tr>
		<td>5</td>
		<td>*</td>
		<td>3</td>
		<td>=</td>
		<td>15</td>
	</tr>
	<tr>
		<td>5</td>
		<td>*</td>
		<td>4</td>
		<td>=</td>
		<td>20</td>
	</tr>
	<tr>
		<td>5</td>
		<td>*</td>
		<td>5</td>
		<td>=</td>
		<td>25</td>
	</tr>
	<tr>
		<td>5</td>
		<td>*</td>
		<td>6</td>
		<td>=</td>
		<td>30</td>
	</tr>
	<tr>
		<td>5</td>
		<td>*</td>
		<td>7</td>
		<td>=</td>
		<td>35</td>
	</tr>
	<tr>
		<td>5</td>
		<td>*</td>
		<td>8</td>
		<td>=</td>
		<td>40</td>
	</tr>
	<tr>
		<td>5</td>
		<td>*</td>
		<td>9</td>
		<td>=</td>
		<td>45</td>
	</tr>
	<tr>
		<td>5</td>
		<td>*</td>
		<td>10</td>
		<td>=</td>
		<td>50</td>
	</tr>

</table>


























<?php
for ($i=5; $i <=19 ; $i++) { 
	echo 5;

}

?>.
<br><br><br><br>
<table align="center" cellspacing="0" cellpadding="10">
<?php
for ($i=20; $i <=19 ; $i++) { 
	echo $i;

}

?>
<?php
for ($i=5; $i <=19 ; $i++) { 
	echo 5;
?>
<br>
<?php
}

?>
<?php
for($i=1; $i<=10; $i++)
{
	// echo"tr";
	// echo"$i";
	// echo"td";
	// echo"<tr/>";
	// echo"<td/>";

?>
<tr>
<td><?php echo$i*5;?></td>

</tr>
<?php

}
?>
</table></body>
</html> 