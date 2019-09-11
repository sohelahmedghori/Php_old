<?php
include("db.php");
include("header.php");
?>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-12">
				<h3 class="bg-secondary text-light my-2 p-1">User Login</h3>
			</div>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<div class="card">
					<div class="card-header">
						<h4 class="m-0">Login</h4>
					</div>
					<form action="authentication.php" method="post">
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Submit" class="btn btn-success">
						<a href="index.php" class="btn btn-danger">Close</a>
						<br />
						<p class="text-danger text-center">
							<?php
							if (isset($_SESSION['msg'])) 
							{
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
							?>
						</p>
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