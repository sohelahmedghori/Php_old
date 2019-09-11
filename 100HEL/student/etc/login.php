<?php
include("header.php");
?>
<div class="container">
	<div class="row">
		<h2>Login Page</h2>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3 my-2">
			<form action="auth.php" method="post">
				<div class="card">
					<div class="card-header">
						<h3>Signin</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Submit" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>