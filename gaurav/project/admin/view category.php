<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
include("dashboard.php");

$query = "select * from admincategory";
$result = mysqli_query($con,$query);
// print_r($_POST);
?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<table class="table table-dark table-bordered table-hover">
				<tr>
					<th>S.no</th>
					<th>Category name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				while($data = mysqli_fetch_assoc($result))
				{
				?>
				<tr>
					<td><?php echo $data['id'] ;?></td>
					<td><?php echo $data['cate_name'] ;?></td>
					<td><a href="edit_cate.php?cate=<?php echo $data['id'];?>" class="btn btn-info">Edit</a></td>
					<td><a href="delete_cate.php?cate=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a></td>
				</tr>


				<?php
			}
			?>
			</table>
		</div>
	</div>
</div>