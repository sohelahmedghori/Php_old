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
		<span class="navbar-brand">Online</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yadav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="yadav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('aaa/index') ?>">home</a>
				</li>
			</ul>
			
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('') ?>">profile</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('') ?>">logout</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('') ?>">login</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('aaa/signup') ?>">signup</a>
				</li>
			</ul>
		</div>
	</nav> 
<div class="container-fluid">
	<div class="jumbotron">
	<h3>welcome</h3></div></div>



	<?php
echo $this->load->view($pagename)
	 ?>



	<div class="container-fluid">
		<div class="row bg-dark text-light"><h2>Thanks</h2></div>
	</div>

</body>
</html>