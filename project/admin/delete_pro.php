	<?php
include("../db.php");

// print_r($_GET);
$a = $_GET['demo'];
$query = "DELETE FROM product WHERE id=$a";

mysqli_query($con, $query);
header("location:view_product.php");

?>