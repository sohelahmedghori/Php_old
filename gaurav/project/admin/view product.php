<?php

include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
include("dashboard.php");

 $query = "select * from addproduct";
 $result = mysqli_query($con,$query);

?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-dark table-bordered table-hover">
				<tr>
					<th>product id</th>
					<th>product name</th>
					<th>product price</th>
					<th>Add</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				while ($data = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $data['id']?></td>
					<td><?php echo $data['p_name']?></td>
					<td><?php echo $data['p_price']?></td>
					<td><a href="add_more.php?add=<?php echo $data['id']?>" class="btn btn-success">Addmore</a></td>
			    <td><a href="edit_product.php?prod=<?php echo $data['id'];?>" class="btn btn-info">Edit</a></td>
				<td><a href="deleteproduct.php?product=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a></td>
				</tr>

                <?php
                }
             
                ?>
			</table>
		</div>
	</div>
</div>



