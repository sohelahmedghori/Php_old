<?php
include("header.php");
?>
<div class="container">
	<div class="row">
		<h2>Signup Page</h2>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3 my-2">
			<form action="save.php" method="post">
				<div class="card">
					<div class="card-header">
						<h3>Signup</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
								<label>Full Name</label>
								<input type="text" placeholder="Full Name" class="form-control" name="fullname">
							</div>
							<div class="form-group">
								<label>Age</label>
								<input type="text" placeholder="Age" class="form-control" name="age">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<input type="radio" name="gender" value="Male" >Male
								<input type="radio" name="gender" value="Female" >Female
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" placeholder="Address" name="address"></textarea>
							</div>
							<div class="form-group">
								<label>Contact</label>
								<input type="text" class="form-control" placeholder="Contact" name="contact">
							</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Submit" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>