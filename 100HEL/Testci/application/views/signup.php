<h2>User Signup</h2>
	<div class="col-md-8 offset-2 my-4">
		<form action="" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Signup</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="full_name" value="<?php echo set_value('full_name'); ?>" class="form-control">
					</div>
					<div class="text-danger">
					<?php
					echo form_error("full_name");
					?>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control">
					</div>
					<div class="text-danger">
					<?php
					echo form_error("username");
					?>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control">
					</div>
					<div class="text-danger">
					<?php
					echo form_error("password");
					?>
					</div>
					<div class="form-group">
						<label>Re-Password</label>
						<input type="password" name="re-password" value="<?php echo set_value('re-password'); ?>" class="form-control">
					</div>
					<div class="text-danger">
					<?php
					echo form_error("re-password");
					?>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" <?php echo set_radio('gender', 'male'); ?> name="gender" value="Male">Male 
						<input type="radio" <?php echo set_radio('gender', 'female'); ?> name="gender" value="Female">Female 
					</div>
					<div class="text-danger">
					<?php
					echo form_error("gender");
					?>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address"><?php echo set_value('address'); ?></textarea>
					</div>
					<div class="text-danger">
					<?php
					echo form_error("address");
					?>
					</div>
					<div class="form-group">
						<label>City</label>
						<select class="form-control" name="city">
							<option value="">Select</option>
							<option <?php echo set_select('city', 'Indore'); ?> value="Indore">Indore</option>
							<option <?php echo set_select('city', 'Pune'); ?> value="Pune">Pune</option>
							<option <?php echo set_select('city', 'Mumbai'); ?> value="Mumbai">Mumbai</option>
							<option <?php echo set_select('city', 'Udaipur'); ?> value="Udaipur">Udaipur</option>
						</select>
					</div>
					<div class="text-danger">
					<?php
					echo form_error("city");
					?>
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" value="<?php echo set_value('contact'); ?>" name="contact" class="form-control">
					</div>
					<div class="text-danger">
					<?php
					echo form_error("contact");
					?>
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Submit" class="btn btn-info">
				</div>
			</div>
		</form>
	</div>