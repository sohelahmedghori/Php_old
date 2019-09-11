<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url("js/jquery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/bootstrap.bundle.js"); ?>"></script>
	<style type="text/css">
		body{
			background-color: #33FF99;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
		<a href="#" class="navbar-brand">MagicBricks</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#me">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="me" class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="<?php echo site_url('home'); ?>" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="<?php echo site_url('home/about'); ?>" class="nav-link">About</a></li>
				<li class="nav-item"><a href="<?php echo site_url('home/contact'); ?>" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="<?php echo site_url('home/help'); ?>" class="nav-link">Help</a></li>
			</ul>
		</div>
			<ul class="navbar-nav">
		<?php
			if($this->session->userdata('is_user_logged_in'))
			{ 
		?>
			<li class="nav-item"><a href="<?php echo site_url('user/user_profile'); ?>" class="nav-link">My Profile</a></li>
			<li class="nav-item"><a href="<?php echo site_url('user/logout'); ?>" class="nav-link">Signout</a></li>
		
		
		<?php
		}
			else
		{ ?>
			<li class="nav-item"><a href="<?php echo site_url('home/signup'); ?>" class="nav-link">Signup</a></li>
			<li class="nav-item"><a href="<?php echo site_url('home/signin'); ?>" class="nav-link">Signin</a></li>
		<?php	
		}
		?>
		</ul>
	</nav>
<div class="jumbotron">
	<h3 class="text-primary">The MagicBricks</h3>
	<p class="text-justify">Indias No. 1 Property Site, Real Estate Properties in India at Magicbricks, the best property site in India. Buy, Sell, Rent residential and commercial properties.</p>
</div>

<?php

$this->load->view($pagename);

?>

<div class="container-fluid bg-dark mt-3">
	<div class="container">
		<h2 class="text-center text-light py-4">MagicBricks, India</h2>
	</div>
</div>

</body>
</html>