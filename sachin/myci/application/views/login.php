<div class="container mt-4" style="min-height:500px; ">
<h3> login page</h3>
<div class="row">
   <div class="col-md-6 offset-md-3">
   	<form action="<?php echo site_url('home/auth'); ?>" method="post">
   		<div class="card ">
   			<div class="card-header">
   				<h4>login</h4>
   			</div>
   			<div class="card-body">
   				<div class="form-group">
   				   <label>User Name</label>
   				     <input type="text" name="username" class="form-control">
   			    </div>
   				 <div class="form-group">
   				 	<label>Password</label>
   				 	<input type="password" name="pass" class="form-control">
   				 </div>
   		    </div>
   			
   			<div class="card-footer">
   				<input type="submit" value="login" class="btn btn-success"></div>
   			</div>
            <p class="text-danger">
               <?php echo $this->session->flashdata("msg"); ?></p>
   		</form>
   	</div>
   </div>
</div>