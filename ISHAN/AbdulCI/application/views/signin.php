	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form action="<?php echo site_url("home/authi"); ?>" method="post">
			<div class="card">
				<div class="card-header">
					<h3 class="text-center">Login Here</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="username" placeholder="Enter Registered Email" class="form-control">
					</div>
					<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Enter Password" class="form-control">
			</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Signin" class="btn btn-primary">
				<p class="text-danger">
					<?php echo $this->session->flashdata("msg"); ?>
				</p>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>