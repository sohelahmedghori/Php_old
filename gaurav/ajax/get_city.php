<?php
$con = mysqli_connect("localhost","root","","onlineshop");

$a = $_POST['state'];
// echo $a; die;
$query1 = "SELECT * FROM cityname where state_id=$a";
$result1 = mysqli_query($con,$query1);

echo "<option>Select</option>";

while($data = mysqli_fetch_assoc($result1))
{
	echo "<option>".$data['cityname']."</option>";
}



?>