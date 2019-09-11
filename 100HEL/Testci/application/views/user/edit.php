<div class="container" style="min-height: 500px;">
	<h3>User Profile</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-6 my-4 offset-3">
				<?php
				$data=$result->row_array();
				?>
				<form action="<?php echo site_url('user/update'); ?>" method="post">
    			<table class="table table-dark table-hover table-bordered">
    				<tr>
    					<td>Full Name</td>
    					<td><input type="Text" name="full_name" class="form-control" value="<?php echo $data['fullname']; ?>" /></td>
    				</tr>
    				<tr>
    					<td>Email</td>
    					<td><input type="text" class="form-control" value="<?php echo $data['username']; ?>" disabled="disabled" /></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><input <?php if($data['gender']=="Male") echo "checked='checked'" ?> type="radio" name="gender" value="Male" />Male <input <?php if($data['gender']=="Female") echo "checked='checked'" ?> type="radio" name="gender" value="Female" />Female </td>
					</tr>
					<tr>
						<td>Address</td>
						<td><textarea name="address" class="form-control"><?php echo $data['address']; ?></textarea></td>
					</tr>
					<tr>
						<td>City</td>
						<td> <select class="form-control" name="city">
							<option value="">Select</option>
							<option <?php if($data['city']=="Indore") echo "selected='selected'"; ?> value="Indore">Indore</option>
							<option  <?php if($data['city']=="Pune") echo "selected='selected'" ?> value="Pune">Pune</option>
							<option  <?php if($data['city']=="Mumbai") echo "selected='selected'" ?> value="Mumbai">Mumbai</option>
							<option  <?php if($data['city']=="Udaipur") echo "selected='selected'" ?> value="Udaipur">Udaipur</option>
						</select>
						</td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input type="text" name="contact" value="<?php echo $data['contact']; ?>" class="form-control"/></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" value="Update" class="btn btn-info"></td>
					</tr>
					</table>
				</form>	
			</div>
		</div>
	</div>
</div>
</div>