<?php
// print_r($_POST);
include("db.php");
include("header.php");
if($_POST['search'])
{
$a=$_POST['startprice'];
$b=$_POST['endprice'];
$query="SELECT productname FROM addproduct WHERE productprice BETWEEN '$a' AND '$b'";
$result=mysqli_query($con, $query);
}
?>
<div class="container my-4">
				<div class="row">
					<table class="table table-dark table-bordered table-hover">
						<!-- <tr>
							<td>Product</td>
							<td><?php echo $data['productname'];?></td>
						</tr> -->
						<?php
						if(mysqli_num_rows($result)==0)
						{
							echo "No Product Found";
						}
						else
						{
							while ($data=mysqli_fetch_assoc($result)) 
							{?>
								<tr>
									<td>Product</td>
									<td><?php echo $data['productname'];?></td>
								</tr>
							<?php
							}
						}
						?>
					</table>
					
				</div>
			</div>

<?php
include("footer.php");
?>