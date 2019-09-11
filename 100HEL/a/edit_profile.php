<?php
include("db.php");
include("header.php");
$id=$_SESSION['id'];//b/c we use session so we don't required hidden input type//
$query="SELECT * FROM user WHERE id=$id";
$result=mysqli_query($con, $query);
$data=mysqli_fetch_assoc($result);
/*print_r($data);
die;*/
?>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-12">
				<h3 class="bg-secondary text-light my-2 p-1">Update Profile</h3>
			</div>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="card">
					<div class="card-header">
						<h4 class="m-0">Profile</h4>
					</div>
					<div class="card-body">
						<form action="update_profile.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" name="fullname" value="<?php echo $data['fullname']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label><!-- disabled use for no change inemail b/c this is uniqe-->
							<input type="text" disabled="disabled" name="email" value="<?php echo $data['email']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Current Picture</label>
							<img src="user_image/<?php echo $data['image']; ?>" height="80" width="80">
						</div>
						<div class="form-group">
							<label>Profile Picture</label>
							<input type="file" name="profile_image" class="form-control">
							<p class="text-danger">
								<?php
								if (isset($_SESSION['msg']))
								{
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}
								?>
							</p>						
						</div>
						<div class="form-group">
							<label>Gender</label>
							<input <?php if($data['gender']=="Male") echo "checked='checked'"; ?> type="radio" name="gender" value="Male" >Male
							<input <?php if($data['gender']=="Female") echo "checked='checked'"; ?> type="radio" name="gender" value="Female" >Female
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name="add" placeholder="Address"><?php echo $data['address']; ?></textarea>
						</div>
						<div class="form-group">
							<label>City</label>
							<select class="form-control" name="city">
								<option>Select</option>
								<option <?php if($data['city']=="Delhi") echo"selected='selected'";?>>Delhi</option>
								<option <?php if($data['city']=="Indore") echo"selected='selected'";?>>Indore</option>
								<option <?php if($data['city']=="Bhopal") echo"selected='selected'";?>>Bhopal</option>
								<option <?php if($data['city']=="Mumbai") echo"selected='selected'";?>>Mumbai</option>
								<option <?php if($data['city']=="Pune") echo "selected='selected'";?>>Pune</option>
								<option <?php if($data['city']=="Udaipur") echo "selected='selected'";?>>Udaipur</option>
							</select>
						</div>
						<div class="form-group">
							<label>Contact</label>
							<input type="text" name="contact" value="<?php echo $data['contact'];?>" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Submit" class="btn btn-success">
						<a href="index.php" class="btn btn-danger">Close</a>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php")
?>