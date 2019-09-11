<?php
include('../db.php');

// print_r($_FILES);
// print_r($_POST);

$a = $_POST['title'];
$b = $_POST['sub_title'];

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$arr = explode(".", $name);
$ext = end($arr);

$new_name = time().rand(10000, 100000).".".$ext;
move_uploaded_file($tmp_name, "../slider_img/".$new_name);
$query = "INSERT INTO slider (image_name, title, sub_title) VALUES ('$new_name', '$a', '$b')";

mysqli_query($con, $query);
header("location:slider.php");

?>
