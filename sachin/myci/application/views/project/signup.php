<div class="container"style="min-height:500px;">
				<h3>This is a signup page</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="" method="post">
				<div class="card">
					<div class="card-header">
						<h4>signup</h4>
					</div>
					<div class="card-body">
						<div class="form_group">
							<label>Full_name</label>
							<input type="text" name="full_name" class="form-control" value="<?php echo set_value('full_name') ?>">
						</div>
						    <div class="text-danger">
                            <?php
                            echo form_error("full_name");
                             ?>
                             </div>
        
						<div class="form_group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>">
						</div>

						<div class="text-danger">
							<?php echo form_error("username") ?></div>

						<div class="form_group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>">
						</div>

						<div class="text-danger">
							<?php
							echo form_error("password"); ?></div>

						<div class="form_group">
							<label>Ree Password</label>
							<input type="password" name="ree_password" class="form-control" value="<?php echo set_value('ree_password'); ?>">
						</div>

						<div class="text-danger">
							<?php echo form_error("ree_password") ?></div>

						<div class="form_group">
							<label>Address</label>
							<!-- <input type="text" name="full_name" class="form-control"> -->
							<textarea class="form-control" name="address"><?php echo set_value('address') ?></textarea>
						</div>

						<div class="text-danger">
							<?php echo form_error("address") ?></div>
						<div class="form_group">
							<label>City</label>
							   <select name="city" class="form-control">
                               <option value="Select">Select</option>
                               <option<?php echo set_select('city','Indore') ?> value="Indore">Indore</option>
                               <option<?php echo set_select('city','Ujjain') ?> value="Ujjain">Ujjain</option>
                               <option<?php echo set_select('city','Bhopal') ?> value="Bhopal">Bhopal</option>
                               <option<?php echo set_select('city','Mumbai') ?> value="Mumbai">Mumbai</option>
							</select>
						</div>

						<div class="text-danger">
							<?php echo form_error("city"); ?></div>
						<div class="form_group">
							<label>Gender</label><br>
							<input type="radio"<?php echo set_radio('gender','male') ?> name="gender" value="male" >Male
							<input type="radio" <?php echo set_radio('gender',"female") ?> name="gender"  value="female">Female
                           
                           <div class="text-danger">
                           	<?php echo form_error("gender") ?></div>
						</div><div class="form_group">
							<label>Contact</label>
							<input type="text" name="contact" class="form-control" value="<?php echo set_value('contact'); ?>">
						</div>

						<div class="text-danger">
							<?php echo form_error("contact") ?></div>
					</div>
					<div class="card-footer">
						<input type="submit" class="btn btn-success"></div>
				</div>
			</div>
				</form>

			</div>
		</div>
	</div>
</div>