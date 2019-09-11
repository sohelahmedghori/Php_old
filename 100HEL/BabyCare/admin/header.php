<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm sticky-top bg-dark navbar-dark">
		<a href="#" class="navbar-brand">Admin Panel</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#my"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="my">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
				<li class="nav-item"><a href="addproduct.php" class="nav-link">Add Product</a></li>
				<li class="nav-item"><a href="view_pro.php" class="nav-link">View Product</a></li>
				<li class="nav-item"><a href="addcategory.php" class="nav-link">Add Category</a></li>
				<li class="nav-item"><a href="view_cate.php" class="nav-link">View Category</a></li>
				<li class="nav-item"><a href="view_user.php" class="nav-link">View User</a></li>
				<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Setting</a>
					<div class="dropdown-menu">
						<a href="#" class="dropdown-item">Change Password</a>
						<a href="create_new_admin.php" class="dropdown-item">Create New Admin</a>
					</div>
				</li>
				<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
			</ul>
		</div>
	</nav>
	<div style="min-height: 600px;" class="mt-4">
		