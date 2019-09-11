<div class="container" style="min-height:500px;">
 <h2>Edit Profile</h2>
 <div class="row">
 	<div class="col-md-6 offset-md-3">
 		<?php $data= $result->row_array(); ?>
 		<form action="<?php echo site_url('user/update') ?>" method="post" >
 		<table class="table table-dark table-hover table-bordered">
 			<tr>
 			    <td>Full Name</td>
 			    <td><input type="text"name="full_name" class="form-control"value="<?php echo $data['full_name'] ?>">
 			    </td>
 			</td>
 			<tr>
 			    <td>User Name</td>
 			    <td><input type="text"name="username" class="form-control"value="<?php echo $data['username'] ?>" disabled="disabled">
 			    </td>
 			</td>
 			<tr>
 			    <td>Address</td>
 			    <td><textarea type="text"name="add" class="form-control"><?php echo $data['add']; ?></textarea>
 			    </td>
 			</td>
 			<tr>
 			    <td>Contact</td>
 			    <td><input type="text" name="contact" class="form-control"value="<?php echo $data['contact'] ?>">
 			    </td>
 			</td>
 			<tr>
 			    <td>City</td>
 			    <td>
 			    	<select class="form-control" name="city">
 			    	    <option value="">select</option>
 			    	    <option <?php if($data['city']=="Indore") echo "selecte='selected'" ?> value="Indore">Indore</option>
 			    	    <option <?php if($data['city']=="Dewas") echo "selecte='selected'" ?> value="Dewas">Dewas</option>
 			    	    <option <?php if($data['city']=="Mumbai") echo "selecte='selected'" ?> value="Mumbai">Mumbai</option>
 			    	    <option <?php if($data['city']=="Bhopal") echo "selecte='selected'" ?> value="Bhopal">Bhopal</option>
 			        </select>
 			    </td>
 			</td>
 			<tr>
 			    <td>Gender</td>
 			    <td>
 			    	Male  <input <?php if($data['gender']=="male")echo "checked='checked'" ?>type="radio"name="gender" value="male">
 			    	Female<input <?php if($data['gender']=="female") echo "checked='checked'" ?>type="radio"name="gender"value="female">
 			    </td>
 			</tr>
 			<tr>
 				<td colspan="2" align="center">
 					<input type="submit" value="Upadate" class="btn btn-success"></tr>
 		</table>
 	</form></div></div></div>