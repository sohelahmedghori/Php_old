<?php
include("db.php");
include("header.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
?>

<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<h4 class="bg-secondary text-light">my account</h4>
		</div>
	</div>
	<div class="row">
		<div  class="col-md-12">
			<h3>welcome : <?php echo $_SESSION['name']; ?></h3>
		</div>
	</div>
</div>