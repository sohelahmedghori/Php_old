<?php
include("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$query="SELECT * FROM user";
$result=mysqli_query($con, $query);
?>
<div class="container">
	<h3>View All User</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-border table-dark table-hover">
				<tr>
					<th>Sr.No</th>
					<th>Full Name</th>
					<th>User Name</th>
					<th>Contact</th>
					<th>Status</th>
					<th>Change</th>
				</tr>
				<?php
				while ($data=mysqli_fetch_assoc($result))
				{?>
					<tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['fullname']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['contact']; ?></td>
						<td>Active</td>
						<td><a href="#" class="btn btn-info">Change</a></td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>