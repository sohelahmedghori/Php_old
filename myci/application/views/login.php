<div class="container mt-4" style="min-height: 500px;">
  <h2>Login Page</h2>
  <div class="row">
  	<div class="col-md-4 offset-md-4">
  		<form action="<?php echo site_url('home/auth');?>" method="post">
  			
  		<div class="card">
  			<div class="card-header">
  				<h3>User Login</h3>
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
  		</div>
  		</form>
  	</div>
  </div>
</div>