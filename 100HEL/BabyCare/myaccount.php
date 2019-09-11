<?php
include("db.php");
if (! isset($_SESSION['is_user_logged_in'])) 
{
	header("location:login.php");
}
include("header.php");
?>
<div class="col-md-9 p-4 my-2 border">
	<div class="row">
		<div class="col-md-12">
			<h4 class="bg-secondary text-light px-4 py-2">My Account</h4>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3>Welcome:<?php echo $_SESSION['name'];?></h3>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>