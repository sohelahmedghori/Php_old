<?php

// include("db.php");

include("header.php"); 

?>
<div class="container">
	<div class="row">
		<div class="col-md-9 border p-4">
			<h4 class="bg-secondary text-light px-4 py-2 ">
				user login
			</h4>
			<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					login
				</div>
				<div class="card-body">
					<form action="auth.php" method="post">
						<div class="form-group">
							<label>username</label>
							<input type="text"  name="username" placeholder ="username"class="form-control">
						</div>
						<div class="form-group">
							<label>password</label>
							<input type="password" name="password" placeholder ="password"class="form-control">
						</div>
				
				</div>
				  <div class="card-footer">
				  	<input type="submit" value="login"  class="btn btn-success">

				  	<p class="text-danger text-center">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
						</p>
						<a href="signup.php">creat new account</a>
				  </div>
					</form>
			</div>
		</div>

	    </div>
		</div>
		
</div>
	
</div>

 <?php
include("footer.php"); 
 ?>