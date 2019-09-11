<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
$query = "SELECT * FROM user WHERE id = ".$_SESSION['id'];
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
?>
<div class="col-md-9 p-4 my-2 border">
	<div class="row">
		<div class="col-md-12">
			<h4 class="bg-secondary text-light px-4 py-2">My Profile</h4>
		</div>
	</div>
		<div class="row">
			<div class="col-md-10 offset-1">
				<table class="table table-dark table-bordered table-hover">
					<tr>
						<td>Full Name</td>
						<td><?php echo $data['fullname'];?></td>
					</tr>
					<tr>
						<td>Profile Picture</td>
						<td><img src="user_image/<?php echo $data['image'];?>" height="50" width="50"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $data['email'];?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo $data['address'];?></td>
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
				<a href="change_password.php" class="btn btn-info">Change Password</a>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>