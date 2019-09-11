<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<nav class="navbar navbar-dark bg-dark">
  
 
  <div></div>

</nav>
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="save.php" method="post">
				<div class="card">
					<div class="card-header">
						<h1>Student form</h1>
					</div>
					<div class="card-body">
						<div class="form-group">
						<label>Student name</label>
						<input type="text" name="stud_name" class="form-control">
						</div>
						<div class="form-group">
						<label>Student fee</label>
						<input type="text" name="stud_fee" class="form-control">
						</div> 
						<div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control">
						</div> 
						<div class="form-group">
							<label>Class</label>
						<select class="form-control" name="class">
							<option>Select</option>
							<option>first</option>
							<option>second</option>
							<option>third</option>
						</select>
						</div> 
						<div class="form-group">
						<label>Contact</label>
						<input type="text" name="contact" class="form-control">
						</div> 
					</div>
					<div class="card-footer">
						<input type="submit" value="add" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
