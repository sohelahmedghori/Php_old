<div class="container-fluid" style="min-height: 500px;">
	<h2>View Profile</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				



				<h3><b>User Profile</b></h3>
				<table class="table table-hover table-dark table-border">
				




					<?php $data = $result->row_array(); ?>
					<tr>


						<?php
						if($data['image_name']=="")
						{
							$path = base_url("image/avatar.png");
						}
						else
						{
							$path = base_url("iamge/".$data['image']);
						}

						 ?>
						<td>full name</td>
						<td><?php echo $data['full_name']; ?></td>
					</tr>
				


					<tr>
						<td>profile pic</td>
						<td><img src="<?php echo $path; ?>" width="100" height="100">
							<br>
							<form action="<?php echo site_url('second/pic_upload'); ?>" method="post" enctype="multipart/form-data">
								<input type="file" name="userfile" onchange="this.form.submit()">
								

							</form></td>
					</tr>
					<tr>
						<td>username</td>
						<td><?php echo $data['username']; ?></td>
					</tr>
					<tr>
						<td>address</td>
						<td><?php echo $data['address']; ?></td>
					</tr>
					<tr>
						<td>city</td>
						<td><?php echo $data['city']; ?></td>
					</tr>
					<tr>
						<td>gender</td>
						<td><?php echo $data['gender']; ?></td>
					</tr>
					<tr>
						<td>contact</td>
						<td><?php echo $data['contact']; ?></td>
					</tr>
					
				</table>
				<a href="<?php echo site_url('second/edit'); ?>" class="btn btn-primary">edit</a>
				<a href="" class="btn btn-primary">change password</a>
			</div>
		</div>
	</div>
</div>