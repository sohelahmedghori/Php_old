<html>
<head></head>
<body>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<nav class="navbar navbar-dark bg-dark navbar-expand-sm sticky-top">
	<a href="#" class="navbar-brand">Bakery Market</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#myid">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="myid">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="index.php" class="nav-link">Home
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">About Us
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Contact
				</a>
			</li>
		</ul>
	</div>
		<form class="form-inline">
			<input type="text" class="form-control" placeholder="search">
			<button class="btn btn-dark" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
		<ul class="navbar-nav ml-5 pl-5">
			<?php
			if(isset($_SESSION['is_user_logged_in']))
				{
				?>
				<li class="nav-item">
					<a href="myprofile.php" class="nav-link">MyProfile</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">MyAccount</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">Logout</a>
				</li>
				<?php
			}
			else
				{
					?>
			<li class="nav-item">
				<a href="#" class="nav-link">Mycart<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</a>
			</li>
			<li class="nav-item">
				<a href="signin.php" class="nav-link pl-3">Login<i class="fa fa-sign-in" aria-hidden="true"></i>
				</a>
			</li>
			<li class="nav-item">
				<a href="signup.php" class="nav-link pl-3">Signup<i class="fa fa-sign-in" aria-hidden="true"></i>
				</a>
			</li>
			<?php
		}
		?>
		</ul>

</nav>
<div class="jumbotron" style="background-image: url(images/26.jpg); background-size: 300px 300px;"><h3 class="pb-5">Online bake's</h3></div>
<div class="container">
	<div class="row">
		<div class="col-md-3">

<div class="list-group">
<a href="#" class=" bg-mycolor list-group-item list-group-item-action">Bread</a>	
<a href="#" class=" bg-mycolor list-group-item list-group-item-action">Cookies</a>
<a href="#" class=" bg-mycolor list-group-item list-group-item-action">Cakes & all</a>
<a href="#" class=" bg-mycolor list-group-item list-group-item-action">muffins & all</a> 
</div>
</div>


