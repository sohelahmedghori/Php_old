<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav class="navbar bg-warning navbar-dark navbar-expand-sm">
		<a href="#" class="navbar-brand">Admin Panel</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#admin">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="admin">
			<ul class="navbar-nav">
			<li class="nav-item">
					<a href="dashboard.php" class="nav-link">Dashboard</a>
				</li>
			<li class="nav-item">
					<a href="add_product.php" class="nav-link">Add Product</a>
				</li>
			<li class="nav-item">
					<a href="view_pro.php" class="nav-link">View Product</a>
				</li>
			<li class="nav-item">
					<a href="add_cate.php" class="nav-link">Add Category</a>
				</li>
			<li class="nav-item">
					<a href="view_cate.php" class="nav-link">View Category</a>
				</li>
			<li class="nav-item">
					<a href="view_user.php" class="nav-link">View Users</a>
				</li>
			<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Setting</a>
					<div class="dropdown-menu">
						<a href="#" class="dropdown-item">Create Password</a>
						<a href="create_new_admin.php" class="dropdown-item">Create New Admin</a>
					</div>
				</li> 
			<li class="nav-item">
					<a href="logout.php" class="nav-link">Logout</a>
				</li>
			</ul>
		</div>
	</nav>