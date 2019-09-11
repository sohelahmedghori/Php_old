<?php
$con = mysqli_connect("localhost","root","","onlineshop");
session_start();

include("header.php");

$query = "select * from user where id = ".$_SESSION['id'];
$result = mysqli_query($con,$query);

$data = mysqli_fetch_assoc($result);

?>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<h1>My Profile</h1>
		</div>
		<div class="row">
		<div class="col-md-8 offset-md-2">
           <table class="table table-dark table-bordered table-hover">
           	<tr>
           		<td>Full_name</td>
           		<td><?php echo $data['full_name'];?></td>
           	</tr>
           	<tr>
           		<td>Username</td>
           		<td><?php echo $data['user_name'];?></td>
           	</tr>
           	<tr>
           		<td>Profile Pic</td>
           		<td><img src="userimages/<?php echo $data['userimage'] ?>" height="80" width="80" /></td>
           	</tr>
           	<tr>
           		<td>Address</td>
           		<td><?php echo $data['address']?></td>
           	</tr>
           	<tr>
           		<td>Gender</td>
           		<td><?php echo $data['gender']?></td>
           	</tr>
           	<tr>
           		<td>City</td>
           		<td><?php echo $data['city']?></td>
           	</tr>
           </table>
           <a href="edit_profile.php" class="btn btn-success">Edit</a>
		</div>
	</div>
</div>
</div>


