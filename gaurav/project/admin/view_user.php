<?php
include("db.php");
include('dashboard.php');
$query = "SELECT * from user";
$result = mysqli_query($con,$query);
?>
<div class="container">
	<h1>View Users</h1>
	<div class="row">
		<div class="col-md-12">
			<table class="table-dark table-bordered table-hover">
			<tr>
				<th>S.no</th>
				<th>Full name</th>
				<th>User Namee</th>
				<th>Status</th>
				<th>Change</th>
			</tr>
			<?php 
			while($data=mysqli_fetch_assoc($result))
			{
			?>
			<tr>
				<td><?php echo $data['id'];?></td>
				<td><?php echo $data['full_name'];?></td>
				<td><?php echo $data['user_name'];?></td>
				<td>Active</td>
			    <td><a href="#" class="btn btn-info">Change</a></td>
			</tr>
			<?php
		     }
		    ?>
		</table>
		</div>
	</div>
	
</div>

