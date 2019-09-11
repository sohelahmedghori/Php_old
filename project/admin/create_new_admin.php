	<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include('header.php');
?>
<div class="container">
	<h3>Create New Admin</h3>
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<form action="add_admin.php" method="post">
				
			<div class="card">
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" placeholder="Username" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" placeholder="Password" name="password" class="form-control">
					</div>

					<div class="form-group">
						<label>Re-Password</label>
						<input type="password" placeholder="Re-Password" name="password" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Add" class="btn btn-success">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>

