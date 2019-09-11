<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table cellspacing="0" cellpadding="10" align="center" border="1">
		<?php
		for ($i=1; $i <= 50; $i++) 
		{ 
			?>
			<tr>
				<td>5</td>
				<td>x</td>
				<td><?php echo $i;?></td>
				<td>=</td>
				<td><?php echo 5*$i;?></td>
			</tr>
			<?php
		}
		?>
	</table>

</body>
</html>
