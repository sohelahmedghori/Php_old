<?php
include("db.php");
include("header.php");
?>
<div class="col-md-9 mb-1">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary py-4 pl-2 text-light">Login Page</h4>
				</div>
			</div>
<div class="row">
	<div class="col-sm-8 offset-2">
		<form action="authenti.php" method="post">
			<div class="card">
			<div class="card-body">
				<label>User Id</label>
				<input type="text" name="username" class="form-control" placeholder="Enter your name">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter your Password">
			</div>
			<div class="card-footer">
				<input type="submit" class="btn btn-success" value="Signin">
					<br><br>
					<p class="text-danger text-center">
						<?php
							if (isset($_SESSION['msg'])) {
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
<?php
		include("footer.php");
?>