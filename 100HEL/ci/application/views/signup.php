<div class="container mt-4" style="min-height: 500px;">
	<h2>Signup Page</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2 my-3">
				<form action="" method="post">
					<!-- <?php
			        // echo validation_errors();
			        ?> -->
					<div class="card">
						<div class="card-header">
							<h3>Signup</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" placeholder="Full Name" class="form-control" value="<?php echo set_value('full_name'); ?>" name="full_name">
							</div>
							<div class="text-danger">
							<?php
							echo form_error("full_name");
							?>
				            </div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" placeholder="Email" value="<?php echo set_value('email'); ?>" class="form-control" name="email">
							</div>
							<div class="text-danger">
							<?php
							echo form_error("email");
							?>
				            </div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" placeholder="Password" class="form-control" value="<?php echo set_value('pass') ?>" name="pass">
							</div>
							<div class="text-danger">
							<?php
							echo form_error("pass");
							?>
				            </div>
							<div class="form-group">
			  					<label>Re-Password</label>
			  					<input type="password" placeholder="Re-password" class="form-control" value="<?php echo set_value('re_pass') ?>" name="re_pass">
			  				</div>
			  				<div class="text-danger">
							<?php
							echo form_error("re_pass");
							?>
				            </div>
			  				<div class="form-group">
			  					<label>Gender</label>
			  					<input type="radio" <?php echo set_radio('gender', 'male');?> value="male" name="gender">Male 
			  					<input type="radio" <?php echo set_radio('gender', 'female');?> value="female" name="gender">Female 
			  				</div>
			  				<div class="text-danger">
							<?php
							echo form_error("gender");
							?>
				            </div>
			  				<div class="form-group">
			  					<label>Address</label>
			  					<textarea class="form-control" name="add"><?php echo set_value('add');?></textarea>
			  				</div>
			  				<div class="text-danger">
							<?php
							echo form_error("add");
							?>
				            </div>
			  				<div class="form-group">
			  					<label>City</label>
			  					<select class="form-control" name="city">
			  						<option value="">Select</option>
			  						<option <?php echo set_select('city', 'Indore');?> value="Indore" >Indore</option>
			  						<option <?php echo set_select('city', 'Bhopal');?> value="Bhopal" >Bhopal</option>
			  						<option <?php echo set_select('city', 'Jaipur');?> value="Jaipur" >Jaipur</option>
			  						<option <?php echo set_select('city', 'Udaipur');?> value="Udaipur" >Udaipur</option>
			  						<option <?php echo set_select('city', 'Mumbai');?> value="Mumbai" >Mumbai</option>
			  						<option <?php echo set_select('city', 'Pune');?> value="Pune" >Pune</option>
			  					</select>
			  				</div>
			  				<div class="text-danger">
							<?php
							echo form_error("city");
							?>
				            </div>
			  				<div class="form-group">
			  					<label>Contact</label>
			  					<input type="text" class="form-control" value="<?php echo set_value('contact');?>" name="contact">
			  				</div>
			  				<div class="text-danger">
							<?php
							echo form_error("contact");
							?>
				            </div>
						</div>
						<div class="card-footer">
							<input type="submit" value="Signup" class="btn btn-success">
							<input type="reset" value="Clear" class="btn btn-danger">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>