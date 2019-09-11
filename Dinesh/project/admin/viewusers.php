<?php 
    include("../db.php");

    if (!isset($_SESSION['is_admin_logged_in'])) 
    {
    	header("location:index.php"); 
    }

    include("header.php");
    $query="SELECT * FROM user";
    $result=mysqli_query($con,$query);
 ?>

  <div class="container">
  	<h3>view all users</h3>
  	<div class="row">
  		<div class="col-md-12">
  			<table class="table table-hover
  			 table-dark table-bordered">
  			 	<tr>
  			 		<th>S.No.</th>
					<th>Full Name</th>
					<th>Username</th>
					<th>Contact</th>
					<th>Status</th>
					<th>Change</th>
  			 	</tr>
  			 	<?php 
                    while ($data=mysqli_fetch_assoc($result)) 
                    { ?>
                    <tr>
                    	<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['full_name']; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo $data['contact']; ?></td>
						<td>Active</td>
						<td><a href="#" class="btn btn-info">Change</a></td>
                    </tr>	 
                    <?php }  ?>
  			 	
  			 </table>
  		</div>
  	</div>
  </div>

  <?php
include('footer.php');
?>