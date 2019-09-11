<div class="container-fluid" style="min-height: 500px;">
	<h2>login page</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="<?php echo site_url('fast/auth') ?>" method="post">
					
				<div class="card">
					<div class="card-header">
						<h3>signup</h3>
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
						
					<input type="submit" value="login" class="btn btn-success ">
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