<?php
include ('dashboard.php');
$con = mysqli_connect("localhost","root","","onlineshop");

$query = "select * from admincategory";

$result = mysqli_query($con,$query); 

?>

<br>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="addprodsave.php" method="post" 
			enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<h1>Add Product</h1>
					</div>
					<div class="card-body">
						<div class="form-body">
						<label>Product Name</label>
						<input type="text" name="P_name" class="form-control" placeholder="Product Name">
						</div>
						<div class="form-body">
						<label>Product Category</label>
						<select class="form-control" name="p_cate">
							<option>Select</option>
							<?php
							while($data = mysqli_fetch_assoc($result))
							{
							?>
							<option><?php echo $data['cate_name']?></option>
							<?php
						}
						?>
						</select>
						</div>
						<div class="form-body">
						<label>Product Price</label>
						<input type="text" name="P_price" class="form-control" placeholder="Product price">							
						</div>
						<div class="form-body">
							<label>Product Image</label>
							<input type="file" name="image" class="form-control">
						</div>
						<div class="form-body">
						<label>Product discount</label>
						<input type="text" name="P_discount" class="form-control">
						</div>
						<div class="form-body">
						<label>Product_details</label>
						<input type="text" name="P_details" class="form-control" placeholder="Product details">							
						</div>
					</div>
					<div class="card-footer">
						<button class="btn btn-success">Add Product</button>
					</div>
					
				</div>
			</form>
		</div>
	</div>
	
</div>