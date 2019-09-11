<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" border="1" cellspacing="0" cellpadding="20">
	<tr>	
	<?php
	for($i=1; $i<=31; $i++)
	{
		echo "<td>".$i."</td>";
		if($i==7 || $i==14 || $i==21 || $i==28)
		{
			echo "</tr><tr>";
		}
		// if($i%7==0)
		// {
		// 	echo "</tr><tr>";
		// }

	}

	?>
	</tr>
	


</table>
</body>
</html>