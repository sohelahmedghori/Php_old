<?php
include("db.php");
include("dashboard.php");
$a = $_GET['add'];
$query = "SELECT * FROM addproduct where id =$a";
$result = mysqli_query($con,$query);

?>
<div class="col-md-9">
	<div class="row my-2">
		<div class="col-md-8 offset-md-2">
			<form action="add_more_save.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="i_id" value="<?php echo $a;?>">
			<div class="card">
				<div class="card-header">
					<h3>Add More Images</h3>
				</div>
				<div class="card-body">
				    <div class="form-group">
				    	<label>Image1</label>
				    	<input type="file" name="image1" class="form-control">
				    </div>
				    <div class="form-group">
				    	<label>Image2</label>
				    	<input type="file" name="image2" class="form-control">
				    </div>
				    <div class="form-group">
				    	<label>Image3</label>
				    	<input type="file" name="image3" class="form-control">
				    </div>
				    <div class="form-group">
				    	<label>Image4</label>
				    	<input type="file" name="image4" class="form-control">
				    </div>	
				</div>
				<div class="card-footer">
					<input type="submit" value="add" class="btn btn-success">
				</div>

			</div>
		</form>
		</div>
		
	</div>


	
</div>

