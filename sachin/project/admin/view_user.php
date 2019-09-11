<?php
include ("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include ( 'header.php');
$query = "SELECT * FROM project";
$result = mysqli_query($con,$query);


?>
<div class="container-fluid">
     <h3>View all user</h3>
        <div class="row">
           <div class="col-md-12">
              <table class="table table-dark table-bordered table-hover">
                <th>S. No</th>
<th> Full name</th>
<th>User Name</th>
<th>Contact</th>
<th>Status</th>
<th>Change</th>
</tr>


<?php  
while ($data = mysqli_fetch_assoc($result)) { ?>
<tr>   
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['full_name']; ?></td>
<td><?php echo $data['user_name']; ?></td>
<td><?php echo $data['contact']; ?></td>
<td>active</td>
<td><a href="#"  class="btn btn-info">change</a></td>




</tr><?php
}
?>



</table></div></div></div>