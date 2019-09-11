<?php
$con = mysqli_connect("localhost", "root", "", "tss_11");
$a = $_POST['id'];
$que = "SELECT * FROM city WHERE state_code=$a";
$result = mysqli_query($con, $que);
echo "<option>Select</option>";
while($data=mysqli_fetch_assoc($result))
{
	echo "<option>".$data['city_name']."</option>";
}

?>