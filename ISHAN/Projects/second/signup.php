<?php
include("db.php");
include("header.php");
?>
<div class="col-md-9 mb-1">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary py-4 pl-2 text-light">Registration Page</h4>
				</div>
			</div>
<div class="row">
	<div class="col-sm-8 offset-2">
		<div class="card">
			<div class="card-body">
				<form id="myForm" action="save.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Full Name</label>
						<input id="name" type="text" name="full_name" class="form-control" placeholder="Enter your Full name">
					</div>
					<span class="error" id="nameerror"></span>
					<div class="form-group">
						<label>Email Id</label>
						<input Onkeyup="checkValidEmail()" id="email" type="text" name="username" class="form-control" placeholder="Enter your Email-id">
					</div>
					<span class="error" id="emailerror"></span>

					<div class="form-group">
						<label>Password</label>
						<input Onkeyup="matchpassword()" id="password" type="password" name="pass" class="form-control" placeholder="Enter your Password">
					</div>
					<span class="error" id="passworderror"></span>

					<div class="form-group">
						<label>Re-Password</label>
						<input Onkeyup="matchpassword()" id="confirmPassword" type="password" class="form-control" placeholder="Enter Password Again">
					</div>
					<span class="error" id="cpassworderror"></span>

					<div class="form-group">
						<label>Gender </label>
						<input class="gender" type="radio" name="gender" value="male">Male
						<input class="gender" type="radio" name="gender" value="female">Female
					</div>
					<span class="error" id="gendererror"></span>

					<div class="form-group">
						<label>Address </label>
						<textarea id="address" class="form-control" name="add" placeholder="Enter Address Here..."></textarea>
					</div>
					<span class="error" id="addresserror"></span>

					<div class="form-group">
						<label>Contact</label>
						<input id="contact" type="text" name="contact" class="form-control" placeholder="Enter Mobile or Phone">
					</div>
					<span class="error" id="contacterror"></span>

					<div class="form-group">
						<label>Image File</label>
						<input id="img" type="file" name="simage" class="form-control">
						<?php
							if (isset($_SESSION['msg'])) {
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
						?>
					</div>
					<div class="form-group">
						<label>City</label>
						<select id="city" class="form-control" name="city">
							<option value="">SELECT</option>
							<option value="INDORE" >INDORE</option>
							<option value="BHOPAL" >BHOPAL</option>
							<option value="JABALPUR" >JABALPUR</option>
							<option value="KATNI" >KATNI</option>
							<option value="UJJAIN" >UJJAIN</option>
							<option value="DELHI" >DELHI</option>
						</select>
					</div>
					<span class="error" id="cityerror"></span>

			<div class="card-footer">
				<input id="savebtn" type="submit" class="btn btn-success" value="Signup">
			</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
<?php
		include("footer.php");
?>
