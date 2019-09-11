<?php
include("../db.php");

$query = "SELECT * FROM more_image";
$result = mysqli_query($con, $query);


include("header.php");
?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<table class="table table-dark table-hover">
				<tr>
					<th>ID</th>
					<th>Product ID</th>
					<th>Images</th>
					<?php
					while ($data =mysqli_fetch_assoc($result)) 
						{?>
				</tr>
				<tr>
					<td><?php echo $data['id'] ?></td>
					<td><?php echo $data['product_id'] ?></td>
					<td><img src="upload/<?php echo $data['image_name']; ?>"></td>

				</tr>
				<?php	}
					?>
			</table>
		</div>
	</div>
</div>