<div class="container my-4" style="min-height: 500px;">
	<h2>Signin Page</h2>
	<div class="container">
		<div class="row my-2">
			<div class="col-md-4 offset-4">
				<form action="<?php echo site_url('home/auth') ?>" method="post">
					<div class="card">
						<div class="card-header">
							<h4>Signin</h4>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" placeholder="Username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" value="Login" class="btn btn-info">
						<p class="text-danger">
							<?php echo $this->session->flashdata("msg"); ?>
						</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
