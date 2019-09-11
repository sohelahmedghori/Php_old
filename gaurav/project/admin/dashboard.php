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
   	<a href="#" class="navbar-brand">Admin Panel</a>
   	<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
   		<span class="navbar-toggler-icon"></span>
   	</button>
   	<div id="mymenu" class="collapse navbar-collapse">
   		<ul class="navbar-nav">
   			<li class="nav-item">
   				<a href="addproduct.php" class="nav-link">Add product</a>
   			</li>
   			<li class="nav-item">
   				<a href="view product.php" class="nav-link">View product</a>
   			</li>
   			<li class="nav-item">
   				<a href="addcategory.php" class="nav-link">Add Category</a>
   			</li>
   			<li class="nav-item">
   				<a href="view category.php" class="nav-link">View Category</a>
   			</li>
            <li class="nav-item">
               <a href="view_user.php" class="nav-link">View Users</a>
            </li>
            <li class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Setting</a>
               <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">Change Password</a>
                  <a href="create_user_admin.php" class="dropdown-item">Createuseradmin</a>
               </div>
            </li>
   			<li class="nav-item">
   				<a href="logout.php" class="nav-link">Logout</a>
   			</li>
   		</ul>
   		
   	</div>
   </nav>
