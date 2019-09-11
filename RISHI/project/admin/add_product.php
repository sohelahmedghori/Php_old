<?php
include("../db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$query="SELECT * FROM category";
$result=mysqli_query($con ,$query);

?>
<div class="container">
	<!-- <h3>Add product</h3> -->
	<div class="row">
		<div class="col-md-8 offset-md-2 mt-2">
			<form action="save_product.php" method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">
					Product details
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Product name</label>
						<input type="text" name="p_name" placeholder="Product name" class="form-control">
					</div>
					<div class="form-group">
						<label>Product price</label>
						<input type="text" name="p_price" placeholder="price" class="form-control">
					</div>
					<div class="form-group">
						<label>Product image</label>
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
						<label>Product categories</label>
						<select class="form-control" name="p_cate">
							<option>select</option>
						<?php
						while($data=mysqli_fetch_assoc($result))
						{?>
							<option><?php echo $data['category']; ?></option>
						<?php	
						}?>
						</select>
					</div>
					<div class="form-group">
						<label>Product detail</label>
						<textarea class="form-control" name="p_detail" placeholder="details"></textarea>
					</div>
					<div class="form-group">
						<label>Product Discount	</label>
						<input type="text" name="p_discount" placeholder="Discount" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="add" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>