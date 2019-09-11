<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table cellspacing="0" cellpadding="10" border="1" align="center">

		
	<tr>
		<th>Sun</th>
		<th>Mon</th>
		<th>Tues</th>
		<th>Wed</th>
		<th>Thus</th>
		<th>Fri</th>
		<th>Sat</th>
	</tr>
	<?php
      for($i=1;$i<=31; $i++){
        	echo "</td><td>$i";
        if ($i%7==0)       
         {
       echo "</tr><tr>";
    }
      }


	 ?>
	</tr> 

	</table>
</body>
</html>
