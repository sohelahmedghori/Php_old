<div class="container mt-4" style="min-height: 500px;">
	<h2>Change Password</h2>
	<div class="row my-4">
		<div class="col-md-6 offset-4">
			<form action="<?php echo site_url("user/update_pass"); ?>" method="post">
				<table class="table table-dark table-hover table-bordered">
					<tr>
						<td>Current Password</td>
						<td><input type="password" name="current_pass" class="form-control"></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input type="password" name="new_pass" class="form-control"></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="confirm_pass" class="form-control"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" class="btn btn-success" value="Update Password"></td>
					</tr>
				</table>
				<p class="text-danger">
					<?php echo $this->session->flashdata("msg"); ?>
				</p>
			</form>
		</div>
	</div>
</div>