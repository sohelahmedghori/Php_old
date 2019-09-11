	<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include('header.php');
$query = "SELECT * FROM user";
$result = mysqli_query($con, $query);


?>
<script type="text/javascript">
	function get_user()
	{
		$.ajax({
			url : "get_user.php",
			type : "get",
			success : function(res){
				// alert(res);
				$("#user_tbl").html(res);
				setTimeout("get_user()", 2000);
			}
		})
	}
	setTimeout("get_user()", 2000);


</script>




<div class="container">
	<h3>View All User</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<table class="table table-bordered table-dark table-hover">
				<tr>
					<th>S.No.</th>
					<th>Full Name</th>
					<th>Username</th>
					<th>Contact</th>
					<th>Status</th>
					<th>Change</th>
				</tr>
				<tbody id="user_tbl">
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['full_name']; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo $data['contact']; ?></td>
						<td>Active</td>
						<td><a href="#" class="btn btn-info">Change</a></td>
					</tr>
				<?php
				}
				?>
			</tbody>

			</table>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>

