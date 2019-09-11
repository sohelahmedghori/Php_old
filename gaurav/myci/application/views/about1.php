<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css')?>">
  <script type="text/javascript" src="<?php echo base_url('js/jquery.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js')?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">My Codeigniter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home')?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home/layout')?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home/layout')?>">Contact</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home/layout')?>">Help</a>
      </li> 
    </ul>
  </div> 
</nav>
<div class="container">
	<h2>This is About Page</h2>
</div>
</body>
</html>