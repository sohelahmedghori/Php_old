<?php
$query="SELECT * FROM category";
$result=mysqli_query($con, $query);
if (isset($_COOKIE['cart']))
{
	$x=$_COOKIE['cart'];
	$arr=explode("#", $x);
	$cart_total=count($arr);
}
else
{
	$cart_total=0;
}

$query_auto="SELECT * FROM addproduct";
$query_result=mysqli_query($con , $query_auto);
$auto="";
while ($data_auto=mysqli_fetch_assoc($query_result))
{
	$auto .='"'.$data_auto['productname'].'",';
}
$search_str=trim($auto,",");
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

	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<!-- call this 2 file for search suggestion downlod and put in seprate folder(this API name is auto complete) -->
	<script type="text/javascript">
		$(function() {
			var availableTags=[<?php echo $search_str ?>];
			$("#tags").autocomplete({
				source: availableTags
			});
		});
	</script>

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
		<a href="index.php" class="navbar-brand">Shop Online</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mymenu">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="#" class="nav-link">About</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Help</a></li>
			</ul>
		</div>
		<form class="form-inline" action="" method="get">
			<div class="form-group mb-0">
				<div class="input-group">
					<input type="text" id="tags" name="search" class="form-control" placeholder="Search">
					<div class="input-group-append">
						<button type="submit" class="btn btn-dark"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</form>
		<ul class="navbar-nav">
			<li class="nav-item"><a href="mycart.php" class="nav-link" style="color: #000;">My Cart <i class="fa fa-shopping-cart"></i> <span class="badge badge-pill badge-danger"><?php echo $cart_total; ?></span></a></li>
			<?php
			if (isset($_SESSION['is_user_logged_in'])) 
			{?>
			<li class="nav-item"><a href="myaccount.php" class="nav-link" style="color: #000;">My Account <i class="fa fa-user"></i></a></li>
			<li class="nav-item"><a href="myprofile.php" class="nav-link" style="color: #000;">My Profile <i class="fa fa-user"></i></a></li>
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
					<a href="index.php?category=<?php echo $data['categoryname'];?>" class="list-group-item list-group-item-action"><?php echo $data['categoryname']; ?></a>
				<?php
				}
				?>
			</div>
		</div>