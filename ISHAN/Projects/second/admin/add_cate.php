<?php
include("../db.php");
	if (! isset($_SESSION['is_user_logged_in'])) {
		header("location:index.php");
	}
include("header.php");
?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<h3 class="text-center">Add Products Category Here</h3>
			<form action="save_cate.php" method="post">
				<div class="card">
					<div class="card-header">Category Details</div>
					<div class="card-body">
						<div class="form-group">
							<label>Category Name</label>
							<input type="text" name="category" class="form-control" placeholder="Enter Category Name">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="ADD" class="btn btn-info">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>