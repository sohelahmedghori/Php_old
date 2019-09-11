<?php
$con = mysqli_connect("localhost","root","","onlineshop");
$q = $_POST['demo1'];
$r = $_POST['demo2'];

$query1 ="INSERT INTO student(name,fee) VALUES('$q','$r')";
mysqli_query($con,$query1);

$query ="SELECT * FROM student";
$result = mysqli_query($con,$query);
while($data = mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>";
	echo $data['name'];
	echo "</td>";
	echo "<td>";
	echo $data['fee'];
	echo "</td>";
	echo "</tr>";
}

?>