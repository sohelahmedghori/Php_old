<?php
      
    include("../db.php");

    if (! isset($_SESSION['is_admin_logged_in']))
     {
    	header("loaction:index.php");
    }

    include("header.php");
?>
 <div class="container">
 	<h3>create new admin</h3>
 	<div class="row">
 		<div class="col-md-4 offset-md-4">
 			<form action="add_admin.php"method="post" >
 			<div class="card">
 				<div class="card-body">
 					<div class="form-group">
 						<label>username</label>
 						<input type="text" name="username" placeholder="username" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>password</label>
 						<input type="text" name="password" placeholder="password" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>re-password</label>
 						<input type="text" name="re-password" placeholder="re-password" class="form-control">
 					</div>
 				</div>
 				<div class="card-footer">
 					<input type="submit" name="add"
 					class="btn btn-success">
 				</div>
 			</div>
 			</form>
 		</div>
 	</div>
 </div>
<?php
  include("footer.php");
?>