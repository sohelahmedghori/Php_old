<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include('header.php');

$query = "SELECT * FROM product";
$result = mysqli_query($con, $query);


?>
<div class="container">
	<h3>View All Product</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-dark table-bordered  table-hover">
				<tr>
					<th>S.No.</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Category</th>
					<th>Product Discount</th>
					<th>add</th>
					<th>Edit</th>
					<th>Delet</th>
				</tr>
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['product_name']; ?></td>
						<td><?php echo $data['product_price']; ?></td>
						<td><?php echo $data['product_category']; ?></td>
						<td><?php echo $data['discount']; ?></td>
						<td>addmore</td>
						<td><a href="edit_product.php?demo=<?php echo $data['id'];?>" class="btn btn-info">Edit</a></td>
						<td><a href="delete_pro.php?demo=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
					</tr>
					</tr>




				<?php
				}
				?>


			</table>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>

