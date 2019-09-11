<?php
include("header.php");
// $query="SELECT * FROM student_detail";
// $result=mysqli_query($con, $query);
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#submit").click(function(){
			// alert();
			$.ajax({
				url : "get_student.php",
				type : "get",
				success : function(res){
					alert(res);
					$("#table").html(res);
				}
			})
		})
	})
</script>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3 my-2">
			<form action="save.php" method="post">
				<div class="card">
					<div class="card-header">
						<h3>Detail</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
								<label>Full Name</label>
								<input type="text" placeholder="Full Name" class="form-control" name="fullname">
							</div>
							<div class="form-group">
								<label>Age</label>
								<input type="text" placeholder="Age" class="form-control" name="age">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<input type="radio" name="gender" value="Male">Male
								<input type="radio" name="gender" value="Female">Female
							</div>
							<div class="form-group">
								<label>Contact</label>
								<input type="text" class="form-control" placeholder="Contact" name="contact">
							</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Submit" id="submit" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 my-2">
			<div id="table">
				
			</div>
			<!-- <table class="table table-bordered table-dark table-hover" id="table">
				<tr>
					<th>Full Name</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Contact</th>
					<th>Detail</th>
					<th>Delete</th>
				</tr>
				<?php
				while ($data=mysqli_fetch_assoc(res))
				{?>
					<tr>
						<td><?php echo $data['fullname'];?></td>
						<td><?php echo $data['age'];?></td>
						<td><?php echo $data['gender'];?></td>
						<td><?php echo $data['contact'];?></td>
						<td><a href="#" class="btn btn-info">More</a></td>
						<td><a href="delete.php?d_student=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a></td>
					</tr>
				<?php
				}
				?>
			</table> -->
		</div>
	</div>
</div>
<?php
include("footer.php");
?>