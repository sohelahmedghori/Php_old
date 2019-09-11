a<?php
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
	<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
		<a class="navbar-brand" href="#">Admin PAnel</a>
	</nav>
	<div class="row m-4 p-4">
		<div class="col-md-4 offset-md-4">
					<form action="auth.php" method="post">
			<div class="card">
				<div class="card-header">
					<b>Admin Login</b>
				</div>
				<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" placeholder="Username" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" placeholder="Password" class="form-control">
						</div>

				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-success">
				</div>
				<Br />
				<Br />
				<p class="text-danger text-center">
					<?php
					if(isset($_SESSION['msg']))
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