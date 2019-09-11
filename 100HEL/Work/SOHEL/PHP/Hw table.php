<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table cellspacing="0" cellpadding="10" align="center" border="1">
		<?php
		$a=5;
		for ($i=1; $i <= 50; $i++) 
		{ 
			?>
			<tr>
				<td><?php echo "$a";?></td>
				<td><?php echo "*";?></td>
				<td><?php echo "$i";?></td>
				<td><?php echo $a*$i;?></td>
			</tr>
			<?php
		}
		?>
	</table>

</body>
</html>
