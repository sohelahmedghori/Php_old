<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
		
	</nav>
	<div class="container">
		<div class="row my-2">
			<div class="col-md-8 offset-2">
				<div class="card">
					<div class="card-header">
						<h3>Student Details</h3>
					</div>
					<form action="save.php" method="post">
					<div class="card-body">
						<div class="form-group">
							<label>Student Name</label>
							<input type="text" class="form-control" placeholder="Student Name" name="s_name">
						</div>
						<div class="form-group">
							<label>Fee</label>
							<input type="text" class="form-control" placeholder="Fee" name="s_fee">
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="text" class="form-control" placeholder="Age" name="s_age">
						</div>
						<div class="form-group">
							<label>Class</label>
							<select class="form-control" name="s_class">
								<option>Select</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
						</div>
						<div class="form-group">
							<label>Contact</label>
							<input type="text" class="form-control" placeholder="Contact" name="s_contact">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" class="btn btn-success" value="Submit">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>