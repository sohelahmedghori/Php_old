<?php
include("header.php");
session_start();
?>
<!-- <div class="row"> -->
	<div class="col-md-4 offset-md-1">
		<div class="card">
			<div class="card-header">
				<h3>LOGIN</h3>
			</div>
			<form action="auth.php" method="post">
			<div class="card-body">
				<div class="form-group">
					<label for="full">Full Name</label>
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<input  id="full" type="text" name="full" placeholder="user name" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<input type="password" name="pass" class="form-control" placeholder="password">
					</div>
				</div>
			</div>
			<div class="card-footer">
				<input type="submit" value="login" class="btn btn-success">
			</div>
			<p class="text-danger text-center">
				<?php
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
			</p>
		</form>
		</div>
	</div>
<!-- </div> -->
</body>
</html>