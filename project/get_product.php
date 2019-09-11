<?php
include("db.php");
$query = "SELECT * FROM product";
$result = mysqli_query($con, $query);

while($data=mysqli_fetch_assoc($result))
{ 
	$a = $data['product_price'];
	$b = $data['discount'];

	$x = $a * $b/100;
	$y = $a-$x;


	?>
<div class="col-md-4">
	<div class="card mb-2">
		<div class="card-header">
			<span class="font-weight-bold"><?php echo $data['product_name'];?></span>
		</div>
		<img src="admin/upload/<?php echo $data['image_name']; ?>" style="height:150px !important; width: 100%;" />
		<div class="card-body">
			
		</div>
		<div class="card-footer">
			<a href="add_to_cart.php?pid=<?php echo $data['id']; ?>" class="btn btn-dark btn-sm">Add To Cart</a>
			<br />
			<del>(<?php echo $data['product_price'];?>)</del>
			<b><?php echo $y; ?>.00</b>
		</div>
	</div>
</div>
<?php
}
?>