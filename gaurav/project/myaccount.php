<?php
$con=mysqli_connect("localhost","root","","onlineshop");
session_start();
if (!isset($_SESSION['is_user_logged_in'])) 
{
	header("location:signin.php");
}
// print_r($_SESSION);
include("header.php");
?>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<h2>My Account</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h2>Welcome <?php echo $_SESSION['name'];?></h2>
		</div>
	</div>
	
</div>
<?php
include("footer.php");
?>