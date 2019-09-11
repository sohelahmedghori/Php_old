<?php
	include("../db.php");
	if (! isset($_SESSION['is_user_logged_in'])) {
		header("location:index.php");
	}
	include("header.php");
	$query = "SELECT * FROM category";
	$result = mysqli_query($con,$query);
?>
<div class="row">
	<div class="col-md-8 offset-2">
		<h3 class="text-center">View All Category</h3>
		<table class="table table-dark table-bordered table-hover mt-4 pt-4">
			<tr>
				<th>S.No.</th>
				<th>Category Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
			while($data = mysqli_fetch_assoc($result))
			{?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['category']; ?></td>
				<td><a class="btn btn-warning" href="edit_cate.php?cate=<?php echo $data['id'] ?>">Edit</a></td>
				<td><a  class="btn btn-danger" href="delete_cate.php?cate=<?php echo $data['id'] ?>">Delete</a></td>
			</tr>
		<?php	}
			?>
		</table>
	</div>
</div>