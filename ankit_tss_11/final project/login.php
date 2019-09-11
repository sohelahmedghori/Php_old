<?php
include("common-files/header.php");
include("common-files/slider.php");
?>
<div class="container my-4">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="card">
				<div class="card-header"><h3>Log in</h3></div>
				<div class="card-body">
					<form>
						<div class="from-group">
							<label><b>Username/Email</b></label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="from-group">
							<label><b>Password</b></label>
							<input type="password" class="form-control">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<button class="btn btn-success">Login</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("common-files/footer.php");
?>