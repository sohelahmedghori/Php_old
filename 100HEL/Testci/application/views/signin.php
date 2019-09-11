<div class="container" style="min-height: 500px;">
	<div class="row">
	<h2>User Signin</h2>
	<div class="col-md-6 offset-3 my-4">
		<form action="<?php echo site_url("home/auth"); ?>" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Signin</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-info">
					<p class="text-danger">
						<?php
						echo $this->session->flashdata("msg");
						?>
					</p>
				</div>
			</div>
		</form>
	</div>
</div>
</div>