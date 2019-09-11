<?php 
    include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
    include('header.php');
    $query = "SELECT * FROM category";
$result = mysqli_query($con, $query);
 ?>

<div class="container">
	<h3>add new product</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Product details
				</div>
				<div class="card-body">
					<form action="savepro.php" method="POST" enctype="multipart/form-data"> 
						<div class="form-group">
							<LABEL>Product name</LABEL>
							<input type="text" name="p_name" placeholder="product name" class="form-control">
						</div>
						<div class="form-group">
							<LABEL>Product price</LABEL>
							<input type="text" name="p_price" placeholder="product price" class="form-control">
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
							<LABEL>Product details</LABEL>
							<input type="text" name="p_detail" placeholder="product details" class="form-control">
						</div>
						<div class="form-group">
							<label>Product Category</label>
							<select name="p_cate" class="form-control">
								<option>Select</option>
								<?php
								while($data=mysqli_fetch_assoc($result))
								{ ?>
									<option><?php echo $data['cat_name'];?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<LABEL>product discount</LABEL>
							<input type="text" name="discount" class="form-control" placeholder="product discount">
						</div>
						<div class="card-footer">
							<input type="submit" value="add" class="btn btn-primary">
						</div>
					</form>
				</div> 
			</div>
		</div>
		
	</div>
</div>
<?php 
     include('footer.php');
 ?>