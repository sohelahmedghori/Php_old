<?php 
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include ("header.php");

$query = "SELECT * FROM category";
$result = mysqli_query($con,$query);

?>
<div class="container-fluid">
       <h3>Views all category</h3>
       <div class="row">
       	<div class="col-md-12">
       		<table class="table table-dark table-bordered table-hover"> 
<tr>
<th>S. No.</th>
<th>Category Name</th>
<th>Edit</th>
<th>Delete</th>



</tr> 
<?php
 while ($data = mysqli_fetch_assoc($result)) {
	

 ?>

 <tr>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['cate_name']; ?></td>

<td><a href="edit_category.php?edot=<?php  echo $data['id'] ; ?>" class="btn btn-success">Edit</a></td>
<td><a href="delete_category.php?cote=<?php  echo $data['id'];?>" class="btn btn-danger">Delete</a></td>
</tr>

<?php  }

?>
       		</table></div></div>
</div><?php 
include ('footer.php')
?>