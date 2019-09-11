<?Php
 include('db.php');

    if(! isset($_SESSION['is_user_loged_in']))
{
	header("location:login.php");
}

    include("header.php");
?>

 <div class="col-md-9 border p4">
 	<div class="row">
 		<div class="col-md-12">
 			<h4 class="bg-secondary text-light PX-4 py-2">
 				my account
 			</h4>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-12">
 			<h3>Welcome: <?php echo $_SESSION['name'];  ?></h3>
 		</div>
 	</div>
 </div>
 <?php 
   include('footer.php');
  ?>

