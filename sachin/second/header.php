<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>second project</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<span class="navbar-brand">Online</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-targer="#yadav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div  class="collapse navbar-collapse" id="yadav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="home.php">home</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="">about</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="">my cart</a>
				</li>
			</ul>
			
		</div>
		<form class="form-inline" action="" method="get">
			<input type="text" name="" class="form-control" placeholder="search">
			<button type="submit" class="btn btn-dark"><i class="fa fa-search" area-hidden="true"></i></button>
		</form>
		<?php
		 if(isset($_SESSION['is_user_logged_in']))
		{ ?>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="">my account</a>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="">my profile</a>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="">logout</a>
			</li>
		</ul>
	<?php } else { ?>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="login.php">login</a>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="signup.php">signup</a>
			</li>
		</ul>
	<?php } ?>

	</nav>

</body>
</html>