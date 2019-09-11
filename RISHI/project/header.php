<?php
$query="SELECT * FROM category";
$result=mysqli_query($con,$query);




$query_slider = "SELECT * FROM slider";
$result_slide1 = mysqli_query($con,$query_slider); 
$result_slide2 = mysqli_query($con,$query_slider); 



$que_auto="SELECT * FROM addproduct";
$res_auto=mysqli_query($con ,$que_auto);

$auto="";

while($data_auto=mysqli_fetch_assoc($res_auto))
{
	$auto .= '"'.$data_auto['productname'].'",';
}

$search_str = trim($auto,",");
?>
<html>
<head>
	<title>project</title>
	<meta name="viewport" content="width=device-width intial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script type="text/javascript">
		$(function(){
			var availableTags = [<?php echo $search_str ?>];
			$("#tags").autocomplete({
				source : availableTags
			});
		});
	</script>
</head>
<body>
	<nav class="navbar navbar-dark bg-success navbar-expand-sm sticky-top">
		<a href="#" class="navbar-brand">
			 Treasure BaZZar</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="mymenu" class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="index.php" class="nav-link">HOME</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">ABOUT</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">My Cart<i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-pill badge-dark"></span></a>
				</li>
			</ul>
		</div>
		
			<form class="form-inline" action="" method="get">
				<input type="text" id="tags" name="q" class="form-control" placeholder="Search Here">
				<button class="btn btn-dark" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
				
				<ul class="navbar-nav">
					<?php
						if(isset($_SESSION['is_user_logged_in']))
						{ ?>

					<li class="nav-item">
						<a href="my_account.php" class="nav-link">
							<i class="fa fa-lock"></i>My Acoount
						</a>
					</li>
					<li class="nav-item">
						<a href="logout.php" class="nav-link">
							<i class="fa fa-user-plus" aria-hidden="true"></i> Signout
						</a>
					</li>
					<?php	}
						else
						{ ?>

					<li class="nav-item">
						<a href="login.php" class="nav-link">
							<i class="fa fa-lock"></i> Login
						</a>
					</li>
					<li class="nav-item">
						<a href="signup.php" class="nav-link">
							<i class="fa fa-user-plus" aria-hidden="true"></i> Signup
						</a>
					</li>
					<?php	}
					?>
				</ul>
		</div>
	</nav>


<!-- #SLIDER -->
<div class="container-fluid" style="height: 250px;">
	<div id="slider" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<?php
			$i=0;
			while($data_slide2=mysqli_fetch_assoc($result_slide2))
			{?>
				<li class="<?php if($i==0)echo "active"; ?>" data-target="#slider" data-slide-to="<?php echo $i; ?>"></li>

			<?php
			$i++;
		    }
			?>
		</ul>

		<div class="carousel-inner">
			<?php
			$n=0;
			while($data_slide1=mysqli_fetch_assoc($data_slide1))
			{?>
			<div class="<?php if($n==0) echo "active"; ?> carousel-item">
				<img src="slider_img/<?php echo $data_slide1['image_name']; ?>" height="250" width="100%"/>
				<div class="carousel-caption">
					<h2><?php echo $data_slide1['title']; ?></h2>
					<p><?php echo $data_slide1['sub_title']; ?></p>
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
		<a href="#slider" class="carousel-control-next">
			<span class="carousel-control-next-icon"></span>
		</a>


	</div>


</div>
<!-- #SLIDER -->


	<div class="container-fluid mt-4">
		<div class="row">
			<div class="col-md-3">
			<?php
			while($data=mysqli_fetch_assoc($result))
			{?>
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action"><?php echo $data['category'] ?></a>
				</div>
				
		    <?php
			} 
		    ?>
			</div>