<?php
include("db.php");
include("header.php");

//BackDoor Protection
if (! isset($_SESSION['is_user_logged_in'])) {
	header("location:login.php");
}
?>
<div class="col-md-7 m-4 p-4">
	<div class="row">
		<div class="col-md-12">
			<h4 class="bg-secondary py-4 pl-2 text-light">My Account</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>Welcome : <?php echo $_SESSION['name']; ?></h3>
		</div>
	</div>
</div>
