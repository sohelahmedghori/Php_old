<div class="container-fluid" style="min-height:500px;">
  <h3>This is login page</h3>
  <div class="container"> 
  	<div class="row">
  		<div class="col-md-6 offset-md-3">
  			<div class="card">
  				<form action="<?php echo site_url('project/auth') ?>" method="post">
  					<div class="card-header">
  						<h4>login</h4>
  					</div>
  					<div class="card-body">
  						<div class="form-group">
  						    <label>Usrname</label>
  						    <input type="text" name="username" class="form-control"></div>
  						
  							<div class="form-group">
  						    <label>Password</label>
  						    <input type="password" name="password" class="form-control"></div>
  						</div>
  						<div class="card-footer">
  							<input type="submit" class="btn btn-success"></div>
  							<p class="text-danger">
  								<?php echo $this->session->flashdata("msg"); ?></p>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>
</div>