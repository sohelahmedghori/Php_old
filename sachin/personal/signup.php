<?php 
include("header.php") ?>
<div class="container">
<h3>login</h3></div>
<div class="row">
  <div class="col-md-6 offset-md-3">
  	<div class="card">
           	 	<div class="card-header">
           	 		<h4>Signup</h4>
           	 	</div>
                 <div class="card-body">
           	 		<form action="signup_action.php" method="post" enctype="multipart/form-data">
           	 			<div class="form-group ">
									<label>Full Name</label>
									<input type="Text" id="full_name"name="full_name" placeholder="Full Name" class="form-control">
								<p class="text-danger" id="full_name_msg"></p></div>


								<div class="form-group">
									<label>Profile Pic</label>
									<input type="file" name="image" id="profile_pic" placeholder="Full Name" class="form-control">
								<p class="text-danger" id="profile_pic_msg"></p>
								<p class="text-danger">
									<?php
									if(isset($_SESSION['msg']))
									{

										echo $_SESSION['msg'];
										unset($_SESSION['msg']);
									} 


									?></p></div>





								<div class="form-group">
									<label>Username/Email</label>
									<input type="Text" name="username" id="email"placeholder="Username" class="form-control">
								<p class="text-danger" id="email_msg"></p></div>




								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" id="password"placeholder="Password" class="form-control">
								<p class="text-danger" id="password_msg"></p></div>





								<div class="form-group">
									<label>Re-Password</label>
									<input type="password" placeholder="Re-Password" id="re_password"class="form-control">
								<p class="text-danger" id="ree_password_msg"></p></div>




								<div class="form-group">
									<label>Gender</label>
									<input type="radio" value="male" id="male"name="gender" />Male
									<input type="radio"  value="female" id="female"name="gender" />Female
								<p class="text-danger" id="gender_msg"></p></div>





								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" name="address" id="address"placeholder="Address"></textarea>
								<p class="text-danger" id="address_msg"></div>
													



								<div class="form-group">
									<label>Contact</label>
									<input type="text" placeholder="Contact" name="contact" id="contact"class="form-control">
								<p class="text-danger" id="contact_msg"></div>



								<div class="form-group">
									<label>City</label>
									<select class="form-control" id="city"name="city">
										<option>Select</option>
										<option>Indore</option>
										<option>Bhopal</option>
										<option>Mumbai</option>
										<option>Pune</option>
										<option>Select</option>
									</select>
								<p class="text-danger" id="city_msg"></div>




           	 		
           	 	</div>
           	 	<div class="card-footer">
           	 		<input type="submit" value ="Signup" id="submit"class="btn btn-success">
           	 	</div>
           	 	</form>
           	 	</div>
           	 	</div></div>