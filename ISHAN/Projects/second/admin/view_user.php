<?php
	include("../db.php");
	if (! isset($_SESSION['is_user_logged_in'])) {
		header("location:index.php");
	}
	include("header.php");
	$query = "SELECT * FROM user";
	$result = mysqli_query($con,$query);
?>

<div class="row">
	<div class="col-md-12">
		<h3 class="text-center">View All User's</h3>
		<table class="table table-dark table-bordered table-hover mt-4 pt-4">
			<tr>
				<th>S.No.</th>
				<th>User Name</th>
				<th>Gender</th>
				<th>City</th>
				<th>Status</th>
				<th>Change</th>
			</tr>
			<?php
			while($data = mysqli_fetch_assoc($result))
			{?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['full_name']; ?></td>
				<td><?php echo $data['gender']; ?></td>
				<td><?php echo $data['city']; ?></td>
				<td>Active</td>
				<td><a  class="btn btn-info" href="#">Change</a></td>
			</tr>
		<?php	}
			?>
		</table>
	</div>
</div>