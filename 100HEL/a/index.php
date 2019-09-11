<?php
include("db.php");
include("header.php");
$query="SELECT * FROM addproduct";
$result=mysqli_query($con, $query);
?>
			<form class="form-inline" action="search.php" method="post">
				<div class="form-group">
					<span>search Product</span> &nbsp;
					Min Price <input type="text" name="startprice" class="form-control">&nbsp; 
					Max Price <input type="text" name="endprice" class="form-control">
					<input type="submit" name="search" value="Search">
				</div>
			</form>
		<div class="col-md-12">
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