<?php
include("../db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
include("header.php");
?>
<div class="container">
	<h4>Add new category</h4>
	<div class="row">
		<div class="col-md-9">
		<form action="save_category.php" method="post">
			<div class="card">
				<div class="card-header">
					Category details
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Category name</label>
						<input type="text" name="cate_name" class="form-control" placeholder="category names...">
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