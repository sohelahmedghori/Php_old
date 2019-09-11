<?php
	include("../db.php");
	if (! isset($_SESSION['is_user_logged_in'])) {
		header("location:index.php");
	}
	include("header.php");
?>
<div class="container">
	<h3>Create New Admin</h3>
	<div class="row">
		<div class="col-md-8 offset-2">
			<form action="add_new_admin.php" method="post">
				<div class="card">
					<div class="card-header">
						<h4>Enter New Admin Details</h4>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" placeholder="Enter Username Here" class="form-control">
						</div>
					<div class="form-group">
							<label>Password</label>
							<input type="text" name="password" placeholder="Enter Password Here" class="form-control">
						</div>
						<div class="form-group">
							<label>Re-Password</label>
							<input type="text" name="password" placeholder="Enter Password Again" class="form-control">
						</div>
					<div class="card-footer">
						<input type="submit" value="Add Admin">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>