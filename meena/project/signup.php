<?php 
include("header.php");
?>
		<div class="container border col-md-8">
			<h4 class="bg-info text-light my-4 px-4 py-2">User Sign-up</h4>
			<div class=" offset-md-2 col-md-8 mb-4">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Registration</div>
				</div>
				<form action="signupdata.php" method="post">
					<div class="card-body" style="background-color: #E9EBEE">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" name="full_name" placeholder="Full Name" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Username/Email</label>
							<input type="text" name="username" placeholder="Username/Email" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" placeholder="Password" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Re-Password</label>
							<input type="password" placeholder="Re-Password" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Gender</label>
							<input type="radio" name="gender" value="male" />Male
							<input type="radio" name="gender" value="female" />Fe-Male
						</div>	
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name="address" placeholder="Address"></textarea>
						</div>	
						<div class="form-group">
							<label>Contact</label>
							<input type="text" name="contact" placeholder="contact" class="form-control"/>
						</div>	
						<div class="form-group">
							<label>City</label>
							<select name="city" class="form-control">
								<option>Select</option>
								<option>Indore</option>
								<option>Ujjain</option>
								<option>Bhopal</option>
								<option>Jabalpure</option>
							</select>
						</div>				
					</div>

						<div class="card-footer">
							<input type="submit" class="btn btn-info" value="Sign-up">
						</div>
				</form>
			</div>
		</div>
		</div>
<?php  
include("footer.php");
?>		