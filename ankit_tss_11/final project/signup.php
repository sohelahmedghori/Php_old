<?php
include("common-files/header.php");
include("common-files/slider.php");
?>
<div class="container my-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card">
				<div class="card-header">
					<h3>Sign up</h3>
				</div>
				<div class="card-body">
					<form class="font-weight-bold" action="common-files/save.php" method="post" >
						<div class="form-group">
							<label>Full-Name</label>
							<input type="text" class="form-control" placeholder="Enter your full name" name="fullname"> 
						</div>
						<div class="from-group">
							<label>Email id</label>
							<input type="text" class="form-control" placeholder="Enter your mail mail id" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control"	name="password">
						</div>
						<div class="form-group">
							<label>Re-type Password</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Gender</label><br>
							<div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" name="gender" value="male">
									<label class="form-check-label" class="">Male</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" name="gender" value="female">
									<label class="form-check-label" class="">Female</label>
							</div>
						</div>
						<div class="form-group">
							<label>Contact No</label>
							<input type="text" class="form-control" name="contact">
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" placeholder="Enter your deliver address" name="add"></textarea>
						</div>
						<div class="form-group">
							<label>City</label>
							<select class="form-control" name="city">
								<option>Select</option>
								<option>Indore</option>
								<option>Bhopal</option>
								<option>Ujjain</option>
								<option>Dewas</option>
								<option>Gwalior</option>
							</select>
						</div>
				</div>
				<div class="card-footer">
					<input type="submit" name="save" value="sign up">
				</div>
					</form>
			</div>
		</div>
	</div>
</div>
<?php
include("common-files/footer.php");
?>