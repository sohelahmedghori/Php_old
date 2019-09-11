<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
  header("location:index.php");
}
include('header.php');
?>
  <div class="container">
  	 <div class="row">
  	 	<div class="col-md-8 offset-md-2">
  	 		<div class="card">
  	 			<div class="card-header">
  	 				category-deails
  	 			</div>
  	 			<div class="card-body">
  	 				<form action="savecat.php" method="post">
  	 					<div class="form-group">
  	 						<label>category name</label>
  	 						<input type="text" name="cat_name" placeholder="category name" class="form-control">

  	 					</div>
  	 			</div>
                     <div class="card-footer">
                     	<input type="submit" value ="add" class="btn btn-primary">
                     </div>
               </form>
  	 		</div>
  	 			
  	 				
  	 			
  	 		
  	 		
  	 	</div>
  	 </div>
  </div>
  <?php 
        include('footer.php');     
 
   ?>