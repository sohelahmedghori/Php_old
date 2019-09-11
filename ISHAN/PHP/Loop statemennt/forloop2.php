<!DOCTYPE html>
<html>
<head>
	<title>No. 5 Table</title>
	<style>
		table{
			height: 30px;
			width: 200px;
			margin-left: 350px;
		}
		table,tr,td{
			border:2px solid red;
			border-collapse: collapse; 
			text-align: center;
			font-weight: bolder;
			padding: 5px;
		}
		h1{
			text-align: center;
			color: blue;
		}
        #a1{
            float: left;
        }
        #a2{
            margin-left: 250px;
            float: left;
        }
	</style>
</head>
<h1>This is the Table of Number -- 5</h1>
<body>
    <div id="a1">
<table>
	<?php
	$k =5;
for ($i=1; $i <=50 ; $i++)
{
	for($j=1;$j<=1;$j++)
	{
		?>
		<tr>
		<td><?php echo $k ?></td>
		<td><?php echo "*"?></td>
		<td><?php echo $i?></td>
		<td><?php echo $k*$i?></td>
	</tr>

	<?php
	}
}
?>	
	
</table>
        </div>
    <div id="a2">
    
        <?php
$a=5;
for ($i=1; $i <=50 ; $i++) { 
	echo $a." * ".$i." => ".$a*$i;
	echo "<hr />";
}

?>
        
        
    </div>
</body>
</html>