<?php
include("../db.php");
	if (! isset($_SESSION['is_user_logged_in']))
	 {
		header("location:index.php");
	}

	// print_r($_GET);
	// die;
	
	$a = $_GET['pro'];
	$query1 = "SELECT * FROM product WHERE id =$a";
	$result1 = mysqli_query($con,$query1);
	$data1  = mysqli_fetch_assoc($result1);
	// print_r($data1);

	$query =" SELECT * FROM category";
	$result = mysqli_query($con, $query);
include("header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<h3>Update Product Here....</h3>
			<form action="update_pro.php" method="post" enctype="multipart/form-data">

				<input type="hidden" name="pid" value="<?php echo $a; ?>">

				<div class="card">
					<div class="card-header">
						Detail of Product
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" name="p_name" value="<?php echo $data1['pname'] ?>" class="form-control" placeholder="Enter Product Name Here">
						</div>
						<div class="form-group">
							<label>Product Category</label>
							<select class="form-control" name="p_cate">
								<option>Select</option>
								<?php
								while ($data = mysqli_fetch_assoc($result))
							{ 
					if($data1['pcate'] == $data['category'])
							{ ?>

				<option selected="selected"><?php echo $data['category']; ?></option>
								<?php	}
					else
					{ ?>

						<option><?php echo $data['category']; ?></option>

				<?php	}

			}
							?>
							</select>
						</div>
						<div class="form-group">
							<label>Product Price</label>
							<input type="text" name="p_price" value="<?php echo $data1['pprice'] ?>" class="form-control" placeholder="Enter Product Price Here">
						</div>
						<div class="form-group">
							<label>Current Image</label>
							<img src="upload/<?php echo $data1['image_name']; ?>" height="100" width="150">
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
							<textarea class="form-control" placeholder="Enter Details of Product" name="detail"><?php echo $data1['pdetail'] ?></textarea>
						</div>
						<div class="form-group">
							<label>Product Discount</label>
							<input type="text" name="discount" value="<?php echo $data1['pdiscount'] ?>" class="form-control" placeholder="Enter Product Discount Here">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Update Product" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
