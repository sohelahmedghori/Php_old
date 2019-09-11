<?php
session_start();

include("header.php");
?>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<h2>Myprofile</h2>
		</div>
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h2>welcome:<?php echo $_SESSION['name']?></h2>
			</div>
		</div>
	</div>
	
</div>
<?php
include("footer.php")?>