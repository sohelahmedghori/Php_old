<?php
$con = mysqli_connect("localhost","root","","onlineshop");

$query = "select * from admincategory";
$result = mysqli_query($con,$query);
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

?>
 <!DOCTYPE html>
<html> 
<head>
	<title>onlineshop</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-sm sticky-top">
  	<a href="#" class="navbar-brand">Online Market</a>
  	  <button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
  	  	<span class="navbar-toggler-icon">
  	  	</span>
  	  </button>
  	  <div id="mymenu" class="collapse navbar-collapse">
  	  	<ul class="navbar-nav">
  	  		<li class="nav-item">
  	  			<a href="index.php" class="nav-link">Home</a>
  	  		</li>
  	  		<li class="nav-item">
  	  			<a href="#" class="nav-link">About</a>
  	  		</li>
  	  		<li class="nav-item">
  	  			<a href="contactus.php" class="nav-link">Contact</a>
  	  		</li>
  	  		<li class="nav-item">
  	  			<a href="#" class="nav-link">Help</a>
  	  		</li>
  	  	</ul>
  	  </div>
  	  <form class="form-inline" action="" method="get">
  	  	<input type="text" name="q" class="form-control" placeholder="search">
  	  	<button type="submit" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>
  	  </form>
      <ul class="navbar-nav">
      	<li class="nav-item">
      		<a href="my_cart.php" class="nav-link">My cart<i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-pill badge-warning"><?php echo $cart_total?></span></a>
      	</li>
      
      	<?php 
    if(isset($_SESSION['is_user_logged_in']))
    { ?>

      <li class="nav-item">
        <a href="myaccount.php" class="nav-link">My Account <i class="fa fa-user" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a href="myprofile.php" class="nav-link">My profile <i class="fa fa-user" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a href="logout.php" class="nav-link">Logout <i class="fa fa-user" aria-hidden="true"></i></a>
      </li> 

    <?php }
    else
    { ?>

      <li class="nav-item">
        <a href="signin.php" class="nav-link">Signin<i class="fa fa-user" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a href="signup.php" class="nav-link">Signup <i class="fa fa-user" aria-hidden="true"></i></a>
      </li> 


    <?php 
    }
    ?>
      </ul>
  </nav>
 <div class="jumbotron mb-0" style="background-image:url('images/banner.jpg'); background-size:100% 100%; border-radius: 0;"><h1>Shop Online</h1></div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-3">
 			<div class="list-group mt-2">
        <?php
        while($data=mysqli_fetch_assoc($result))  
        {  
        ?>
 				<a href="index.php?category=<?php echo $data['cate_name'];?>" class="list-group-item list-group-item-action"><?php
        echo $data['cate_name'];?></a>
 				<?php
      }
      ?>
 			</div>
      </div>