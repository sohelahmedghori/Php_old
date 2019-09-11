<?php
$con = mysqli_connect("localhost", "root", "", "tss_11");
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