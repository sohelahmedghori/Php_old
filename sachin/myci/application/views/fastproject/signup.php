<div class="container-fluid"style="min-height: 500px;">
	<div class="container-fluid">
		<h2>Hello user signup</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-md-3">
				<div class="card">
					<div class="card-header">
						<h2>signup</h2>
					</div>
					<form action="" method="post">
						
					<div class="card-body">
						<div class="form-group">
							<label>Full Name</label><br>
							<input type="text" name="full_name" class="form_control" vlaue="<?php echo set_value('full_name'); ?>">
						</div>
						<div class="text-danger">
							<?php echo form_error("full_name"); ?>
						</div>




						<div class="form-group">
							<label>Username</label><br>
							<input type="text" name="username" class="form_control" vlaue="<?php echo set_value('username') ?>">
						</div>
						<div class="text-danger">
							<?php echo form_error("full_name"); ?>
						</div>




						
						<div class="form-group">
							<label>password</label><br>
							<input type="password" name="password" class="form_control" vlaue="<?php echo set_value("password") ?>">
						</div>
						<div class="text-danger">
							<?php echo form_error("password"); ?>
						</div>





						<div class="form-group">
							<label>Re Password</label><br>
							<input type="password" name="re_password" class="form_control" vlaue="<?php echo set_value('re_password ') ?>">
						</div>
						<div class="text-danger">
							<?php echo form_error("re_password"); ?>
						</div>




						
						<div class="form-group">
							<label>Address</label><br>
							<textarea class="form_control" name="address" ><?php echo set_value("address") ?></textarea>
						</div>
						<div class="text-danger">
							<?php echo form_error("address"); ?>
						</div>




						
						<div class="form-group">
							<label>City</label>
							<select class="form_control" name="city">
								<option value="">Select</option>
								<option<?php echo set_select("city",'Ujjain'); ?> value="Ujjain">Ujjain</option>
								<option<?php echo set_select("city",'Indore') ?> value="Indore">Indore</option>
								<option <?php echo set_select("city","Bhopal") ?> value="Bhopal">Bhopal</option>
								<option <?php echo set_select("city",'Mumbai') ?> value="Mumbai">Mumbai</option>
							</select> 
						</div>
						<div class="text-danger">
							<?php echo form_error("city"); ?>
						</div>





						
						<div class="form-group">
							<label>Gender</label>
							<input<?php echo set_radio("gender",'male'); ?> type="radio" name="gender" value="male">Male
							<input<?php echo set_radio("gender",'female'); ?> type="radio" name="gender" value="female">Female
						</div>
						<div class="text-danger">
							<?php echo form_error("gender"); ?>
						</div>




						
						<div class="form-group">
							<label>Contact</label><br>
							<input type="text" name="contact" class="form_control" vlaue="<?php echo set_value('contact'); ?>">
						</div>
						<div class="text-danger">
							<?php echo form_error("contact"); ?>
						</div>
						

					</div>
					<div class="card-footer">
						<input type="submit" class="btn btn-primary btn-sm">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>