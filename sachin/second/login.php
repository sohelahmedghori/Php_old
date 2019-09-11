 <?php 

include("header.php");
include("db.php");

 ?>
 <br><br><br><br><div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="auth.php" method="POST">
				
			<div class="card">
				<div class="card-header">
					<h3>login</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Usernme</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" class="btn btn-primary" value="login">
					<p class="text-danger">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>

					</p>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>