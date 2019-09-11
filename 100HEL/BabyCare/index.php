<?php
include("db.php");
include("header.php");
if (isset($_GET['search']))
{
	$search=$_GET['search'];
	if (isset($_GET['category']))
	{
		$a=$_GET['category'];
		$query="SELECT * FROM addproduct WHERE productcategory='$a' AND productname LIKE '%$search%'";
		$result=mysqli_query($con, $query);
	}
	else
	{
		$query="SELECT * FROM addproduct WHERE productname LIKE '%$search%'";
		$result=mysqli_query($con, $query);
	}
}
else
{
	if (isset($_GET['category']))
	{
		$a=$_GET['category'];
		$query="SELECT * FROM addproduct WHERE productcategory='$a'";
		$result=mysqli_query($con, $query);
	}
	else
	{
		$query="SELECT * FROM addproduct";
		$result=mysqli_query($con, $query);
	}
}
?>
		<div class="col-md-9">
			<div class="bg-secondary my-2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3 class="bg-secondary text-light my-2 p-1">Latest Product</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="container my-4">
				<div class="row">
					<?php
					while ($data=mysqli_fetch_assoc($result))
					{
						$a=$data['productprice'];
						$b=$data['productdiscount'];
						$x=$a*$b/100;
						$y=$a-$x;
						?>
					<div class="col-md-4">
						<div class="card mb-4">
							<div class="card-header">
								<span class="font-weight-bold"><?php echo $data['productname']; ?></span>
							</div>
							<div class="card-body">
								<img src="admin/upload/<?php echo $data['imagename']; ?>" style="height: 150px; width: 190px;">
							</div>
							<div class="card-footer">
								<a href="addtocart.php?pid=<?php echo $data['id']; ?>" class="btn btn-success btn-sm">Add to Cart</a>
								<a href="moreaboutproduct.php?pid=<?php echo $data['id']; ?>" class="btn btn-sm btn-success">More</a>
							<del>(<?php echo $data['productprice']; ?>)</del><br />
							<b><?php echo $y; ?></b>
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
</div>
<?php
include("footer.php")
?>