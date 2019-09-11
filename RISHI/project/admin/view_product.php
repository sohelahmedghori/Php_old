<?php

include("../db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}

$query="SELECT * FROM addproduct";
$result=mysqli_query($con,$query);

include("header.php");

?>

<div class="container">
	<h4>View all product</h4>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-info table-hover">
			<tr>
				<th>S.no.</th>
				<th>Product name</th>
				<th>Product category</th>
				<th>Product price</th>
				<th>Product discount</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
			while($data=mysqli_fetch_assoc($result))
			{?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['productname']; ?></td>
				<td><?php echo $data['productcate']; ?></td>
				<td><?php echo $data['productprice']; ?></td>
				<td><?php echo $data['productdiscount']; ?></td>
				<td><a href="edit_product.php?e_pro=<?php echo $data['id']; ?>" class="btn btn-info">Edit</a></td>
				<td><a href="delete_pro.php?p_dlt=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
			</tr>		
		<?php	
		}?>
			</table>
		</div>
		
	</div>
</div>

<?php
include("footer.php");
?>
