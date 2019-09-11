<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center" cellpadding="10" cellspacing="0" border="1">
		<tr>
			<?php
			for ($i=1; $i <=31; $i++) 
			{ ?> 
				<td><?php echo $i; ?></td>
			<?php
			if ($i==7 || $i==14 || $i==21 || $i==28) 
			{?>
				</tr><tr>
			<?php
			}
			}
			?>
		</tr>
		
	</table>
</body>
</html>