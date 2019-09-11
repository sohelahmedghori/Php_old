<?php
include ("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$query="SELECT * FROM category";
$result=mysqli_query($con,$query);
?>
<div class="container">
	<h3>Add Product</h3>
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card">
				<div class="card-header">
					Product Detail
				</div>
				<div class="card-body">
					<form action="save_addproduct.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" class="form-control" placeholder="Product Name" name="pro_name">
						</div>
						<div class="form-group">
							<label>Product Price</label>
							<input type="text" class="form-control" placeholder="Product Price" name="pro_price">
						</div>
						<div class="form-group">
							<label>Product Image</label>
							<input type="file" class="form-control" name="pro_image">
							<p class="text-danger">
								<?php
								if (isset($_SESSION['msg'])) 
								{
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}
								?>
							</p>
						</div>
						<div class="form-group">
							<label>Product Detail</label>
							<textarea class="form-control" placeholder="Product Detail" name="pro_detail"></textarea>
						</div>
						<div class="form-group">
							<label>Product Category</label>
							<select class="form-control" name="pro_cate">
								<option>Select</option>
								<?php
								while ($data=mysqli_fetch_assoc($result))
								{?>
									<option><?php echo $data['categoryname'];?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Product Discount</label>
							<input type="text" class="form-control" placeholder="Product Discount" name="pro_discount">
						</div>
				</div>
				<div class="card-footer">
					<input type="submit" class="btn btn-info" value="Add">
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>