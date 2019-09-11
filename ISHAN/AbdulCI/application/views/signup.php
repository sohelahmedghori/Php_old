
<div class="container-fluid my-4">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form action="" method="post">
		<?php
		 	// echo validation_errors();
		?>
		<div class="card">
				<div class="card-header">
					<h2 class="text-center">Registration Page</h2>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" value="<?php echo set_value("full_name") ?>" class="form-control" name="full_name" id="name" placeholder="Enter Full Name">
						<h6 id="namecheck"></h6>
					</div>
					<div class="text-danger">
						<?php
							echo form_error("full_name");
						?>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" value="<?php echo set_value("username") ?>" class="form-control" name="username" placeholder="Enter Your Email" id="username">
						<h6 id="usercheck"></h6>
					</div>
					<div class="text-danger">
						<?php
							echo form_error("username");
						?>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" value="<?php echo set_value("pass") ?>" class="form-control" name="pass" placeholder="Enter Password" id="password">
						<h6 id="passcheck"></h6>
					</div>
					<div class="text-danger">
						<?php
							echo form_error("pass");
						?>
					</div>
					<div class="form-group">
						<label>Confierm Password</label>
						<input type="password" value="<?php echo set_value("re_pass") ?>" class="form-control" name="re_pass" placeholder="Enter Password Again" id="cpassssword">
						<h6 id="cpasscheck"></h6>
					</div>
					<div class="text-danger">
						<?php
							echo form_error("re_pass");
						?>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" placeholder="Enter Your Address" name="add"><?php echo set_value("add") ?></textarea>
						<h6 id="addcheck"></h6>
					</div>
					<div class="text-danger">
						<?php
							echo form_error("add");
						?>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" <?php echo set_radio("gender","male") ?> value="male" name="gender">Male
						<input type="radio" <?php echo set_radio("gender","fmale") ?> value="female" name="gender">Female
					</div>
					<div class="text-danger">
						<?php
							echo form_error("gender");
						?>
					</div>
					<div class="form-group">
						<label>City</label>
						<select class="form-control" name="city">
							<option value="">Select</option>
							<option <?php echo set_select('city','Indore') ?> value="Indore">Indore</option>
							<option <?php echo set_select('city','Bhopal') ?> value="Bhopal">Bhopal</option>
							<option <?php echo set_select('city','Jabalpur') ?> value="Jabalpur">Jabalpur</option>
							<option <?php echo set_select('city','Ujjain') ?> value="Ujjain">Ujjain</option>
							<option <?php echo set_select('city','Katni') ?> value="Katni">Katni</option>
							<option <?php echo set_select('city','Delhi') ?> value="Delhi">Delhi</option>
						</select>
					</div>
					<div class="text-danger">
						<?php
							echo form_error("city");
						?>
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" value="<?php echo set_value("contact") ?>" class="form-control" name="contact" placeholder="Enter 10 Digit Contact">
						<h6 id="contactcheck"></h6>
					</div>
					<div class="text-danger">
						<?php
							echo form_error("contact");
						?>
					</div>
					<!-- 
					<div class="form-group">
						<label>Upload Pic</label>
						<input type="file" class="form-control" name="">
					</div> -->
				</div>
				<div class="card-footer">
					<input type="submit" value="Signup" class="btn btn-success float-right">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

