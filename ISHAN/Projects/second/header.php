<?php
$con = mysqli_connect("localhost","root","","ebay");
$query = "SELECT * FROM category";
$result = mysqli_query($con,$query);

if(isset($_COOKIE['cart']))
{
	$x = $_COOKIE['cart'];
	$arr = explode("#", $x);
	$cart_total = count($arr);
}
else
{
	$cart_total = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.a1:hover{
			background-color:#33FF99;

		}
	</style>
</head>
<body>
<div class="container-fluid bg-dark">
	<div class="row" style="background-color:#DAF7A6">
		<div class="col-md-5">
			<p class="text-danger m-1 p-2">World's fastest growing website</p>
		</div>
		<div class="col-md-7">
			<ul class="nav justify-content-end">
					<?php
					if (isset($_SESSION['is_user_logged_in']))
					 {?>
					 <button class=" btn nav-item">
						<a href="my_Account.php" class="nav-link">My Account <i class="fa fa-user" aria-hidden="true"></i></a>
					</button>
					<button class=" btn nav-item">
						<a href="my_profile.php" class="nav-link">My Profile <i class="fa fa-user" aria-hidden="true"></i></a>
					</button>
					<button class="btn nav-item">
						<a href="logout.php" class="nav-link">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
					</button>	

					<?php
				}
				else
					{ ?>
					<button class=" btn nav-item">
						<a href="login.php" class="nav-link">Login <i class="fa fa-lock" aria-hidden="true"></i></a>
					</button>
					<button class="btn nav-item">
						<a href="signup.php" class="nav-link">Signup <i class="fa fa-sign-in" aria-hidden="true"></i></a>
					</button>
				<?php
			}?>

					<button class="btn nav-item">
						<a href="my_cart.php" class="nav-link">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-warning badge-pill"><?php echo $cart_total; ?></span></a>
					</button>
			</ul>
		</div>
	</div>
</div>
	<nav class="navbar sticky-top navbar-dark navbar-expand-sm" style="background-color:#394931;">
		<a href="#" class="navbar-brand text-danger h1">eBay</a>
		<button class="navbar-toggler btn-dark
		" data-toggle="collapse" data-target="#my">
			<span class="navbar-toggler-icon"></span>
		</button>

		<form class="form-inline" action="" method="get">
			<input type="text" name="q" class="form-control" placeholder="Search Item's">
			<button class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
		
		<div id="my" class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Contact</a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">more</a>
					<div class="dropdown-menu" style="background-color:#33FF99;">
						<a href="#" class="dropdown-item">Notification's</a>
						<a href="#" class="dropdown-item">Sell here</a>
						<a href="#" class="dropdown-item">24X7 Customer Support</a>
						<a href="#" class="dropdown-item">Download App</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	</div>
</div>
<div class="bg-dark" style="height: 200px;">
	<div class="carousel slide" id="slide" data-ride="carousel">
		<ul class="carousel-indicators ">
			<li class="active" data-target="#slide" data-slide-to="0"></li>
			<li  data-target="#slide" data-slide-to="1"></li>
			<li  data-target="#slide" data-slide-to="2"></li>
		</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/4.jpeg" height="200" width="100%">
			<div class="carousel-caption">
				Angels
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/5.jpg" height="200" width="100%">
			<div class="carousel-caption">
				<p class="text-dark">Mixer Grinder</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/6.png" height="200" width="100%">
			<div class="carousel-caption">
				New HP Laptop
			</div>
		</div>
	</div>
	<a href="#slide" class="carousel-control-prev" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a href="#slide" class="carousel-control-next" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
	</div>
	</div>
<div class="container-fluid mt-1">
	<div class="row">
		<div class="col-md-3 mb-1">
			<div class="list-group">
				<?php
					while($data=mysqli_fetch_assoc($result))
					{ ?>
				<a class="list-group-item list-group-item-action a1" href="index.php?category1=<?php echo $data['category']; ?>"><?php echo $data['category']; ?></a>

				<?php
				}
				?>
			</div>
		</div>
