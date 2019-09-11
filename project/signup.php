<?php
include("db.php");
include("header.php");
?>
<script type="text/javascript" src="js/val.js"></script>

		<div class="col-md-9 border p-4">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary text-light px-4 py-2">User Signup</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header">
							Registration
						</div>
						<div class="card-body">
							<form action="save.php" method="post" enctype="multipart/form-data">
								
								<div class="form-group">
									<label>Full Name</label>
									<input id="full_name" type="Text" name="full_name" placeholder="Full Name" class="form-control">
									<p class="text-danger" id="full_name_msg"></p>
								</div>
								
								<div class="form-group">
									<label>Profile Pic</label>
									<input type="file" id="profile_pic" name="image" placeholder="Full Name" class="form-control">
									<p class="text-danger" id="profile_pic_msg"></p>
								</div>
								<div class="form-group">
									<label>Username/Email</label>
									<input type="Text" id="username" name="username" placeholder="Username" class="form-control">
									<p class="text-danger" id="username_msg"></p>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" id="pass" name="pass" placeholder="Password" class="form-control">
									<p class="text-danger" id="pass_msg"></p>
								</div>
								<div class="form-group">
									<label>Re-Password</label>
									<input type="password" id="re_pass" placeholder="Re-Password" class="form-control">
									<p class="text-danger" id="re_pass_msg"></p>
								</div>
								<div class="form-group">
									<label>Gender</label>
									<input value="male" type="radio" id="male" name="gender" />Male
									<input value="female" type="radio" id="female" name="gender" />Female
									<p class="text-danger" id="gender_msg"></p>
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" id="add" name="add" placeholder="Address"></textarea>
									<p class="text-danger" id="add_msg"></p>
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="text" name="contact" id="contact" placeholder="Contact" class="form-control">
									<p class="text-danger" id="contact_msg"></p>
								</div>
								<div class="form-group">
									<label>City</label>
									<select class="form-control" name="city" id="city">
										<option>Select</option>
										<option>Indore</option>
										<option>Bhopal</option>
										<option>Mumbai</option>
										<option>Pune</option>
										<option>Select</option>
									</select>
									<p class="text-danger" id="city_msg"></p>
								</div>
								

						</div>
						<div class="card-footer">
							<input type="submit" id="submit" value="Signup" class="btn btn-success">
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
