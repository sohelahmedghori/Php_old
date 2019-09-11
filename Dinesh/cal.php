<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

     <table align="center" border="1" cellspacing="0" cellpadding="30">
	<tr>
<?php
 
     for ($i=1; $i<=31  ; $i++) 
    { 
      ?> <td> <?php
   echo $i;  
        ?> </td> <?php
       if ($i%7==0) {
       	 echo "</tr><tr>";
       }
         
     }



?>
	#table 
</tr>

</table>
 
</body>
</html>

















