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
<div class="container-fluid"> 
<h3>View product</h3>
<div  class="row">
<div class="col-md-12">
	<table  class="table table-dark table-bordered table-hover">
			<th>S. No</th>
			<th> Product Name</th>
			<th>Product Price</th>
			<th>Product Category</th>
			<th>Product Discount</th>
			<th>Edit</th>
			<th>Delete</th>
			</tr> 
			<?php
             while($data=mysqli_fetch_assoc($result))		
             {  
             	?>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['p_name']; ?></td>
				<td><?php echo $data['p_price']; ?></td>
				
				<td><?php echo $data['p_cate']; ?></td>
				<td><?php echo $data['discount']; ?></td>
				<td><a href="edit_product.php?edit=<?php echo $data['id']; ?>" class="btn btn-primary">Edit</a></td>
				<td><a href="delete_product.php?delete=<?php  echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
				
				
			</tr>

			<?php 
		}
?>




			</table></div> </div></div><?php 

include ('footer.php');

?>