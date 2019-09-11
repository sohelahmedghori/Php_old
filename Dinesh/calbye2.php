

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<table align="center" cellpadding="10" cellspacing="0" border="1">
    <?php 

     $p=1;

     for ($i=1; $i<=5; $i++) 
     { 
     	?><tr><?php

     	if ($i==5) 
     	{ 
     	   for ($j=1; $j<=3; $j++)
     	    { 
     	      ?><td><?php echo $p ; ?></td><?php
     	       $p++;       
     	    }    
     	}
     	else
     	{
     		for ($j=1; $j<=7 ; $j++) 
     	{ 
     	 ?><td><?php  echo $p;	 ?></td><?php
     	  $p++;
     	}
     	
               
        }
        ?></tr><?php
     	}

 ?>   	

 	</table>
 
 </body>
 </html>