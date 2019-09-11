<?php
include("../db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
// print_r($_GET);
// die;


include("header.php");

 $id = $_GET['pro'];

 $query =" SELECT * FROM product WHERE id='$id'";
 $result = mysqli_query($con, $query);
 $data = mysqli_fetch_assoc($result);
?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<form action="save_more_image.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="imgid" value="<?php echo $id; ?>" >
				<div class="card">
					<div class="card-header">
						<h1 class="text-center">Add More Product Images</h1>
					</div>

					<div class="card-body">
						<div class="form-group">
							<label>Image 1</label>
							<input type="file" name="image1" class="form-control">
							<br>
							<p class="text-center text-danger">
								<?php
								   if(isset($_SESSION['msg']))
								   {
								   	echo $_SESSION['msg'];
								   	unset($_SESSION['msg']);
								   }
								?>
							</p>
						</div>
						<div class="form-group">
							<label>Image 2</label>
							<input type="file" name="image2" class="form-control">
							<br>
							<p class="text-center text-danger">
								<?php
								   if(isset($_SESSION['msg']))
								   {
								   	echo $_SESSION['msg'];
								   	unset($_SESSION['msg']);
								   }
								?>
							</p>
						</div>
						<div class="form-group">
							<label>Image 3</label>
							<input type="file" name="image3" class="form-control">
							<br>
							<p class="text-center text-danger">
								<?php
								   if(isset($_SESSION['msg']))
								   {
								   	echo $_SESSION['msg'];
								   	unset($_SESSION['msg']);
								   }
								?>
							</p>
						</div>
						<div class="form-group">
							<label>Image 4</label>
							<input type="file" name="image4" class="form-control">
							<br>
							<p class="text-center text-danger">
								<?php
								   if(isset($_SESSION['msg']))
								   {
								   	echo $_SESSION['msg'];
								   	unset($_SESSION['msg']);
								   }
								?>
							</p>
						</div>
					</div>

					<div class="card-footer">
						<input type="submit" value="Upload" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>