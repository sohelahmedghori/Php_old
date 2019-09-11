<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");

$query =" SELECT * FROM user WHERE id =".$_SESSION['id'];
$result = mysqli_query($con, $query);

$data = mysqli_fetch_assoc($result);
// print_r($data);
?>
<div class="col-md-9 mb-1">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary py-4 pl-2 text-light">Updation Page</h4>
				</div>
			</div>
<div class="row">
	<div class="col-sm-8 offset-2">
		<div class="card">
			<div class="card-body">
				<form action="update_profile.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="full_name" class="form-control" value="<?php echo $data['full_name']; ?>" >
					</div>
					<div class="form-group">
						<label>Email Id</label>
						<input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" disabled="disabled">
					</div>
					<div class="form-group">
						<label>Gender </label>
						<input <?php if($data['gender'] == "male") echo "checked='checked'"; ?> type="radio" name="gender" value="male">Male
						<input <?php if($data['gender'] == "female") echo "checked='checked'"; ?> type="radio" name="gender" value="female">Female
					</div>
					<div class="form-group">
						<label>Address </label>
						<textarea class="form-control" name="add"><?php echo $data['address']; ?></textarea>
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" name="contact" class="form-control"  value="<?php echo $data['contact']; ?>">
					</div>
					<div>
						<label>Current Image</label>
						<img src="upload_img/<?php echo $data['image_name']; ?>" height="80" width="80">
					</div>
					<div class="form-group">
						<label>Image File</label>
						<input type="file" name="image" class="form-control">
						<p class="text-danger text-center">
						<?php
							if (isset($_SESSION['msg'])) {
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
						?>
					</p>
					</div>
					<div class="form-group">
						<label>City</label>
						<select class="form-control" name="city">
							<option>SELECT</option>

							<option <?php if($data['city']=="INDORE") echo "selected ='selected'" ?>>INDORE</option>
							<option <?php if($data['city']=="BHOPAL") echo "selected ='selected'" ?>>BHOPAL</option>
							<option <?php if($data['city']=="JABALPUR") echo "selected ='selected'" ?>>JABALPUR</option>
							<option <?php if($data['city']=="KATNI") echo "selected ='selected'" ?>>KATNI</option>
							<option <?php if($data['city']=="UJJAIN") echo "selected ='selected'" ?>>UJJAIN</option>
							<option <?php if($data['city']=="DELHI") echo "selected ='selected'" ?>>DELHI</option>
						</select>
					</div>
			<div class="card-footer">
				<input type="submit" class="btn btn-success" value="Update">
			</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
<?php
		include("footer.php");
?>

