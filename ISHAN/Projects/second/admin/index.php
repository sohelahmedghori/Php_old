<?php
include("../db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
		<a href="#" class="navbar-barand text-light">Admin Panel</a>
	</nav>
	<div class="row mt-4 pt-4">
		<div class="col-md-4 offset-4">
			<form action="authenti.php" method="post">
				<div class="card">
					<div class="card-header">Admin Login</div>
					<div class="card-body">
						<div class="form-group">
							<label>Userid</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Signin" class="form-control btn btn-success">
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
				</div>
			</form>
		</div>
	</div>
</body>
</html>