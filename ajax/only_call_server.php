<?php
$con = mysqli_connect("localhost", "admin", "admin", "tss_11");
$query = "DELETE FROM student WHERE id=4";
mysqli_query($con, $query);
?>