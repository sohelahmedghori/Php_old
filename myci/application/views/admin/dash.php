<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Admin Panel</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admindashboard'); ?>">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admindashboard/view_users'); ?>">View Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admindashboard/logout'); ?>">Logout</a>
      </li>
      
      
    </ul>
  </div> 
</nav>



<div class="container mt-4">
	<div class="row">
			
		
	</div>
</div>
</body>
</html>