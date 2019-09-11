<?php
include ("header.php");

 ?>
 <script type="text/javascript" src="js/vall.js"></script>
 <div class="container">
 	<div class="row">
 		<div class="col-md-6 offset-md-1"><br><br><br>
 			<h3>User Signup</h3>
 		</div>
 	</div>
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-6 offset-md-3">
 			<form action="save.php" method="post">
 				
 			<div class="card">
 				<div class="card-header">
 					<h2>signup</h2>
 				</div>
 				<div class="card-body">
 					<div class="form-group">
 						<label>Full Name</label>
 						<input type="text" name="full_name" class="form-control" placeholder="full name" value=""id="full_name">
 						<p class="text-danger" id="full_name_msg"></p>
 					</div>
 					<div class="form-group">
 						<label>User Name</label>
 						<input type="text" name="username" class="form-control"id="username" placeholder="username" value="">
 						<p class="text-danger" id="username_msg"></p>
 					</div>
 					<div class="form-group">
 						<label>Password</label>
 						<input type="password" name="password" class="form-control" id="password"placeholder="password" value="">
 						<p class="text-danger" id="password_msg"></p>
 					</div>
 					<div class="form-group">
 						<label>Ree Password</label>
 						<input type="password"id="ree_password" name="ree_password" class="form-control" placeholder="ree password" value="">
 						<p class="text-danger" id="ree_password_msg"></p>
 					</div>
 					<div class="form-group">
 						<label>Address</label>
 						<textarea class="form-control" name="address" placeholder="address" id="address"></textarea>
 						<p class="text-danger" id="address_msg"></p>
 					</div>
 					<div class="form-group">
 						<label>City</label>
 						<select name="city"id="city" class="form-control" >
 							<option value="">select</option>
 							<option>Indore</option>
 							<option>Ujjain</option>
 							<option>Bhopal</option>
 							<option>Dewas</option>
 						</select>
 						<p class="text-danger" id="city_msg"></p>
 					</div>
 					<div class="form-group">
 						<label>Gender</label>
 						<input type="radio"id="male" name="gender" value="male">Male
 						<input type="radio" name="gender"id="female" value="female">Female
 						
 						<p class="text-danger" id="gender_msg"></p>

 					</div>
 					<div class="form-group">
 						<label>Contact</label>
 						<input type="text" name="contact" class="form-control" placeholder="contact" value=""id="contact">
 						<p class="text-danger" id="contact_msg"></p>
 					</div>
 				</div><div class="card-footer">
 					<input type="submit" value="submit" class="btn btn-primary" id="sub">
 				</div>
 			</div>
 			</form>
 		</div>
 	</div>
 </div>