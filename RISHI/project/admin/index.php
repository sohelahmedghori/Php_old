<?php
include("../db.php");
?>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width intial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-secondary navbar-expand-sm">
		<h2>ADMIN PANEL</h2>
	</nav>
</body>
</html>
<div class="row">
	<div class="col-md-6 offset-md-3 mt-4">
		<div class="card">
			<div class="card-header">
				<h3>Admin Login</h3>
			</div>
			<form action="auth.php" method="post">
			<div class="card-body">
				<div class="form-group">
					<label for="full">Admin Name</label>
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<input  id="full" type="text" name="name" placeholder="user name" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<input type="password" name="word" class="form-control" placeholder="password">
					</div>
				</div>
			</div>
			<div class="card-footer">
				<input type="submit" value="login" class="btn btn-success">
			</div>
			<p class="text-danger text-center">
				<?php
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
			</p>
		</form>
		</div>
	</div>
</div>
</body>
</html>