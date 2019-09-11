<?php
include("../db.php");
if (! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$query="SELECT * FROM category";
$result=mysqli_query($con, $query);
?>
<div class="container">
	<h3>View All Category</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-dark table-hover table-border">
				<tr>
					<td>S.no.</td>
					<td>Category Name</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
				<?php
				while ($data=mysqli_fetch_assoc($result))
				{
					?>
					<tr>
						<td><?php echo $data['id'];?></td>
						<td><?php echo $data['categoryname'];?></td>
						<td><a href="edit_cate.php?e_cate=<?php echo$data['id'];?>" class="btn btn-info">Edit</a></td>
						<td><a href="delete_cate.php?d_cate=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>