<?php
include("../db.php");
include("header.php");

$a=$_GET['e_pro'];

$query1="SELECT * FROM addproduct WHERE id=$a";
$result1=mysqli_query($con ,$query1);

$data1=mysqli_fetch_assoc($result1);
// print_r($_GET);
// die;

$query="SELECT * FROM category";
$result=mysqli_query($con ,$query);

?>

<div class="container">
	<!-- <h3>Add product</h3> -->
	<div class="row">
		<div class="col-md-8 offset-md-2 mt-2">
			<form action="update_pro.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="pid" value="<?php echo $a; ?>">
			<div class="card">
				<div class="card-header">
					Edit Product
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Product name</label>
						<input type="text" name="p_name" placeholder="Product name" value="<?php echo $data1['productname']; ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Product price</label>
						<input type="text" name="p_price" placeholder="price" value="<?php echo $data1['productprice']; ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Current image</label>
						<img src="upload/<?php echo $data1['image_name'];?>" height="100" width="100">
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
						<textarea class="form-control" value="<?php echo $data1['productdetail']; ?>" name="p_detail" placeholder="details"></textarea>
					</div>
					<div class="form-group">
						<label>Product Discount	</label>
						<input type="text" value="<?php echo $data1['productdiscount']; ?>" name="p_discount" placeholder="Discount" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="update" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
