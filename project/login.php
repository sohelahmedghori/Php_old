<?php
include("db.php");
include("header.php");
?>
		<div class="col-md-9 border p-4">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary text-light px-4 py-2">User Login</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header">
							Login
						</div>
						<div class="card-body">
							<form action="auth.php" method="post">
								<div class="form-group">
									<label>Username</label>
									<input type="Text" name="username" placeholder="Username" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" placeholder="Password" class="form-control">
								</div>
								
								

						</div>
						<div class="card-footer">
							<input type="submit" value="Login" class="btn btn-success">
							<Br />
							<Br />
						<p class="text-danger text-center">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
						</p>
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
