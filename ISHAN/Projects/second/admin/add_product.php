<?php
include("../db.php");
	if (! isset($_SESSION['is_user_logged_in']))
	 {
		header("location:index.php");
	}
	$query = "SELECT * FROM category";
	$result = mysqli_query($con,$query);
include("header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<h3>Add Any Product Here....</h3>
			<form action="save_addProduct.php" method="post" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						Detail of Product
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" name="p_name" class="form-control" placeholder="Enter Product Name Here">
						</div>
						<div class="form-group">
							<label>Product Category</label>
							<select class="form-control" name="p_cate">
								<option>Select</option>
								<?php
								while ($data = mysqli_fetch_assoc($result))
								{ ?>
									<option><?php echo $data['category']; ?></option>
								<?php }
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Product Price</label>
							<input type="text" name="p_price" class="form-control" placeholder="Enter Product Price Here">
						</div>
						<div class="form-group">
							<label>Product Image</label>
							<input type="file" name="image" class="form-control">
							<p class="text-center text-danger">
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
							<textarea class="form-control" placeholder="Enter Details of Product" name="detail"></textarea>
						</div>
						<div class="form-group">
							<label>Product Discount</label>
							<input type="text" name="discount" class="form-control" placeholder="Enter Product Discount Here">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Add Product" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>