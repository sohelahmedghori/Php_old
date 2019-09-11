<div class="container-fluid">
	<h2>This is Profile Editing Page</h2>
	<div class="row">
		<div class="col-md-6 offset-3">
			<?php 
				 $data = $result->row_array();
			?>
			<form>
				<div class="card">
					<div class="card-header">
						<h2>This is Profile Page</h2>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover table-secondary">
							<tr>
								<td>Name</td>
								<td><input type="text" value="<?php echo $data['full_name']; ?>" class="form-control" name=""></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><input type="text" value="<?php echo $data['username']; ?>" class="form-control" disabled="disabled" name=""></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><textarea class="form-control"><?php echo $data['address']; ?>"</textarea></td>
							</tr>
							<tr>
								<td>City</td>
								<td>
									<select class="form-control" name="city">
										<option value="">Select</option>
										<option <?php if($data['city']=="Indore") echo "selected='selected'"; ?> value="Indore">Indore</option>
										<option <?php if($data['city']=="Bhopal") echo "selected='selected'"; ?> value="Bhopal">Bhopal</option>
										<option <?php if($data['city']=="Jabalpur") echo "selected='selected'"; ?> value="Jabalpur">Jabalpur</option>
										<option <?php if($data['city']=="Ujjain") echo "selected='selected'"; ?> value="Ujjain">Ujjain</option>
										<option <?php if($data['city']=="Katni") echo "selected='selected'"; ?> value="Katni">Katni</option>
										<option <?php if($data['city']=="Delhi") echo "selected='selected'"; ?> value="Delhi">Delhi</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>Male<input type="radio" <?php if($data['gender']=="male") echo "checked ='checked'" ;?> name="gender" value="male">
								Female<input type="radio" <?php if($data['gender']=="female") echo "cheked ='checked'" ;?> name="gender" value="female"></td>
							</tr>
							<tr>
								<td>Contact</td>
								<td><input type="text" value="<?php echo $data['contact']; ?>" class="form-control" name=""></td>
							</tr>
						</table>
					</div>
					<div class="card-footer">
						<a href="<?php site_url("update") ?>" class="btn btn-info">Edit Profile</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>