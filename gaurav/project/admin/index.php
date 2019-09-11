<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
 <nav class="navbar navbar-dark bg-dark">
 	<h1>admin Panel</h1>
 </nav>
 <div class="container my-2">
 	<div class="row">
 		<div class="col-md-4 offset-md-4">
 			<form action="auth.php" method="post">
 				<div class="card">
 					<div class="card-header">
 						<h3>Admin</h3>
 					</div>
 					<div class="card-body">
 						<div class="form-group">
 						<label>Username/E-mail</label>
 						<input type="text" name="username" class="form-control" placeholder="username">
 					    </div>
 					    <div class="form-group">
 						<label>Password</label>
 						<input type="Password" name="pass" class="form-control" placeholder="password">
 					    </div>
 					</div>
 					<div class="card-footer">
 						<input type="submit" value="Login" class="btn btn-success">
 						<p class="text-danger">
 							
 						<?php

 							if(isset($_SESSION['msg']))
 							{
 								echo $_SESSION['msg'];
 								unset($_SESSION['msg']);
 							}
 						?>
 						</p>
 					</div>
 				</div>
 			</form>
 		</div>
 	</div>
 </div>
</body>
</html>