	<?php
include("db.php");
include("header.php");
$id = $_SESSION['id'];
$query = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
// print_r($data);

?>
		<div class="col-md-9 border p-4">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary text-light px-4 py-2">Profile Update</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header">
							Update
						</div>
						<div class="card-body">
							<form action="update.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>Full Name</label>
									<input value="<?php echo $data['full_name'];?>" type="Text" name="full_name" placeholder="Full Name" class="form-control">
									</div>
								<div class="form-group">
									<label>Profile Pic</label>
									<input type="file" name="image"  class="form-control">
								</div>
								<div class="form-group">
									<label>Current Pic</label>
									<img src="user_image/<?php echo $data['image'];?>" height="100" width="100" />
								</div>
								<div class="form-group">
									<label>Username/Email</label>
									<input disabled="disabled" value="<?php echo $data['username'];?>" type="Text" name="username" placeholder="Username" class="form-control">
								</div>
								
								<div class="form-group">
									<label>Gender</label>
									<input <?php if($data['gender']=="male") echo "checked='checked'"; ?> value="male" type="radio" name="gender" />Male
									<input <?php if($data['gender']=="female") echo "checked='checked'" ; ?> value="female" type="radio" name="gender" />Female
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" name="add" placeholder="Address"><?php echo $data['address'];?></textarea>
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="text" value="<?php echo $data['contact'];?>" name="contact" placeholder="Contact" class="form-control">
								</div>
								<div class="form-group">
									<label>City</label>
									<select class="form-control" name="city">
										<option>Select</option>
										<option <?php if($data['city']=="Indore") echo "selected='selected'"; ?>>Indore</option>
										<option <?php if($data['city']=="Bhopal") echo "selected='selected'"; ?>>Bhopal</option>
										<option <?php if($data['city']=="Mumbai") echo "selected='selected'"; ?>>Mumbai</option>
										<option <?php if($data['city']=="Pune") echo "selected='selected'"; ?>>Pune</option>
									</select>
								</div>
								

						</div>
						<div class="card-footer">
							<input type="submit" value="Update" class="btn btn-success">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
