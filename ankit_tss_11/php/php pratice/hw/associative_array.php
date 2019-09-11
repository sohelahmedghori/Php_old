<?php
$a= array();
	$a["name"]="Rohit";
	$a["age"]=25;
	$a["city"]="Indore";
	$a["gender"]="male";
	$a["contact"]=91860262;
	$a["mail"]="rohit@gmail.com";
	// print_r($a);
	echo $a["name"]; 
?>
<table align="center" border="1" cellpadding="10" cellspacing="0">
	<h1 align="center">Imformation about "Rohit"</h1>
	<tr>
		<td>Name</td>
		<td><?php echo $a['name']?></td>
	</tr>
	<tr>
		<td>Age</td>
		<td><?php echo $a['age']?></td>
	</tr>
	<tr>
		<td>City</td>
		<td><?php echo $a['city']?></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><?php echo $a['gender']?></td>
	</tr>
	<tr>
		<td>Contact</td>
		<td><?php echo $a['contact']?></td>
	</tr>
	<tr>
		<td>E-Mail</td>
		<td><?php echo $a['mail']?></td>
	</tr>
	
</table>