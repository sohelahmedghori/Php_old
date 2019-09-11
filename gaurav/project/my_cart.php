<?php
$con = mysqli_connect("localhost","root","","onlineshop");
include("header.php");
if(isset($_GET['admincategory']))
{
	$a = $_GET['admincategory'];
	$query = "SELECT * FROM addproduct WHERE p_category='$a'";
	$result = mysqli_query($con,$query);
}
else
{
	$query = "SELECT * FROM addproduct";
	$result = mysqli_query($con,$query);
}

?>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
		<h2>Your cart</h2>
		<a href="clear_cart.php">Clear cart</a>
	</div>
	</div>	
    <div class="row">
		<?php
		$x = $_COOKIE['cart'];
		$arr = explode("#",$x);
		$total = 0;
		foreach($arr as $y)
		{

			$query = "SELECT * FROM addproduct where id = $y";
			$result = mysqli_query($con,$query);
			$data = mysqli_fetch_assoc($result);
			$total += $data['p_price'];

		?>
    	<div class="col-md-10 offset-md-1 my-3">
			<div class="card">
				<div class="card-header">
					<h2><?php echo $data['p_name'];?></h2>
				</div>
				<div class="card-body">
					<img src="admin/upload/<?php echo $data['image_name'];?>" height="100" width="100" /> 
				</div>
				<div class="card-footer">
					<?php echo $data['p_price'];?>
				</div>
		</div>
	    </div>
		<?php
	}
	?>
	</div>
	<div class="bg-info p-4">
					<b>Total : <?php echo $total; ?></b>
    </div>
	
</div>