<?php 
     include("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
     {
     	header("location:index.php");
     }
    include("header.php");

    $query="SELECT * FROM product";
    $result=mysqli_query($con,$query);
 ?>
 <div class="container">
      <h3>view all products</h3>
      <div class="row">
      	<div class="col-md-12">
      		<table class="table-bordered table-dark table-hover table">
      			<tr>
      				<th>
      					<th>S.No.</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Category</th>
					<th>Product Discount</th>
					<th>Edit</th>
					<th>Delet</th>
      				</th>
      			</tr>
      			<?php 
                    while ($data=mysqli_fetch_assoc($result)) 
                    {
                 ?>
                   <tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['product_name']; ?></td>
						<td><?php echo $data['product_price']; ?></td>
						<td><?php echo $data['product_category']; ?></td>
						<td><?php echo $data['discount']; ?></td>
						<td><a href="#" class="btn btn-info">Edit</a></td>
						<td><a href="delpro.php?demo=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
					</tr>
					</tr>
                  

                    	 
                  <?php  }
      			 ?>

      		</table>
      	</div>
      </div>
  </div>
<?php
include('footer.php');
?>

