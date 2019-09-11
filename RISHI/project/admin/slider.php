<?php
include("../db.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}	
include('header.php');
?>
<div class="container">
	<h3>Slideeer</h3>
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="card">
				<div class="card-header">
					<h4>Images For Slider</h4>
				</div>
				<div class="card-body">
					<form action="save_slider.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Select Image</label>
							<input type="file" name="image" class="form-control" />
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label>Sub Title</label>
							<textarea class="form-control" name='sub_title'></textarea>
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Add" class="btn btn-primary">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>