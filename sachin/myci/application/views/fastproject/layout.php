<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js'); ?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<span class="navbar-brand">online</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yadav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="yadav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('fast/home');  ?>">Home</a>
				</li>
			</ul>
		
			<?php
			if($this->session->userdata("is_user_logged_in"))
			{


			 ?>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('second/profile');  ?>">Profile</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('second/logout');  ?>">Logout</a>

					<?php }else{ ?>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('fast/login');  ?>">Login</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('fast/signup');  ?>">Signup</a>
				</li>
			</ul> <?php } ?>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="jumbotron">
			<h3><b>Welcome</b></h3>
		</div>
	</div>

<?php
$this->load->view($pagename);
 ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center bg-dark text-light"><h1>Thanks</h1></div>
			</div>
		</div>
	</div>

</body>
</html>