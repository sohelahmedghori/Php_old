<?php
include("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$query="SELECT * FROM addproduct";
$result=mysqli_query($con, $query);
?>
<div class="container">
	<h3>View All Product</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-border table-dark table-hover">
				<tr>
					<th>S.No.</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Category</th>
					<th>Product Discount</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				while ($data=mysqli_fetch_assoc($result))
				{?>
					<tr>
						<td><?php echo $data['id'];?></td>
						<td><?php echo $data['productname'];?></td>
						<td><?php echo $data['productprice'];?></td>
						<td><?php echo $data['productcategory'];?></td>
						<td><?php echo $data['productdiscount'];?></td>
						<td><a href="add_more_image.php?e_pro_image=<?php echo $data['id']; ?>" class="btn btn-info">Add More</a></td>
						<td><a href="edit_pro.php?e_pro=<?php echo $data['id']; ?>" class="btn btn-info">Edit</a></td>
						<td><a href="delete_pro.php?d_pro=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>