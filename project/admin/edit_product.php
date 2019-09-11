<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include('header.php');

$a = $_GET['demo'];
$query1="SELECT * FROM product WHERE id = $a";
$result1 = mysqli_query($con,$query1);
$data1=mysqli_fetch_assoc($result1);
// print_r($data1);





$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);



?>
<div class="container">
	<h3>Update Product</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="update_product.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="pid" value="<?php echo $a; ?>">
			<div class="card">
				<div class="card-header">
					Product Details
				</div>
				<div class="card-body">
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" placeholder="Product Name" name="p_name" class="form-control" value="<?php echo $data1['product_name']; ?>">
						</div>

						<div class="form-group">
							<label>Product Price</label>
							<input type="text" placeholder="Product Price" name="p_price" class="form-control" value="<?php echo $data1['product_price']; ?>">
						</div>
						<div class="form-group">
							<label>Current Image</label>
							<img src="upload/<?php echo $data1['image_name']; ?>" height="100" width="100">
						</div>
						<div class="form-group">
							<label>Product Image</label>
							<input type="file" name="image" class="form-control">
							<p class="text-danger">
								<?php
								if(isset($_SESSION['msg']))
								{
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}
								?>
							</p>
						</div>


						<div class="form-group">
							<label>Product Detail</label>
							<textarea class="form-control" placeholder="Detail" name="p_detail"><?php echo $data1['product_detail']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Product Category</label>
							<select name="p_cate" class="form-control">
								<option>Select</option>

								<?php
								while($data=mysqli_fetch_assoc($result))
								{ 
									if($data1['product_category']==$data['category_name'])
									{
										?>
										<option selected="selected"><?php echo $data['category_name'];?></option>
										<?php
									}
									else
									{
										?>
										<option><?php echo $data['category_name'];?></option>
										<?php
									}



								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Product Discount</label>
							<input type="text" value="<?php echo $data1['discount']; ?>" placeholder="Product Discount" name="discount" class="form-control">
						</div>
						


				</div>
					<div class="card-footer">
						<input type="submit" value="Update" class="btn btn-primary">
					</div>
					</form>

			</div>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>

