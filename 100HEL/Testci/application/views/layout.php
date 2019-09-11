<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bootstrap.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("js/jquery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/bootstrap.bundle.js"); ?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm sticky-top bg-dark navbar-dark">
		<a href="#" class="navbar-brand">Test One</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mymenu">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url('home'); ?>">Home</a></li>
				<?php
				if ($this->session->userdata("is_user_logged_in"))
				{
				?>
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url('user/profile'); ?>">Profile</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url('user/logout'); ?>">Logout</a></li>
				<?php
				}
				else
				{
				?>
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/signup'); ?>">Signup</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/signin'); ?>">Signin</a></li>
				<?php
				}
				?>
			</ul>
		</div>
	</nav>
	<div class="jumbotron">
		<h2>Test One</h2>
	</div>
	<?php
	$this->load->view($pagename);
	?>
	
	<div class="footer my-2 bg-dark">
		<h4 class="text-light">Indore</h4>
	</div>
</body>
</html>