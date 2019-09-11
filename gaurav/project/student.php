<?php
include("header.php");
?>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">Student's</div>
	</div>
	<div class="row">
		<div class="col-md-8 offsert-md-2">
			<form action="student_save.php" method="post">
				Name<input type="text" name="name"/>
				<br>
				<br>
				Fee<input type="text" name="fee"/>
				<input type="submit" value="add"/>
			</form>
		</div>
	</div>
</div>

