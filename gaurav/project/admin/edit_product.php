<?php
include ('dashboard.php');
$con = mysqli_connect("localhost","root","","onlineshop");

$a = $_GET['prod'];
$query1 = "SELECT * FROM addproduct WHERE id = $a";
$result1 = mysqli_query($con,$query1);
$data1 = mysqli_fetch_assoc($result1);

$query = "SELECT * FROM admincategory";

$result = mysqli_query($con,$query); 

?>

<br>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="update_product.php" method="post" 
			enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<h1>Update Product</h1>
					</div>
					<input type="hidden" name="pid" value="<?php echo $a?>">
					<div class="card-body">
						<div class="form-group">
						<label>Product Name</label>
						<input type="text" name="P_name" class="form-control" placeholder="Product Name" value="<?php echo $data1['p_name'];?>">
						</div>
						<div class="form-group">
						<label>Product Category</label>
						<select class="form-control" name="p_cate">
							<option>Select</option>
							<?php
							while($data=mysqli_fetch_assoc($result))
							{
								if($data1['p_category']==$data['cate_name'])
								{
									?>
								<option selected="selected"><?php echo $data['cate_name'];?></option>
								<?php
							}
								else
								{
									?>
							     <option><?php echo $data['cate_name'];?></option>
							     <?php

								}
							
						}
						?>
						</select>
						</div>
						<div class="form-group">
						<label>Product Price</label>
						<input type="text" name="P_price" class="form-control" placeholder="Product price" value="<?php echo $data1['p_price'];?>">							
						</div>
						<div class="form-group">
						<label>Current Image</label>
						<img src="upload/<?php echo $data1['image_name']?>" height="100" width="100">		
						</div>
						<div class="form-group">
							<label>Product Image</label>
							<input type="file" name="image" class="form-control">
						</div>
						<div class="form-group">
						<label>Product discount</label>
						<input type="text" name="P_discount" class="form-control" value="<?php echo $data1['p_discount']?>">
						</div>
						<div class="form-group">
						<label>Product_details</label>
						<textarea class="form-control" name="P_details"><?php echo $data1['p_details'];?></textarea>					
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="update" class="btn btn-success">
					</div>
					
				</div>
			</form>
		</div>
	</div>
	
</div>