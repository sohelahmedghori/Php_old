<?php
include("db.php");
include("header.php");
$query = "SELECT * FROM signup where id=".['id'];
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
// print_r($_POST);
?>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<table class="table table-dark table-bordered table-hover">
				<tr>
					<td>fullname</td>
					<td><?php echo $data['fullname']?></td>
				</tr>
				<tr>
					<td>email</td>
					<td><?php echo $data['email']?></td>
				</tr>
				<tr>
					<td>imagename</td>
					<td><img src="upload/<?php echo $data['imagename']?>"></td>
				</tr>
				<tr>
					<td>address</td>
					<td><?php echo $data['address']?></td>
				</tr>
				<tr>
					<td>gender</td>
					<td><?php echo $data['gender']?></td>
				</tr>
				<tr>
					<td>city</td>
					<td><?php echo $data['city']?></td>
				</tr>
				
			</table>
		</div>
	</div>	
</div>
<?php
include("footer.php");
?>