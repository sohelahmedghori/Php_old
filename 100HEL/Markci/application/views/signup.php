<div class="container my-4" style="min-height: 500px;">
	<h2>Signup Page</h2>
	<div class="container">
		<div class="row my-2">
			<div class="col-md-8 offset-2">
				<form action="" method="post">
					<div class="card">
						<div class="card-header">
							<h4>Signup</h4>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" name="full_name" placeholder="Full Name" value="<?php echo set_value('full_name'); ?>" class="form-control">
								<div class="text-danger">
									<?php
									echo form_error('full_name');
									?>
								</div>
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" placeholder="Username" value="<?php echo set_value('username'); ?>" name="username" class="form-control">
								<div class="text-danger">
									<?php
									echo form_error('username');
									?>
								</div>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="pass" value="<?php echo set_value('pass'); ?>" placeholder="Password" class="form-control">
								<div class="text-danger">
									<?php
									echo form_error('pass');
									?>
								</div>
							</div>
							<div class="form-group">
								<label>Re-Password</label>
								<input type="password" name="re-pass" value="<?php echo set_value('re-pass'); ?>" placeholder="Re-Password" class="form-control">
								<div class="text-danger">
									<?php
									echo form_error('re-pass');
									?>
								</div>
							</div>
							<div class="form-group">
								<label>Gender</label>
								<input type="radio" value="Male" <?php echo set_radio('gender', 'male');?> name="gender">Male 
								<input type="radio" value="Female" <?php echo set_radio('gender', 'female');?> name="gender">Female 
								<div class="text-danger">
									<?php
									echo form_error('gender');
									?>
								</div>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea name="address" class="form-control"><?php echo set_value('address');?></textarea>
								<div class="text-danger">
									<?php
									echo form_error('address');
									?>
								</div>
							</div>
							<label>City</label>
							<div class="form-group">
								<select class="form-control" name="city">
									<option value="">Select</option>
									<option value="Indore" <?php echo set_select('city', 'indore');?>>Indore</option>
									<option value="Pune" <?php echo set_select('city', 'pune');?>>Pune</option>
									<option value="Mumbai" <?php echo set_select('city', 'mumbai');?>>Mumbai</option>
									<option value="Jaipur" <?php echo set_select('city', 'jaipur');?>>Jaipur</option>
									<option value="Udaipur" <?php echo set_select('city', 'udaipur');?>>Udaipur</option>
								</select>
								<div class="text-danger">
									<?php
									echo form_error('city');
									?>
								</div>
							</div>
							<div class="form-group">
								<label>Contact</label>
								<input type="text" placeholder="Contact" value="<?php echo set_value('contact'); ?>" name="contact" class="form-control">
								<div class="text-danger">
									<?php
									echo form_error('contact');
									?>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" value="Signup" class="btn btn-info">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>