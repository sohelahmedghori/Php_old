<?php

// print_r($_COOKIE);


include("db.php");
include("header.php");
if(isset($_GET['q']))
{
	// q=sa
	$q = $_GET['q'];
	if(isset($_GET['category']))
	{
		$a = $_GET['category'];
		$query = "SELECT * FROM product WHERE product_category='$a' AND product_name LIKE '%$q%'";
		$result = mysqli_query($con, $query);
	}
	else
	{
		$query = "SELECT * FROM product WHERE product_name LIKE '%$q%'";
		$result = mysqli_query($con, $query);

	}
}
else
{

	if(isset($_GET['category']))
	{
		$a = $_GET['category'];
		$query = "SELECT * FROM product WHERE product_category='$a'";
		$result = mysqli_query($con, $query);
	}
	else
	{
		$query = "SELECT * FROM product";
		$result = mysqli_query($con, $query);

	}
}

?>
<script type="text/javascript">
	function demo()
	{
		$.ajax({
			url : "get_product.php",
			type :"get",
			success : function(res){
				// alert(res);
				$("#show_product").html(res);
				setTimeout("demo()", 2000);
			}
		});
	}
	function test()
	{
		setTimeout("demo()", 5000);
	}
	test();
</script>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary text-light px-4 py-2">Lastest Product</h4>
				</div>
			</div>
			<div class="row" id="show_product">
				<?php
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
				

			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
