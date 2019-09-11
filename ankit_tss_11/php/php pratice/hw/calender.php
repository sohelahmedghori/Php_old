<html>
<head>
	<title>calender</title>
	<style type="text/css">
		table {
			background-color: #FEF284;
			/*border-radius: 1px solid #FFF486;*/
			/*color: #FFF486;*/
		}
		table tr td:hover{
			background-color: yellow;
			color: #000;
		}
	</style>
</head>
<body>
	<table align="center" border="1"	cellpadding="20" cellspacing="0">
		<tr>
			<td>Sun</td>
			<td>Mon</td>
			<td>Tue</td>
			<td>Wed</td>
			<td>Thu</td>
			<td>Fri</td>
			<td>Sat</td></tr>
			<?php
				for ($i=1; $i <=31 ; $i++)
					 { 
				
						echo "</td><td>$i";
				if ($i==7 || $i==14 || $i==21 || $i==28)
					 {
								echo "</tr><tr>";
						}			
						}

			?>
		</tr>
	</table>
</body>
</html>