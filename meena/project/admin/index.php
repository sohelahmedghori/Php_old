<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
		<a href="#" class="navbar-brand">Admin Panel</a>
	</nav>
<!-- navbar -->

	<div class="row m-4 p-4">
		<div class="col-md-4 offset-md-4">
			<form action="index.php" method="post">
				<div class="card">
					<div class="card-header">
						<b>Admin Login</b>
					</div>

					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="type" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>
					</div>
					
					<div class="card-footer">
						<input type="submit" value="Login" class="btn btn-success">	
					</div>
				</div>
			</form>
		</div>		
	</div>
</body>
</html>