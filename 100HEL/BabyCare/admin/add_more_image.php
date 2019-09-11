<?php
include ("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$id=$_GET['e_pro_image'];//we take variable name id b/c we call id in addproduct table from databace//
$query1="SELECT * FROM addproduct WHERE id=$id"; //e_pro name comes from view_pro page in edit variable
$result1=mysqli_query($con,$query1);
$data1=mysqli_fetch_assoc($result1);
// print_r($data1);
// die();
// $query="SELECT * FROM category";
// $result=mysqli_query($con,$query);
?>
<div class="container">
	<h3>Add Product</h3>
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card">
				<div class="card-header">
					Add More Images
				</div>
				<div class="card-body">
					<form action="addimage.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="pid" value="<?php echo $id; ?>">
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" disabled="disabled" class="form-control" value="<?php echo $data1['productname']; ?>">
						</div>
						<div class="form-group">
							<label>Current Image</label>
							<img src="upload/<?php echo $data1['imagename']; ?>" height="80" width="80">
						</div>
						<div class="form-group">
							<label>Product Image 1</label>
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
							<label>Product Image 2</label>
							<input type="file" class="form-control" name="pro_image1">
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
							<label>Product Image 3</label>
							<input type="file" class="form-control" name="pro_image2">
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
							<label>Product Image 4</label>
							<input type="file" class="form-control" name="pro_image3">
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
				</div>
				<div class="card-footer">
<<<<<<< HEAD
					<input type="submit" class="btn btn-info" value="Add Image">
=======
					<input type="submit" class="btn btn-info" value="Add Images">
>>>>>>> 54c01d7234a13747cc9429c0ca64a3123427a8cc
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>