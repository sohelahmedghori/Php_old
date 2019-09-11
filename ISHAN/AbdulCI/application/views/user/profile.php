<div class="container-fluid">
	<h2>This is Profile Page</h2>
	<div class="row">
		<div class="col-md-6 offset-3">
			<?php 
				 $data = $result->row_array();
			?>
			<form>
				<div class="card">
					<div class="card-header">
						<h2>This is Profile Page</h2>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover table-secondary">
							<tr>
								<td>Name</td>
								<td><?php echo $data['full_name']; ?></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><?php echo $data['username']; ?></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><?php echo $data['address']; ?></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td><?php echo $data['gender']; ?></td>
							</tr>
							<tr>
								<td>City</td>
								<td><?php echo $data['city']; ?></td>
							</tr>
							<tr>
								<td>Contact</td>
								<td><?php echo $data['contact']; ?></td>
							</tr>
						</table>
					</div>
					<div class="card-footer">
						<a href="<?php echo site_url("") ?>" class="btn btn-info">Edit Profile</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>