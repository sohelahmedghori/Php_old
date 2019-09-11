<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include('header.php');	
$query ="SELECT * FROM category";
$result=mysqli_query($con, $query);



?>
<div class="container">
	<h3>View All Category</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<table class="table table-bordered table-dark table-hover">
				<tr>
					<th>S.No.</th>
					<th>Category Name</th>
					<th>Product Category</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				while($data = mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['category_name'];?></td>
<<<<<<< HEAD
						<td><?php echo $data['category'];?></td>
						<td><a href="edit_cate.php?cate=<?php echo $data['id'];?>" class="btn btn-info">Edit</a></td>
						<td><a href="delete_cate.php?cate=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
=======
						<td><a href="edit_cate.php?cate=<?php echo $data['id'];?>" class="btn btn-info">Edit</a></td>

						<td><a href="#" onclick="ask(<?php echo $data['id']; ?>)" data-target="#delmodal" data-toggle="modal" class="btn btn-danger">Delete</a></td>
						
>>>>>>> 1d97536d0c78d33709a5a08397ec864c8ca4da12
					</tr>

				<?php
				}
				?>

			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	var x ="";
	function ask(a)
	{
		x=a;
	}
	function delete_cat()
	{
		var url = "delete_cate.php?cate="+x;
		// alert(url);
		window.location.href=url;	
	}
</script>




<div id="delmodal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Delete</h3>
			</div>
			<div class="modal-body">
				<h5>Are You Sure want to delete this</h5>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" onclick="delete_cat()">Delete</button>
				<button class="btn btn-light" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>

</div>



<?php
include('footer.php');
?>

