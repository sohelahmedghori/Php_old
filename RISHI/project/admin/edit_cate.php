<?php
include("../db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$a=$_GET['e_cate'];
$query="SELECT * FROM category WHERE id='$a'";
$result=mysqli_query($con ,$query);
$data = mysqli_fetch_assoc($result);
// print_r($data);
?>
<div class="container">
	<h4>Edit category</h4>
	<div class="row">
		<div class="col-md-9">
		<form action="update_cate.php" method="post">

			<input type="hidden" value="<?php echo $a; ?>" name="cid">

			<div class="card">
				<div class="card-header">
					Category details
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Category name</label>
						<input type="text" name="cate_name" class="form-control" value="<?php echo $data['category']; ?>" placeholder="category names...">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="ADD" class="btn btn-secondary">
				</div>
			</div>
		</form>
		</div>
	</div>
</div>