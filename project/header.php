<<<<<<< HEAD
<?php
include ("db.php");
=======

<?php




>>>>>>> 100ef423e802cc78f086ac3e1e5521323b307885
$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);



if(isset($_COOKIE['cart']))
{
	$x = $_COOKIE['cart'];
	$arr = explode("#", $x);
	$cart_total=count($arr);
}
else
{
	$cart_total = 0;	
}


$query_slider = "SELECT * FROM slider";
$result_slider1 = mysqli_query($con, $query_slider);
$result_slider2 = mysqli_query($con, $query_slider);



$que_auto = "SELECT * FROM product";
$res_auto = mysqli_query($con, $que_auto);

$auto = "";

while($data_auto = mysqli_fetch_assoc($res_auto))
{
	$auto .= '"'.$data_auto['product_name'].'",';
}

$search_str= trim($auto, ",");


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>

	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script type="text/javascript" src="js/jquery-ui.js"></script>


	<style type="text/css">
		.list-group-item{
			border-color: #fe4c50 !important;
			color: #fe4c50;
		}
		.list-group-item-action:hover{
			background-color: #fe4c50 !important;
			color: #FFF !important;
		}
		.my-box{
			margin:40px;
			height: 200px;
			background-size: 100% 100%;
		}
		.bg-mycolor{
			background-image: url("image/bg.jpg");
			background-size: 100%;
		}
	</style>
	<script type="text/javascript">
		$( function() {
		    var availableTags = [<?php echo $search_str ?>];
		    $( "#tags" ).autocomplete({
		      source: availableTags
		    });
		  } );
	</script>
</head>
<body>
<nav class="navbar bg-mycolor navbar-expand-md navbar-dark sticky-top">
	<a class="navbar-brand" href="#">My Shopping</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
		<span class="navbar-toggler-icon"></span>
	</button>


	<div id="myMenu" class="collapse navbar-collapse">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="index.php">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
		<li class="nav-item">
			<a href="my_cart.php" class="nav-link">My Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-pill badge-dark"><?php echo $cart_total; ?></span></a>
		</li>
		
	</ul>
	</div>
	<form class="form-inline" action="" method="get">
		<input name="q" id="tags" type="text" class="form-control" placeholder="Search">
		<button type="submit" class="btn btn-dark"><i class="fa fa-search" aria-hidden="true"></i></button>
	</form>
	<ul class="navbar-nav">
		

		<?php 
		if(isset($_SESSION['is_user_logged_in']))
		{ ?>

			<li class="nav-item">
				<a href="my_account.php" class="nav-link">My Account <i class="fa fa-user" aria-hidden="true"></i></a>
			</li>
			<li class="nav-item">
				<a href="my_profile.php" class="nav-link">My Profile <i class="fa fa-user" aria-hidden="true"></i></a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link">Logout <i class="fa fa-user" aria-hidden="true"></i></a>
			</li> 

		<?php }
		else
		{ ?>

			<li class="nav-item">
				<a href="login.php" class="nav-link">Login <i class="fa fa-user" aria-hidden="true"></i></a>
			</li>
			<li class="nav-item">
				<a href="signup.php" class="nav-link">Signup <i class="fa fa-user" aria-hidden="true"></i></a>
			</li> 


		<?php 
		}
		?>



		
	</ul>
 


</nav>
<!--  <div class="jumbotron mb-0" style="background-color: #225544; border-radius: 0; background-image: url('image/bg.jpg'); background-size: 100% 100%">
	<h1 class="text-light">The Stepping Stone</h1>
	<p class="text-light">Web Development Training Insititute in Indore</p>
</div>
 -->
<div style="height: 250px;" class="container-fluid">
	<div id="slider" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<?php
			$i=0;
			while($data_slide2=mysqli_fetch_assoc($result_slider2))
			{ ?>
				<li class="<?php if($i==0) echo "active"; ?>" data-target="#slider" data-slide-to="<?php echo $i; ?>"></li>

			<?php
			$i++;
			}
			?>

			
		</ul>




		<div class="carousel-inner">
			<?php
			$n=0;
			while($data_slide1=mysqli_fetch_assoc($result_slider1))
			{ 

			?>


			<div class="<?php if($n==0) echo "active"; ?> carousel-item">
				<img src="slider_img/<?php echo $data_slide1['image_name']; ?>" height="250" width="100%" />
				<div class="carousel-caption">	
					<h3><?php echo $data_slide1['title']; ?></h3>
					<p><?php echo $data_slide1['sub_title'];?></p>
				</div>
			</div>
			
			<?php
			$n++;
			}
			?>
			
		</div>




		<a class="carousel-control-prev" href="#slider" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#slider" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>


	</div>


</div>


<!-- <div class="container-fluid" style="background-color: #fe4c50;">
	<div class="container">
		<h2 class="text-light pt-4">Our Project</h2>
		<p class="pb-4 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div> -->
<div class="container mt-4">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<a class="list-group-item list-group-item-action" href="index.php?category=<?php echo $data['category_name']; ?>"><?php echo $data['category_name'];?></a>

				<?php
				}
				?>
				
			</div>
		</div>