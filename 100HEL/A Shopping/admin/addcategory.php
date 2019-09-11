<?php
include("header.php");
?>
<div class="container">
	<h3>Add New Category</h3>
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card">
				<div class="card-header">
					<h4>Category Detail</h4>
				</div>
				<form action="save_category.php" method="post">
					<div class="card-body">
						<div class="form-group">
							<label>Category Name</label>
							<input type="text" placeholder="Category Name" class="form-control" name="cate-name">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Add" name="">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>