<?php
include("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$id=$_GET['e_cate']; //e_cate name comes from view_cate page in edit variable 
$query="SELECT *FROM category WHERE id='$id'";//we take variable name id b/c we call id in category table from databace//
$result=mysqli_query($con, $query);
$data=mysqli_fetch_assoc($result);
// print_r($data);
?>
<div class="container">
	<h3>Update Category</h3>
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card">
				<div class="card-header">
					<h4>Category Detail</h4>
				</div>
				<form action="update_cate.php" method="post">
					<div class="card-body">
						<div class="form-group">
							<label>Category Name</label>
							<input type="hidden" value="<?php echo $id; ?>" name="cid">
							<input type="text" value="<?php echo $data['categoryname']; ?>" class="form-control" name="cate-name">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>