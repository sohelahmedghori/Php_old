<html>
<head>
	<title>calender</title>
	<style>
		tr{
			color: red;
		}
		table{
			background-color: yellow;
		}
	</style>
</head>
<body>
<table 
align="center" cellspacing="0" cellpadding="18" border="1">
<tr>
       <td>Sun</td>
       <td>Mon</td>
       <td>Tue</td>
       <td>Wed</td>
       <td>Thr</td>
       <td>Fri</td>
       <td>Sat</td>  </tr>
	<?php
	for($i=1;$i<=31;$i++)
	{
		echo "<td>".$i."</td>";
		if($i==7 || $i==14 || $i==21 || $i==28)
		{
			echo "</tr><tr>";
		}
	}

	?>
</tr>
</table>
</body>
</html>