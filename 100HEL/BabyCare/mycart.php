<?php
include("db.php");
include("header.php");
// if (isset($_GET['category']))
// {
// 	$a=$_GET['category'];
// 	$query="SELECT * FROM addproduct WHERE productcategory='$a'";
// 	$result=mysqli_query($con, $query);
// }
// else
// {
// 	$query="SELECT * FROM addproduct";
// 	$result=mysqli_query($con, $query);
// }
?>
		<div class="col-md-9">
			<div class="bg-secondary my-2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3 class="bg-secondary text-light my-2 p-1">My Cart</h3>
						</div>
					</div>
				</div>
			</div>
			<div>
				<a href="clearcart.php">Clear Cart</a>
			</div>
			<div class="container my-4">
				<div class="row">
					<?php
					$x=$_COOKIE['cart'];
					$arr=explode("#", $x);
					$total=0;
					foreach ($arr as $y) 
					{
						$query="SELECT * FROM addproduct WHERE id='$y'";
						$result=mysqli_query($con, $query);
						$data=mysqli_fetch_assoc($result);

						$a=$data['productprice'];
						$b=$data['productdiscount'];
						$c=$a*$b/100;
						$d=$a-$c;

						$total+=$d;
						?>
					<div class="col-md-10 offset-1 my-2">
						<div class="card">
							<div class="card-header">
								<span class="font-weight-bold"><?php echo $data['productname']; ?></span>
							</div>
							<div class="card-body">
								<img src="admin/upload/<?php echo $data['imagename']; ?>" height="100" width="100">
							</div>
							<div class="card-footer">
								<del>(<?php echo $data['productprice']; ?>)</del>
								<b><?php echo $d; ?></b>
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
</div>
<?php
include("footer.php")
?>