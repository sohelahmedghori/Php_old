<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");

$query = "SELECT * FROM user WHERE id = ".$_SESSION['id'];

$result = mysqli_query($con,$query);

$data = mysqli_fetch_assoc($result);

?>
<div class="col-md-7 m-4 p-4">
	<div class="row">
		<div class="col-md-10 offset-1">
			<table class="table table-secondary table-border table-hover">
				<tr>
					<td>Full Name</td>
					<td><?php echo $data['full_name'] ?></td>
				</tr>
				<tr>
					<td>Profile Pic</td>
					<td><img src="upload_img/<?php echo $data['image_name'] ?>" height="60" width="60"></td>
				</tr>
				<tr>
					<td>Email ID</td>
					<td><?php echo $data['username'] ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $data['address'] ?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $data['city'] ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $data['gender'] ?></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><?php echo $data['contact'] ?></td>
				</tr>
			</table>
			<a href="edit_profile.php" class="btn btn-info">Edit Profile</a>
			<a href="#" class="btn btn-info">Change Password</a>
		</div>
	</div>
</div>