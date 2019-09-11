


<!-- foreach loop only use for array -->




<?php
$arr=array("name" => "meena" , "age" => 25, "city" => "indore" );
foreach ($arr as $a => $x) {
	echo $a." : ".$x;
	echo "<br/>";
}
?>
<br/>
<br/>
<?php
foreach ($arr as $x){
	echo $x;
	echo"</br>";
}

?>