<?php
include("db.php");
include("header.php");

// print_r($_COOKIE);
// die;
?>
<div class="col-md-9 border p-4">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary text-light px-4 py-2">Your Product on Cart</h4>
					<a href="clear_cart.php" class="btn btn-warning">Clear Cart</a>
				</div>
			</div>
			<div class="row">
					<?php

					$x = $_COOKIE['cart'];
					$arr = explode("#", $x);

					$total = 0;
					foreach ($arr as $y)
					{
					
						$query =" SELECT * FROM product WHERE id='$y'";
						$result = mysqli_query($con, $query);
						$data = mysqli_fetch_assoc($result);

						$total += $data['pprice'];
					?>
				<div class="col-md-8 offset-2">
					<div class="card mb-2">
						<div class="card-header">
							<b> <?php echo $data['pname'] ?></b>
						</div>
						<div class="card-body">
							<img src="admin/upload/<?php echo $data['image_name']; ?>" height="80" width="100">
						</div>
						<div class="card-footer">
							<?php echo $data['pprice']; ?>
						</div>
					</div>
				</div>
				<?php
			  }
			?>
			</div>
			<h2 class="bg-info mt-3">Total : <?php echo $total ?> <a href="#" class="btn btn-success float-right">Pay</a></h2>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
?>