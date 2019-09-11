<?php
include ("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
?>
<div class="container">
	<h3>Create New Admin</h3>
	<div class="row">
		<div class="col-md-6 offset-3">
			<div class="card">
				<form action="save_admin.php" method="post">
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control">
						</div>
						<div class="form-group">
							<label>Re-Password</label>
							<input type="password" placeholder="Re-password" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Add" class="btn btn-secondary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php")
?>