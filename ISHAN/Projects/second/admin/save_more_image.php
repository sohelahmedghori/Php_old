<?php
// print_r($_FILES);
// print_r($_POST);
// die;
include("../db.php");

$id = $_POST['imgid'];

$name = $_FILES['image1']['name'];
$size = $_FILES['image1']['size']; 
$tmp_name = $_FILES['image1']['tmp_name']; 

$arr = explode(".", $name);
$ext = end($arr);


	$img = $_POST['image1'];
	$new_name = time().rand(1000,10000).".".$ext;

	$query =" INSERT INTO more_image(product_id, image_name) VALUES('$id', '$new_name')";
	move_uploaded_file($tmp_name, "upload/".$new_name);
	mysqli_query($con, $query);



$name = $_FILES['image2']['name'];
$size = $_FILES['image2']['size']; 
$tmp_name = $_FILES['image2']['tmp_name']; 

$arr = explode(".", $name);
$ext = end($arr);

	
	$img = $_POST['image2'];
	$new_name = time().rand(1000,10000).".".$ext;

	$query =" INSERT INTO more_image(product_id, image_name) VALUES('$id', '$new_name')";
	move_uploaded_file($tmp_name, "upload/".$new_name);
	mysqli_query($con, $query);
	


$name = $_FILES['image3']['name'];
$size = $_FILES['image3']['size']; 
$tmp_name = $_FILES['image3']['tmp_name']; 

$arr = explode(".", $name);
$ext = end($arr);


	$img = $_POST['image3'];
	$new_name = time().rand(1000,10000).".".$ext;

	$query =" INSERT INTO more_image(product_id, image_name) VALUES('$id', '$new_name')";
	move_uploaded_file($tmp_name, "upload/".$new_name);
	mysqli_query($con, $query);
	


$name = $_FILES['image4']['name'];
$size = $_FILES['image4']['size']; 
$tmp_name = $_FILES['image4']['tmp_name']; 

$arr = explode(".", $name);
$ext = end($arr);


	$img = $_POST['image4'];
	$new_name = time().rand(1000,10000).".".$ext;

	$query =" INSERT INTO more_image(product_id, image_name) VALUES('$id', '$new_name')";
	move_uploaded_file($tmp_name, "upload/".$new_name);
	mysqli_query($con, $query);
	header("location:view_pro.php");

?>