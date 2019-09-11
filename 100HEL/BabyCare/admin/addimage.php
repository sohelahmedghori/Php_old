<?php
// print_r($_POST);
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
$name=$_FILES['pro_image']['name'];
$size=$_FILES['pro_image']['size'];
$tmp_name=$_FILES['pro_image']['tmp_name'];
$arr=explode(".", $name);
$ext=end($arr);
if ($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")
{
	$a=$_POST['pid'];
	$b=$_POST['pro_image'];
	$img_name=time().rand(1000, 100000).".".$ext;
	$query="INSERT INTO images(product_id, image_name) VALUES ('$a','$img_name')";
	move_uploaded_file($tmp_name, "upload/".$img_name);
	mysqli_query($con, $query);
	// header("location: view_pro.php");
}
else
{
	$_SESSION['msg']="This file type not allowed";
	header("location:add_more_image.php");
}

$name=$_FILES['pro_image1']['name'];
$size=$_FILES['pro_image1']['size'];
$tmp_name=$_FILES['pro_image1']['tmp_name'];
$arr=explode(".", $name);
$ext=end($arr);
if ($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")
{
	$a=$_POST['pid'];
	$b=$_POST['pro_image1'];
	$img_name1=time().rand(1000, 100000).".".$ext;
	$query="INSERT INTO images(product_id, image_name) VALUES ('$a','$img_name1')";
	move_uploaded_file($tmp_name, "upload/".$img_name1);
	mysqli_query($con, $query);
	// header("location: view_pro.php");
}
else
{
	$_SESSION['msg']="This file type not allowed";
	header("location:add_more_image.php");
}

$name=$_FILES['pro_image2']['name'];
$size=$_FILES['pro_image2']['size'];
$tmp_name=$_FILES['pro_image2']['tmp_name'];
$arr=explode(".", $name);
$ext=end($arr);
if ($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")
{
	$a=$_POST['pid'];
	$b=$_POST['pro_image2'];
	$img_name2=time().rand(1000, 100000).".".$ext;
	$query="INSERT INTO images(product_id, image_name) VALUES ('$a','$img_name2')";
	move_uploaded_file($tmp_name, "upload/".$img_name2);
	mysqli_query($con, $query);
	// header("location: view_pro.php");
}
else
{
	$_SESSION['msg']="This file type not allowed";
	header("location:add_more_image.php");
}

$name=$_FILES['pro_image3']['name'];
$size=$_FILES['pro_image3']['size'];
$tmp_name=$_FILES['pro_image3']['tmp_name'];
$arr=explode(".", $name);
$ext=end($arr);
if ($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")
{
	$a=$_POST['pid'];
	$b=$_POST['pro_image3'];
	$img_name3=time().rand(1000, 100000).".".$ext;
	$query="INSERT INTO images(product_id, image_name) VALUES ('$a','$img_name3')";
	move_uploaded_file($tmp_name, "upload/".$img_name3);
	mysqli_query($con, $query);
	header("location: view_pro.php");
}
else
{
	$_SESSION['msg']="This file type not allowed";
	header("location:add_more_image.php");
}
?>