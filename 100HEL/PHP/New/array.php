<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center" cellpadding="10" cellspacing="0" border="1">
		<?php
			$a = array("name"=>"Rohit", "age" => 25, "city" => "Indore", "gender"=>"Male", "contact"=>228899, "Email"=>"rohit@gmail.com");
			?>
			<tr>
				<td>Name</td>
				<td><?php echo $a["name"]; ?></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><?php echo $a["age"]; ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td><?php echo $a["city"]; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $a["gender"]; ?></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><?php echo $a["contact"]; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $a["Email"]; ?></td>
			</tr>
	</table>

</body>
</html>