
<?php
include("../db.php");
	if (! isset($_SESSION['is_user_logged_in'])) {
		header("location:index.php");
	}
include("header.php");

?>

<h2 class="text-danger">Welcome to Admin Dashboard</h2>

</body>
</html>