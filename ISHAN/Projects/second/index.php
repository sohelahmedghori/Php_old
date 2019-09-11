<?php
		// print_r($_COOKIE);
		// die;

		include("db.php");
		include("header.php");
		// print_r($_GET);
	if(isset($_GET['q']))
	{
		$q = $_GET['q'];
		if (isset($_GET['category'])) 
		{
			$a = $_GET['category'];
			$query =" SELECT * FROM product WHERE pcate='$a' AND pname LIKE '%$q%'";
			$result = mysqli_query($con, $query);
		}
		else
		{
			$query =" SELECT * FROM product WHERE pname LIKE '%$q%'";
			$result = mysqli_query($con, $query);
		}
	}
	else
	{
		if(isset($_GET['category1']))
		{
			$a = $_GET['category1'];
			$query =" SELECT * FROM product WHERE pcate ='$a'";
			$result = mysqli_query($con,$query);
		}
		else
		{
			$query =" SELECT * FROM product";
			$result = mysqli_query($con,$query);
		}
	}	
?>
		<div class="col-md-9 mb-1">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary py-4 pl-2 text-light">New Arrival's</h4>
				</div>
			</div>
			<div class="row">
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ 
					$a = $data['pprice'];
					$b = $data['pdiscount'];

					$x = $a * $b /100;
					$y = $a - $x;
				?>
				<div class="col-md-4 mb-1">
					<div class="card">
						<div class="card-header">
							<span class="font-weight-bold"><?php echo $data['pname']; ?></span>
						</div>
						<div class="card-body">
						<center>
							<img src="admin/upload/<?php echo $data['image_name']; ?>" style="width: 70%; height:160px !important;">
						</center>	
						</div>
						<div class="card-footer">
						<a href="add_to_cart.php?pid=<?php echo $data['id']; ?>" class="btn btn-success" >Add to Cart</a>
						<a href="admin/more_img.php?p_id=<?php echo $data['id']; ?>" class="btn btn-primary" >More</a>
						<br>
							<del>(<?php echo $data['pprice']; ?>)</del>
							<b><?php echo $y; ?>.00</b>
						
					</div>
					</div>
				</div>
			<?php }
			?>
			</div>
		</div>
	</div>
</div>
</div>
<?php
		include("footer.php");
?>