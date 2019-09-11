<?php
include("../db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
include("header.php");
?>
<div class="container mt-4">
	<h3>Admin Dashboard</h3>
</div>
<?php
include("footer.php");
?>
