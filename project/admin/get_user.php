<?php
include("../db.php");
$query = "SELECT * FROM user";
$result = mysqli_query($con, $query);
while($data=mysqli_fetch_assoc($result))
{ ?>
	<tr>
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['full_name']; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['contact']; ?></td>
		<td>Active</td>
		<td><a href="#" class="btn btn-info">Change</a></td>
	</tr>
<?php
}
?>