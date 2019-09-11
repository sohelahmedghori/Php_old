<div class="container my-4" style="min-height: 600px;">
	<h2>View Users Detail</h2>
	<div class="row">
		<div class="col-md-10 offset-1 my-4">
			<?php
			$data=$result->row_array();
			?>
			<table class="table table-dark table-hover table-bordered">
				<tr>
					<td>Full Name</td>
					<td><?php echo $data['full_name'] ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $data['email'] ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $data['gender'] ?></td>
				</tr>
				<tr>
					<td>Address/td>
					<td><?php echo $data['address'] ?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $data['city'] ?></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><?php echo $data['contact'] ?></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><a href="<?php echo site_url('admin_dashboard/view_user'); ?>" class="btn btn-primary">Go Back</a></td>
				</tr>
			</table>
		</div>
	</div>
</div>