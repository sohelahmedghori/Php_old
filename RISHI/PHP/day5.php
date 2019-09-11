<html>
<head>
	<title></title>
</head>
<body>
	<table align="center" cellspacing="0" cellpadding="8" border="1">
   <?php
      for($i=1;$i<=31;$i++)
      {
      	if($i==7 || $i==14 || $i==28)
      	{
      		"</tr>" "<tr>";
      	}

      	?>


      	<tr>
      		<td><?php echo $i ?></td>
        </tr>
      <?php
  }
   ?>
   </table>
</body>
</html>