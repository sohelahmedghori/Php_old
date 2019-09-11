<?php

include("../db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}

$query="SELECT * FROM category";
$result=mysqli_query($con,$query);

include("header.php");

?>

<div class="container">
	<h4>View all category</h4>
	<div class="row">
		<div class="col-md-12">
			<form action="save_category.php" method="post" >
				<table class="table table-border table-secondary table-hover">
					<tr>
						<th>s.no.</th>
						<th>category name</th>
						<th>edit</th>
						<th>delete</th>
					</tr>
					<?php
					while($data = mysqli_fetch_assoc($result))
					{?>

					<tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['category']; ?></td>
						<td><a href="edit_cate.php?e_cate=<?php echo $data['id']; ?>" class="btn btn-info">Edit</a></td>
						<td><a href="delete_cate.php?d_cate=<?php echo $data['id'];?>" class="btn btn-danger">deletes</a></td>
					</tr>
					<?php
					}?>
				</table>
			</form>
		</div>
	</div>
</div>


<?php
include("footer.php");
?>