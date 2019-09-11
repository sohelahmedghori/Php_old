<?php
$query="SELECT * FROM category";
$result=mysqli_query($con, $query);
$qu="SELECT * FROM user";
$re=mysqli_query($con, $qu);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<style type="text/css">
		.backgroundmenu{
			background-image: url(image/191.png);
			background-size: 100%;
			color: #FFF;
		}
		.jumbotron{
			background-image: url(image/19.png);
			background-size: 100% 100%;
			border-radius: 0;
			height: 300px;
			color: #000;
		}
		.footer{
			margin: 40px;
			height: 200px;
			background-size: 100% 100%;
		}
	</style>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-light backgroundmenu">
		<a href="#" class="navbar-brand">Shop Online</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mymenu">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="#" class="nav-link">About</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Help</a></li>
			</ul>
		</div>
		<div class="form-group mb-0">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search">
				<div class="input-group-append">
					<button type="submit" class="btn btn-dark"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
		<ul class="navbar-nav">
			<li class="nav-item"><a href="#" class="nav-link" style="color: #000;">My Cart <i class="fa fa-shopping-cart"></i></a></li>
			<?php
			if (isset($_SESSION['is_user_logged_in'])) 
			{?>
			<li class="nav-item">
				<?php
				while ($da=mysqli_fetch_assoc($re))
				{
				?>					
				<a href="myprofile.php" class="nav-link" style="color: #000;"><?php echo $da['fullname']; ?></a>
				<?php
				}
				?>
				</li>
			<li class="nav-item"><a href="myaccount.php" class="nav-link" style="color: #000;">My Account <i class="fa fa-user"></i></a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link" style="color: #000;">Logout <i class="fa fa-sign-out"></i></a></li>
			<?php
			}
			else
			{
			?>
			<li class="nav-item"><a href="login.php" class="nav-link" style="color: #000;">Login <i class="fa fa-sign-in"></i></a></li>
			<li class="nav-item"><a href="signup.php" class="nav-link" style="color: #000;">Signup <i class="fa fa-user-plus"></i></a></li>
			<?php
			}
			?>
		</ul>
	</nav>
	<div class="jumbotron mb-0">
		<h1>Shop Online</h1>
		<p>Buy Best Product here</p>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group mt-2">
				<?php
				while ($data=mysqli_fetch_assoc($result))
				{
					?>
					<a href="#" class="list-group-item"><?php echo $data['categoryname']; ?></a>
				<?php
				}
				?>
			</div>
		</div>