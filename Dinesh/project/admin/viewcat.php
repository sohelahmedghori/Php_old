<?php

  include("../db.php");
  if (! isset($_SESSION['is_admin_logged_in']))
   {
     header("location:index.php");   	
   }     
   include("header.php");
   $query="SELECT * FROM category";
   $result=mysqli_query($con,$query);  
?>

<div class="container">
	 <h3>view all category</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<table class="table table-dark table-bordered table-hover">
				<tr>
					<th>s. no.</th>
					<th>category name</th>
					<th>edit</th>
					<th>delete</th>
				</tr>
				<?php
				while ($data=mysqli_fetch_assoc($result)) {?>
				 	
				 	<tr>
				 		<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['cat_name'];?></td>
						<td><a href="#" class="btn btn-info">Edit</a></td>
						<td><a href="delcate.php?cate=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
				 	</tr>
				<?php }  ?> 
				
			</table>
		</div>
	</div>
</div>
<?php
  include("footer.php");
  ?>