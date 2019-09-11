	<?php  
include ("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
{

	header("location:index.php");
}


include ("header.php");


$id = $_GET['edot'];
$query = "SELECT  *  FROM  category WHERE id = $id ";
$result = mysqli_query($con,$query);
$data =    mysqli_fetch_assoc($result);
// print_r($_GET);


?>
<div class="container">
	<h3>Update Category</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="update_category.php" method="post">

				<input type="hidden" value="<?php echo $id; ?>" name="cid">


			<div class="card">
				<div class="card-header">
					Category Details
				</div>
				<div class="card-body">
						<div class="form-group">
							<label>Category Name</label>
							<input type="text" placeholder="Category Name" name="cate_name" class="form-control" value="<?php echo $data['cate_name'];?>">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Update" class="btn btn-primary">
					</div>
			</div>
		</div>
		</form>
	</div>
</div>

<?php
include('footer.php');