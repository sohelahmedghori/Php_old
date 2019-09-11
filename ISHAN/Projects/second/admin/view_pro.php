<?php
	include("../db.php");
	if (! isset($_SESSION['is_user_logged_in'])) {
		header("location:index.php");
	}
	include("header.php");
	$query = "SELECT * FROM product";
	$result = mysqli_query($con,$query);
?>

<div class="row">
	<div class="col-md-12">
		<h3 class="text-center">View All Product</h3>
		<table class="table table-dark table-bordered table-hover mt-4 pt-4">
			<tr>
				<th>S.No.</th>
				<th>Product Name</th>
				<th>Product Category</th>
				<th>Product Price</th>
				<th>Product Discount</th>
				<th>Add Images</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
			while($data = mysqli_fetch_assoc($result))
			{?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['pname']; ?></td>
				<td><?php echo $data['pcate']; ?></td>
				<td><?php echo $data['pprice']; ?></td>
				<td><?php echo $data['pdiscount']; ?></td>

				<td><a class="btn btn-light" 
					href="add_more_image.php?pro=<?php echo $data['id'] ?>">Add More</a></td>

				<td><a class="btn btn-warning" 
					href="edit_pro.php?pro=<?php echo $data['id'] ?>">Edit</a></td>
				<td><a  class="btn btn-danger"
				 	href="delete_pro.php?pro=<?php echo $data['id'] ?>">Delete</a></td>
			</tr>
		<?php	}
			?>
		</table>
	</div>
</div>