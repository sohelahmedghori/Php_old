<div class="container my-4" style="min-height: 600px;">
	<h2>View Users</h2>
	<div class="row">
		<div class="col-md-10 offset-1 my-4">
			<table class="table table-dark table-hover table-bordered">
				<tr>
					<th>ID No.</th>
					<th>Full Name</th>
					<th>Username</th>
					<th>Detail</th>
					<th>Current Status</th>
					<th>Change Status</th>
				</tr>
				<?php
				foreach ($result->result_array() as $data)
				{
					if($data['status']==1)
						$x="Active";
					else
						$x="Deactive";
					?>
				<tr>
					<td><?php echo $data['id']; ?></td>
					<td><?php echo $data['full_name']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><a href="<?php echo site_url('admin_dashboard/user_detail/'.$data['id']); ?>" class="btn btn-primary btn-sm">More Detail</a></td>
					<td><?php echo $x; ?></td>
					<td><a href="<?php echo site_url('admin_dashboard/change_status/'.$data['id'].'/'.$data['status']); ?>" class="btn btn-primary btn-sm">Change Status</a></td>
				</tr>
				 <!-- <td><a href="<?php //echo site_url('admindashboard/change_status/'.$data['id'].'/'.$data['status']) ?>" class="btn btn-warning btn-sm"><?php //echo $x; ?></a></td> -->
              	<!-- <td><a href="#" class="btn btn-warning btn-sm">Change</a></td> 
              		this code is for you can show only button it show when useractive show on button deactive and when you click on button user is deactive and button show its name active
              		When you write this code condition of $x is opposite-->
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>