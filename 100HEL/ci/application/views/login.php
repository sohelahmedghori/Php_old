<div class="container mt-4" style="min-height: 500px;">
	<h2>Login Page</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<form action="<?php echo site_url('home/auth'); ?>" method="post">
					<div class="card">
						<div class="card-header">
							<h3>Login</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Email</label>
								<input type="text" placeholder="Email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" placeholder="Password" name="password" class="form-control">
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" value="Login" class="btn btn-primary">
							<input type="reset" value="Clear" class="btn btn-danger">
							<p class="text-danger">
								<?php echo $this->session->flashdata("msg"); ?>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>