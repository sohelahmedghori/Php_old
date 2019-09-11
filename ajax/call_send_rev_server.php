<?php
$con = mysqli_connect("localhost", "admin", "admin", "tss_11");
$a = $_POST['name'];
$b= $_POST['fee'];

$query1 = "INSERT INTO student (name, fee) VALUES ('$a', '$b')";
mysqli_query1($con, $query1);


$query = "SELECT * FROM student";
$result = mysqli_query($con, $query);
while($data=mysqli_fetch_assoc($result))
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