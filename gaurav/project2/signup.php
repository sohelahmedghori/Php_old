<?php
include("header.php");
?>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12 border bg-dark">
			<h3>User Signup</h3>
		</div>
	</div>

<div class="row">
	<div class="col-md-8 offset-md-2 my-2">
		<form action="save.php" method="post" enctype="multipart/form-data">
		<div class="card">
			<div class="card-header">
				Registration
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" class="form-control" name="fullname" placeholder="fullname">
				</div>
				<div class="form-group">
					<label>E-mail</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form-control">
				</div>
				<div class="form-group">
					<label>Profile Pic</label>
					<input type="file" name="image" class="form-control">
				</div>
				<?php
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
				<div class="form-group">
					<label>Address</label>
					<textarea class="form-control" name="address"></textarea>
				</div>
				<div class="form-group">
					<label>Gender</label>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
				</div>
				<div class="form-group">
					<label>City</label>
					<select class="form-control" name="city">
						<option>Indore</option>
						<option>Mumbai</option>
						<option>Pune</option>
						<option>Delhi</option>
					</select>
				</div>

			</div>
			<div class="card-footer">
				<input type="submit" value="Signup" class="btn btn-success">
			</div>
		</div>
	</form>
	</div>
</div>
</div>

<?php
include("footer.php");
?>