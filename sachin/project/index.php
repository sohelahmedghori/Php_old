<?php
// print_r($_COOKIE);


// include("db.php");
include("header.php");
if( ! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
// print_r($_GET);
// die;
  if(isset($_GET['s_name']))
   {
      $a = $_GET['s_name'];
      if(isset($_GET['category']))
       {
          $c = $_GET['category'];
          $query = "SELECT * FROM product WHERE p_cate='$c' AND p_name LIKE '%$a%'";
          $result = mysqli_query($con,$query);
        }
         else
        {
          $query = "SELECT * FROM product WHERE p_name LIKE '%$a%'";
          $result = mysqli_query($con,$query);



         }


    }
    else

       if(isset($_GET['category']))
        {
        	$c = $_GET['category'];
	        $query = "SELECT * FROM product WHERE p_cate ='$c'";
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
					<h4 class="bg-secondary text-light px-4 py-2">Lastest Product</h4>
				</div>
			</div>
			<div class="row">
				<?php
				while($data = mysqli_fetch_assoc($result))
				{
					$a = $data['p_price'];
					$b = $data['discount'];
					$x =$a *$b/100;
					$y = $a-$x;






				 ?>
				<div class="col-md-4">
					<div class="card mb-2">
						<div class="card-header">
							<span class="font-weight-bold"><?php echo $data['p_name'];?></span>
						</div>
						   <div class="card-body">
							<img src="admin/upload/<?php echo $data['image_name']; ?>" style="height:150px !important; width:100%;">
						   </div>
						<div class="card-footer">
							<a href="add_to_cart.php?pid=<?php echo $data['id']; ?>" class="btn btn-dark btn-sm">Add To Cart</a>
							<br />
							<del>(<?php echo $data['p_price'];?>)</del>
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

<div class="btn btn-success"><a href="admin/dashboard.php">admin</a></div>