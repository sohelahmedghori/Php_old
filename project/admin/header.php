<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
		<a class="navbar-brand" href="#">Admin Panel</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="myMenu" class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="dashboard.php">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="add_product.php">Add Product</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="view_product.php">View Product</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="add_category.php">Add Category</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="view_category.php">View Category</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="view_user.php">View Users</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Setting</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Change Password</a>
						<a class="dropdown-item" href="create_new_admin.php">Create New Admin</a>
						<a class="dropdown-item" href="slider.php">Slider</a>
					</div>


				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a> </li>


			</ul>
		</div>
	</nav>

<div style="min-height: 600px" class="mt-4">