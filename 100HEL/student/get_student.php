<?php
include("db.php");
$query="SELECT * FROM student_detail";
$res=mysqli_query($con , $query);
echo json_encode(mysqli_fetch_assoc($res));

?>