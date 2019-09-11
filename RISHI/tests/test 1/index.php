<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar bg-info navbar-dark navbar-expand-sm sticky-top">
		<h2>STUDENT REGISTRATION</h2>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="save_table.php" method="post">
					<table class="table table-border">
					<div class="card">
						<div class="card-header">
							<h4>Registration form</h4>
						</div>
						<div class="card-body">
							<div class="form-group">
							<label>student name</label>
							<input type="text" placeholder="Student name" class="form-control" name="st_name">
							</div>
							<div class="form-group">
							<label>fees</label>
							<input type="text" placeholder="FEES" class="form-control" name="fee">
							</div>
							<div class="form-group">
							<label>age</label>
							<input type="text" placeholder="AGE" class="form-control" name="age">
							</div>
							<div class="form-group">
							<label>class</label>
							<select class="form-control" name="class">
								<option>SELECT</option>
								<option>1st</option>
								<option>2nd</option>
								<option>3rd</option>
								<option>4th</option>
								<option>5th</option>
								<option>6th</option>
								<option>7th</option>
								<option>8th</option>
								<option>9th</option>
								<option>10th</option>
								<option>11th</option>
								<option>12th</option>
							</select>
							<div class="form-group">
							<label>contact</label>
							<input type="text" placeholder="Mobile no." class="form-control" name="mobile">
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" value="submit" class="btn btn-success">
						</div>
					</div>
				    </table>
				</form>
			</div>
		</div>
	</div>

</body>
</html>