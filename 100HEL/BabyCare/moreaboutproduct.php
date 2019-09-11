<?php
include("db.php");
include("header.php");
$id=$_GET['pid'];
$query1="SELECT * FROM images WHERE product_id=$id";
$result1=mysqli_query($con,$query1);
// $data1=mysqli_fetch_assoc($result1);

$query="SELECT * FROM addproduct WHERE id=$id";
$result=mysqli_query($con, $query);
$data=mysqli_fetch_assoc($result);

// print_r($data);
// print_r($data1);
?>
<script type="text/javascript">
	function demo(a)
	{
		var b ="admin/upload/"+a;
		document.getElementById("main_img").setAttribute("src", b);
	}
</script>
		<div class="col-md-9">
			<div class="bg-secondary my-2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3 class="bg-secondary text-light my-2 p-1"><span class="font-weight-bold"><?php echo $data['productname']; ?></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="container my-4">
				<div class="row">
					<div class="col-md-10 offset-1">
						<div class="card my-4">
							<div class="card-body">
								<div style="margin: 20px auto; width: 600px; height: 550px; border:1px solid #CCC; text-align: center;">
								<img id="main_img" src="admin/upload/<?php echo $data['imagename'];?>" height="400" width="400">
								<Hr />
								<img src="admin/upload/<?php echo $data['imagename'];?>" onmouseover="demo('<?php echo $data['imagename']; ?>')" class="small_img" height="100" width="100">
								<?php
								while($data1=mysqli_fetch_assoc($result1))
								{ ?>
									<img src="admin/upload/<?php echo $data1['image_name'];  ?>" class="small_img" onmouseover="demo('<?php echo $data1['image_name']; ?>')" height="100" width="100">

								<?php
								}
								?>
								</div>
							</div>
							<div class="card-footer">
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php")
?>