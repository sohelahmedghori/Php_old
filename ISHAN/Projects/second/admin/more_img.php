<?php
include("../db.php");

// print_r($_GET);
// die;


$a = $_GET['p_id'];

$query1 =" SELECT * FROM more_image WHERE product_id='$a'";
$result1 = mysqli_query($con, $query1);
// $data = mysqli_fetch_assoc($result);

$query =" SELECT * FROM product WHERE id='$a'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);

include("header.php");
?>
<style type="text/css">
	.s_img
	{
		border: 1px solid #000;
		padding: 5px;
		border-radius: 5px;
	}
</style>
<script type="text/javascript">
	function demo(a)
	{
		var b ="upload/"+a;
		document.getElementById("main_image").setAttribute("src",b);
	}
</script>
<div class="row">
	<div class="col-md-12">
		<h3 class="text-center">View More Images</h3>
		<h2 class="text-center bg-primary"><span class="font-weight-bold"><?php echo $data['pname']; ?></span></h2>

	<div style="margin:10px auto; width:600px; height:550px; border:1px solid #ccc; text-align: center;">

	<img id="main_image" src="upload/<?php echo $data['image_name']; ?>" height="400" width="400"><hr>
	<?php
	while ($data1=mysqli_fetch_assoc($result1)) 
	{?>
		<img src="upload/<?php echo $data1['image_name'];  ?>" class="small_img" onmouseover="demo('<?php echo $data1['image_name'];?>')" height="100" width="100">
	<?php
	}?>
	<hr/>
	<!-- <img src="upload/<?php echo $data['image_name']; ?>" height="100" width="100" onmouseover="demo('product_id')" class="s_img">
	<img src="upload/<?php echo $data['image_name']; ?>" height="100" width="100" onmouseover="demo('product_id')" class="s_img">
	<img src="upload/<?php echo $data['image_name']; ?>" height="100" width="100" onmouseover="demo('product_id')" class="s_img">
	<img src="upload/<?php echo $data['image_name']; ?>" height="100" width="100" onmouseover="demo('product_id')" class="s_img"> -->

</div>
<center>
	<a href="#" class="btn btn-success">Buy Now</a>
</center>
	</div>
</div>

