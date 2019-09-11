<?php
$arr = array("name"=>"rohit", "age"=>25);
$arr["city"]="indore";

foreach($arr as $a=>$x)
{
	echo $a." : ".$x;
	echo "<br />";
}
?>