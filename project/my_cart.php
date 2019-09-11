<?php

// print_r($_COOKIE);


include("db.php");
include("header.php");
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




?>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary text-light px-4 py-2">Your Cart</h4>
					<a href="clear_cart.php">Clear Cart</a>
				</div>
			</div>
			<div class="row">
				<?php

				$x = $_COOKIE['cart'];
				$arr = explode("#", $x);
				$total=0;
				foreach($arr as $y)
				{ 
					$query = "SELECT * FROM product WHERE id=$y";
					$result = mysqli_query($con, $query);
					$data = mysqli_fetch_assoc($result);
					$total += $data['product_price'];
				

				?>
				<div class="col-md-10 offset-md-1 my-3">			
					<div class="card">
						<div class="card-header">
							<b><?php echo $data['product_name'];?></b>
						</div>
						<div class="card-body">
							<img src="admin/upload/<?php echo $data['image_name'];?>" height="100" width="100" />
						</div>
						<div class="card-footer">
							<?php echo $data['product_price']; ?>
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
	</div>
</div>
<?php
include("footer.php");
?>
