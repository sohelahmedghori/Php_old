 <?php  
$a=array("a"=>"red","b"=>"green","c"=>"blue");
$b=array("a"=>"red","b"=>"green");
$c=array_fill(3,5,"blue");
$d=array_fill(4,2,"white");
$e=array("white","black","rohit");
$result=array_diff($a, $b);

print_r($result);

print_r($c);
echo "<br>";
print_r($d);

echo "<hr/>";

$result=array_flip($a);
print_r($result);


echo "<hr/>";


$result=array_pop($e);
print_r($result);
?>