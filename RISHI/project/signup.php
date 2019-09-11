<?php
include("header.php")
?>

<script type="text/javascript" src="js/val.js"></script>
	<div class="col-md-9 ">
		<div class="card">
			<div class="card-header">
				<div>
				<h3>User SignUp</h3>	
				</div>
			</div>
		<form action="" method="post">
			<div class="card-body">
				<div class="form-group">


					
			    	<label for="full">FullName</label>
		    		<div class="input-group">
			    	<div class="input-group-append">
				    <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
				    </div>
    				<input type="text" name="fullname" id="full" class="form-control" placeholder="fullname">
				    </div>
				    <p class="text-danger" id="full_name_msg"></p>
			    </div>

			    <div class="form-group">
			    	<label>Profile Pic</label>
			    	<input type="file" id="profile_pic" name="image" class="form-control">
			    	<p class="text-danger" id="profile_pic_msg"></p>	
			    </div>
			    <div class="form-group">
			    	<label for="user">Username/email</label>
			    	<div class="input-group">
		    		<div class="input-group-append">				   	<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
				    </div>
		    		<input type="text" id="user" class="form-control" name="email" placeholder="@name">
		    		<p class="text-danger" id="user_name_msg"></p>
			    	</div>
			    </div>
				<div class="form-group">              						<label for="full_name">MOBILE NO.</label>
					<div class="input-group">
		     		<div class="input-group-append">
					<span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
					</div>
		     		<input type="text" name="mobile" id="mobile" class="form-control" placeholder="mobile no.">
		     		<p class="text-danger" id="mobile_msg"></p>
					</div>						
				</div>
				<div class="form-group">
					<label>PASSWORD</label>
					<div class="input-group">
						<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>		
						</div>
						<input type="password" id="pass" name="pass" placeholder="password" class="form-control">
						<p class="text-danger" id="pass_msg"></p>
					</div>
				</div>
				<div class="form-group">
					<label>Re-password</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>		
						</div>
						<input type="password" id="re_pass" placeholder="re-password" class="form-control">
						<p class="text-danger" id="re_pass_msg"></p>
					</div>
				</div>
				<div class="form-group">
					<label>gender</label>
					<div> 
						male<input type="radio" id="male" name="male" value="male">
						female<input type="radio" id="female" name="male" value="female">
						<p class="text-danger" id="gender_msg"></p>
					</div>		
				</div>
				<div class="form-group">
					<label>address</label>
					<textarea class="form-control" id="address" name="add" placeholder="address"></textarea>
					<p class="text-danger" id="address_msg"></p>
				</div>
				<div class="form-group">
					<label>city</label>
					<select class="form-control" id="city" name="city">
						<option>select</option>
						<option>indore</option>
				        <option>ujjain</option>
				        <option>bhopal</option>
					</select>
					<p class="text-danger" id="city_msg"></p>
				</div>
			<div class="card-footer">                    					<input type="submit" id="submit" value="SignUp" class="btn btn-success">
			</div>
			</div>
		</form>			
	</div>
</body>
</html>