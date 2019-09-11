<?php
$con= mysqli_connect("localhost","root","password","e_commerce");
$query = "DELETE FROM user WHERE id=2";

mysqli_query($con ,$query);

?>