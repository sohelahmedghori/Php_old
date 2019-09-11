<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css">
	<script type="text/javascript"src="js/jquery.js"></script>
	<script type="text/javascript"src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-sm  ">
		<a href="#" class="navbar-brand">admin panel</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="menu" class="collapse navbar-collapse">
			<ul class="navbar-nav" >
				<li class="nav-item">
					<a href="dashboard.php"class="nav-link">dashboard</a>
				</li>
				<li class="nav-item">
					<a href="addpro.php"class="nav-link">add product</a>
				</li> 
				<li class="nav-item">
					<a href="viewpro.php"class="nav-link">view product</a>
				</li>
				<li class="nav-item">
					<a href="addcat.php"class="nav-link">add category</a>
				</li>
				<li class="nav-item">
					<a href="viewcat.php"class="nav-link">view category</a>
				</li>
				<li class="nav-item">
					<a href="viewusers.php"class="nav-link">view users</a>
				</li>
				<li class="nav-item dropdown">
					<a href="#"class="nav-link dropdown-toggle" data-toggle="dropdown">setting</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Change Password</a>
						<a class="dropdown-item" href="create_new_admin.php">Create New Admin</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="logout.php"class="nav-link">logout</a>
				</li>
			</ul>

		 </div>
	</nav>

	<div style="min-height: 600px" class="mt-4">
