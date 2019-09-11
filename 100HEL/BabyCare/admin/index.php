<?php
include("../db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a href="#" class="navbar-brand">Admin Panel</a>
	</nav>
	<div class="row m-5">
		<div class="col-md-6 offset-3">
			<form action="admin_auth.php" method="post">
				<div class="card">
					<div class="card-header">
						<h4>Admin Login</h4>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" placeholder="Username" name="username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Login" class="btn btn-success">
					</div>
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
</body>
</html>