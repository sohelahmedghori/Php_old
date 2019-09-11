<?php
include ("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$id=$_GET['e_pro'];//we take variable name id b/c we call id in addproduct table from databace//
$query1="SELECT * FROM addproduct WHERE id=$id"; //e_pro name comes from view_pro page in edit variable
$result1=mysqli_query($con,$query1);
$data1=mysqli_fetch_assoc($result1);
// print_r($data1);
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
					<form action="update_pro.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="pid" value="<?php echo $id; ?>">
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" class="form-control" value="<?php echo $data1['productname']; ?>" name="pro_name">
						</div>
						<div class="form-group">
							<label>Product Price</label>
							<input type="text" class="form-control" value="<?php echo $data1['productprice']; ?>" name="pro_price">
						</div>
						<div class="form-group">
							<label>Current Image</label>
							<img src="upload/<?php echo $data1['imagename']; ?>" height="80" width="80">
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
							<textarea class="form-control" name="pro_detail"><?php echo $data1['productdetail']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Product Category</label>
							<select class="form-control" name="pro_cate"  value="<?php echo $data1['productcategory']; ?>">
								<option>Select</option>
								<?php
								while ($data=mysqli_fetch_assoc($result))
								{
									if($data1['productcategory']==$data['categoryname'])
									{?>
										<option selected="selected"><?php echo $data['categoryname'];?></option>
								<?php
									}
									else
									{?>
										<option><?php echo $data['categoryname'];?></option>
									<?php
									}
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Product Discount</label>
							<input type="text" class="form-control" value="<?php echo $data1['productdiscount']; ?>" name="pro_discount">
						</div>
				</div>
				<div class="card-footer">
					<input type="submit" class="btn btn-info" value="Update">
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>