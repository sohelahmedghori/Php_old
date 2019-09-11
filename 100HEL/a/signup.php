<?php
include("db.php");
include("header.php");
?>
<script type="text/javascript" src="js/val.js"></script>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-12">
				<h3 class="bg-secondary text-light my-2 p-1">User Signup</h3>
			</div>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="card">
					<div class="card-header">
						<h4 class="m-0">Signup</h4>
					</div>
					<div class="card-body">
						<form action="save.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" id="fullname" name="fullname" placeholder="Full Name" class="form-control">
							<p id="fullname_msg" class="text-danger"></p>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" id="email" name="email" placeholder="Email" class="form-control">
							<p id="email_msg" class="text-danger"></p>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" id="password" name="pass" placeholder="Password" class="form-control">
							<p class="text-danger" id="password_msg"></p>
						</div>
						<div class="form-group">
							<label>Re-Password</label>
							<input type="password" placeholder="Re-Password" id="re-password" class="form-control">
							<p id="re-password_msg" class="text-danger"></p>
						</div>
						<div class="form-group">
							<label>Profile Picture</label>
							<input type="file" name="profile_image" id="profile_image" class="form-control">
							<p id="profile_image_msg" class="text-danger"></p>
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
							<input type="radio" name="gender" value="Male" id="male">Male
							<input type="radio" name="gender" value="Female" id="female">Female
							<p class="text-danger" id="gender_msg"></p>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name="add" id="address" placeholder="Address"></textarea>
							<p class="text-danger" id="address_msg"></p>
						</div>
						<div class="form-group">
							<label>City</label>
							<select class="form-control" name="city" id="city">
								<option>Select</option>
								<option>Indore</option>
								<option>Bhopal</option>
								<option>Mumbai</option>
								<option>Pune</option>
								<option>Udaipur</option>
							</select>
							<p class="text-danger" id="city_msg"></p>
						</div>
						<div class="form-group">
							<label>Contact</label>
							<input type="text" name="contact" id="contact" placeholder="Contact" class="form-control">
							<p class="text-danger" id="contact_msg"></p>
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Submit" id="submit" class="btn btn-success">
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