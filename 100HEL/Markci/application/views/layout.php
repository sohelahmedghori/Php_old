<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js'); ?>"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-info navbar-expand-sm ">
		<a href="#" class="navbar-brand">New One</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mymenu">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('home'); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('home/about'); ?>">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('home/cotact'); ?>">Contact</a>
				</li>
				<?php
				if ($this->session->userdata("is_user_logged_in"))
				{?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('home/logout'); ?>">Logout</a>
					</li>
				<?php
				}
				else
				{?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('home/signin'); ?>">Singin</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('home/signup'); ?>">Signup</a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
	</nav>
	<div class="jumbotron">
		<div class="container">
			<h2>New one</h2>
		</div>
	</div>
	<?php
	$this->load->view($pagename);
	?>
</body>
</html>