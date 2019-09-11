<?php
include("db.php");
include("header.php");
$query="SELECT * FROM addproduct";
$result=mysqli_query($con ,$query);
?>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<h3 class="bg-dark text-light p-2">LATEST PRODUCT</h3>
					</div>
				</div>
				<div class="row mt-4">
				<?php
				while($data=mysqli_fetch_assoc($result))
				{	
					$a=$data['productprice'];
					$b=$data['productdiscount'];
					$x=$a*$b/100;
					$y=$a-$x;	

				?>
					<div class="col-md-4">
						<div class="card">
							<div class="card-header">
								<?php echo $data['productname']; ?>
							</div>
							<div class="card-body">
								<img src="admin/upload/<?php echo $data['image_name']; ?>"style="height: 200px !important; width: 100%;">
							</div>
							<div class="card-footer">
								<input type="submit" value="buy" class="btn btn-success">
							<del><?php echo $data['productprice'];  ?></del>
							<b><?php echo $y; ?>.00 </b>
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
</body>
</html>