<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js'); ?>"></script>
</head>
<body>
<div class="container mt-4">
	<div class="row">
			
		<div class="col-md-4 offset-md-4 mt-4">
		<form action="<?php echo site_url('admin/auth'); ?>" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Admin Login</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="Text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-primary">
					<p class="text-danger">
						<?php echo $this->session->flashdata("msg"); ?>
					</p>
				</div>
		</form>
		</div>
	</div>
</div>
</body>
</html>