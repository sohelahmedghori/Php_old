<?php 
include("header.php");
?>
		<div class="container border col-md-8">
			<h4 class="bg-info text-light my-4 px-4 py-2">User Login</h4>
			<div class=" offset-md-2 col-md-8 mb-4">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Login</div>
				</div>
				<form action="logauth.php" method="post">
					<div class="card-body" style="background-color: #E9EBEE">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" placeholder="Username" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="pass" placeholder="Password" class="form-control"/>
						</div>
						<div class="card-footer">
							<input type="submit" class="btn btn-info" value="Login">
							<p class="text-danger text-center">
								<?php
									echo $_SESSION['msg'];
								?>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
		</div>
<?php  
include("footer.php");
?>		