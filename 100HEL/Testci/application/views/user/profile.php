<div class="container" style="min-height: 500px;">
	<h3>User Profile</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-6 my-4 offset-3">
				<?php
				$data=$result->row_array();
				if ($data['image_name']=="")
				{
					$path=base_url('image/avatar.jpg');
				}
				else
				{
					$path=base_url('image/'.$data['image_name']);
				}
				?>
				<table class="table table-dark table-bordered table-hover">
					<tr>
						<td>Full Name</td>
						<td><?php echo $data['fullname']; ?></td>
					</tr>
					<tr>
						<td>Profile Image</td>
						<td><img src="<?php echo $path; ?>" height="100" width="100">
						<form action="<?php echo site_url('user/profile_pic'); ?>" method="post" enctype="multipart/form-data">
							<input type="file" name="userfile" onchange ="this.form.submit()" >
						</form>
						<p class="text-danger">
							<?php echo $this->session->flashdata("msg"); ?>
						</p>
						</td>
					</tr>
					<tr>
						<td>Username</td>
						<td><?php echo $data['username']; ?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $data['gender']; ?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo $data['address']; ?></td>
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
				<a href="<?php echo site_url('user/edit') ?>" class="btn btn-info">Edit</a>
			</div>
		</div>
	</div>
</div>
</div>