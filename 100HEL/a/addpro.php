<?php
include("db.php");
include("header.php");
?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<form>
				<div class="card">
					<div class="card-header">
						<span>Product Detail</span>
					</div>
					<div class="card-body">
						<div class="form-group">
							<span>Product name</span>
							<input type="text" name="pro_name" class="form-control">
						</div>
						<div class="form-group">
							<span>Product price</span>
							<input type="text" name="pro_price" class="form-control">
						</div>
						<div class="form-group">
							<span>Product detail</span>
							<textarea name="pro_detail" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<span>Sale Date</span>
							<input type="Date" name="sale_date" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Submit" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>