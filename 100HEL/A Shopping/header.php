<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<style type="text/css">
		.footer{
			height: 100px;
			width: 100%;
			color: #FFF;
		}
		.border{
			border: 1px solid black;
		}
		.jumbotron{
			background-image: url(image/19.png);
			background-size: 100% 100%;
			height: 300px;
		}
		.image{
			height: 150px;
			width: 200px;
		}
	</style>
</head>
<body>
	<nav class="navbar bg-secondary sticky-top navbar-expand-sm navbar-dark">
		<a href="#" class="navbar-brand">Hello World</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="menu" class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="#" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="#" class="nav-link">About us</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Contact us</a></li>
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
			<li class="nav-item"><a href="#" data-target="#signup" data-toggle="modal" class="nav-link">Signup <i class="fa fa-user-plus"></i></a></li>
			<li class="nav-item"><a href="#" data-target="#signin" data-toggle="modal" class="nav-link">Signin <i class="fa fa-sign-in"></i></a></li>
		</ul>
	</nav>
	<div id="signin" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Signin</h3>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="" placeholder="Username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="" placeholder="Password" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" value="Submit" class="btn btn-success">
					<button class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div id="signup" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Signin</h3>
				</div>
				<form action="save_signup.php" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" placeholder="Full Name" class="form-control" name="fullname">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" placeholder="Username" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" placeholder="Password" class="form-control" name="pass">
						</div>
						<div class="form-group">
							<label>Re-Password</label>
							<input type="password" placeholder="Re-Password" class="form-control">
						</div>
						<div class="form-group">
							<label>Gender</label>
							<input type="radio" name="gender" value="Male" >Male
							<input type="radio" name="gender" value="Female" >Female
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" placeholder="Address" name="add"></textarea>
						</div>
						<div class="form-group">
							<label>City</label>
							<select class="form-control" name="city">
								<option>Select</option>
								<option>Indore</option>
								<option>Delhi</option>
								<option>Jaipur</option>
								<option>Mumbai</option>
								<option>Other</option>
							</select>
						</div>
						<div class="form-group">
							<label>Contact</label>
							<input type="text" class="form-control" placeholder="Contact" name="contact">
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" value="Submit" class="btn btn-success">
						<button class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="jumbotron">
		<h1>Hello World</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="#" class="list-group-item">Product</a>
					<a href="#" class="list-group-item">Product</a>
					<a href="#" class="list-group-item">Product</a>
					<a href="#" class="list-group-item">Product</a>
					<a href="#" class="list-group-item">Product</a>
					<a href="#" class="list-group-item">Product</a>
					<a href="#" class="list-group-item">Product</a>
				</div>
			</div>