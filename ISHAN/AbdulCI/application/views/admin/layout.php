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
		<a href="#" class="navbar-brand">Admin Panel</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#me">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="me" class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="<?php echo site_url('home'); ?>" class="nav-link">Home</a></li>
			</ul>
		</div>
	</nav>

<?php

$this->load->view($pagename);

?>

<div class="container-fluid bg-dark mt-3">
	<div class="container">
		<h2 class="text-center text-light py-4">MagicBricks, India</h2>
	</div>
</div>