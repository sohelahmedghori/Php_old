<?php
include("db.php");

// Backdoor protaction code
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");

$query = "SELECT * FROM user WHERE id = ".['id'];
$result = mysqli_query($con, $query);

$data = mysqli_fetch_assoc($result);
// print_r($data);


?>
<div class="col-md-9 border p-4">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary text-light px-4 py-2">My Profile</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<table class="table table-dark table-bordered table-hover">
						<tr>
							<td>Full Name</td>
							<td><?php echo $data['full_name'];?></td>
						</tr>
						<tr>
							<td>Profile Pic</td>
							<td><img src="user_image/<?php echo $data['image'] ?>" height="80" width="80" /></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><?php echo $data['username'];?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><?php echo $data['address'];?></td>
						</tr>
						<tr>
							<td>City</td>
							<td><?php echo $data['city'];?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $data['gender'];?></td>
						</tr>
						<tr>
							<td>Contact</td>
							<td><?php echo $data['contact'];?></td>
						</tr>
					</table>
					<a href="edit_profile.php" class="btn btn-info">Edit Profile</a>
					<a href="change_pass.php" class="btn btn-info">Change Password</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
