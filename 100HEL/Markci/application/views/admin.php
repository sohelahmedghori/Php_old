<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
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
					<a class="nav-link" href="<?php echo site_url('home/admin'); ?>">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('home/view_user'); ?>">View User</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('home/logout'); ?>">Logout</a>
				</li>		
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row my-4">
			<h2>Admin Dashboard</h2>
		</div>
	</div>
</body>
</html>