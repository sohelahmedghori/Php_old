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
  	  			<a href="#" class="nav-link">Home</a>
  	  		</li>
  	  		<li class="nav-item">
  	  			<a href="#" class="nav-link">About</a>
  	  		</li>
  	  		<li class="nav-item">
  	  			<a href="#" class="nav-link">Contact</a>
  	  		</li>
  	  		<li class="nav-item">
  	  			<a href="#" class="nav-link">Help</a>
  	  		</li>
  	  	</ul>
  	  </div>
  	  <form class="form-inline">
  	  	<input type="text" class="form-control" placeholder="search">
  	  	<button class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>
  	  </form>
      <ul class="navbar-nav">
      	<li class="nav-item">
      		<a href="#" class="nav-link">My cart<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
      	</li>
        <?php
          if(isset($_SESSION['is_user_logged_in']))
          {
        ?>
         <li class="nav-item">
           <a href="#" class="nav-link">My Account</a>
         </li>
         <li class="nav-item">
          <a href="#" class="nav-link">Logout</a>          
         </li>
         <?php} 
         else{?>
      </ul>
      <ul class="navbar-nav">
      	<li class="nav-item">
      		<a href="signin.php" class="nav-link">Sign in<i class="fa fa-user" aria-hidden="true"></i></a>
      	</li>
      </ul>
      <ul class="navbar-nav">
      	<li class="nav-item">
      		<a href="signup.php" class="nav-link">Sign up<i class="fa fa-user" aria-hidden="true"></i></a>
      	</li>
      </ul>

  </nav>
      <?php}?>
 <div class="jumbotron mb-0" style="background-image:url('images/banner.jpg'); background-size:100% 100%; border-radius: 0;"><h1>Shop Online</h1></div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-3">
 			<div class="list-group mt-2">
 				<a href="#" class="list-group-item list-group-item-action">Mobiles</a>
 				<a href="#" class="list-group-item list-group-item-action">Home Appliance</a>
 				<a href="#" class="list-group-item list-group-item-action">Men's Fashion</a>
 				<a href="#" class="list-group-item list-group-item-action">Women's Fashion</a>
 				<a href="#" class="list-group-item list-group-item-action">Furnitures</a>
 			</div>
 		</div>