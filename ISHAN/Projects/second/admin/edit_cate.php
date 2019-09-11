<?php
// print_r($_GET);
	include("../db.php");
	if (! isset($_SESSION['is_user_logged_in'])) {
		header("location:index.php");
	}

	include("header.php");

	$id = $_GET['cate'];
	$query = "SELECT * FROM category WHERE id='$id'";
	$result = mysqli_query($con,$query);
	$data = mysqli_fetch_assoc($result);
?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<h3 class="text-center">Update Category Here</h3>

			<form action="update_cate.php" method="post">

				<input type="hidden" value="<?php echo $id ?>" name="cat_id">

				<div class="card">
					<div class="card-header">Category Details</div>
					<div class="card-body">
						<div class="form-group">
							<label>Category Name</label>
							<input type="text" name="cate_name" class="form-control" value="<?php echo $data['category']; ?>">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Update" class="btn btn-info">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>