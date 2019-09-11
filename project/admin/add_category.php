 <?php
include('header.php');
?>
<div class="container">
	<h3>Add New Category</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="save_category.php" method="post">
			<div class="card">
				<div class="card-header">
					Category Details
				</div>
				<div class="card-body">
						<div class="form-group">
							<label>Category Name</label>
							<input type="text" placeholder="Category Name" name="cate_name" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Add" class="btn btn-primary">
					</div>
			</div>
		</div>
		</form>
	</div>
</div>

<?php
include('footer.php');
?>

