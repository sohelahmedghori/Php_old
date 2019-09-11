<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-10 offset-1">
			<form>
				<h1>Register Form</h1>
			<div class="form-group">
				<label for="username">Full Name</label>
				<input type="text" name="username" id="username" class="form-control" placeholder="Enter Name" autocomplete="off">
				<h6 id="usercheck"></h6>
			</div>
			<div class="form-group">
				<label for="password">Username/Email</label>
				<input type="password" name="pass" id="password" class="form-control" placeholder="Enter Password">
				<h6 id="passcheck"></h6>
			</div>
			<div class="form-group">
				<label for="con_password">Confirm Password</label>
				<input type="password" name="cpass" id="con_password" class="form-control" placeholder="Enter Password Again">
				<h6 id="conpasscheck"></h6>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-warning">
			</div>
			</form>
		</div>
	</div>
</div>



</body>
</html>