<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" border="1" cellspacing="0" cellpadding="10">
	<?php
	for($i=1; $i<=10; $i++)
	{ ?>

		<tr>
			<td>5</td>
			<td>x</td>
			<td><?php echo $i; ?></td>
			<td>=</td>
			<td><?php echo $i*5; ?></td>
		</tr>

	<?php
	}
	?>

</table>
<Br />
<table align="center" border="1" cellspacing="0" cellpadding="10">
	<?php
	for($i=1; $i<=10; $i++)
	{
		echo "<tr>";
		echo "<td>7</td>";
		echo "<td>x</td>";
		echo "<td>".$i."</td>";
		echo "<td>=</td>";
		echo "<td>".($i*7)."</td>";
		echo "</tr>";
	}
	?>
</table>





</body>
</html>