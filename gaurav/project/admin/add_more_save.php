<?php
// print_r($_POST);
// die();
$con= mysqli_connect("localhost","root","","onlineshop");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:index.php");
}
$name = $_FILES['image1']['name'];
$tmp_name = $_FILES['image1']['tmp_name'];
$arr = explode(".",$name);
$ext = end($arr);
if($ext=="jpg"||$ext=="jpeg"||$ext=="png"||$ext=="gif")
{
$newname=time().rand(1000,100000).".".$ext;
$x = $_POST['i_id'];
$query="INSERT INTO moreprod(prod_id,imagename)VALUES('$x','$newname')";
move_uploaded_file($tmp_name, "upload/".$newname);
mysqli_query($con,$query);
}



$name = $_FILES['image2']['name'];
$tmp_name = $_FILES['image2']['tmp_name'];
$arr = explode(".",$name);
$ext = end($arr);
if($ext=="jpg"||$ext=="jpeg"||$ext=="png"||$ext=="gif")
{
$newname=time().rand(1000,100000).".".$ext;
$x = $_POST['i_id'];
$query="INSERT INTO moreprod(prod_id,imagename)VALUES('$x','$newname')";
move_uploaded_file($tmp_name, "upload/".$newname);
mysqli_query($con,$query);
}




$name = $_FILES['image3']['name'];
$tmp_name= $_FILES['image3']['tmp_name'];
$arr = explode(".",$name);
$ext = end($arr);
if($ext=="jpg"||$ext=="jpeg"||$ext=="png"||$ext=="gif")
{
$newname=time().rand(1000,100000).".".$ext;
$x = $_POST['i_id'];
$query="INSERT INTO moreprod(prod_id,imagename)VALUES('$x','$newname')";
move_uploaded_file($tmp_name, "upload/".$newname);
mysqli_query($con,$query);



}
$name = $_FILES['image4']['name'];
$tmp_name = $_FILES['image4']['tmp_name'];
$arr = explode(".",$name);
$ext = end($arr);
if($ext=="jpg"||$ext=="jpeg"||$ext=="png"||$ext=="gif")
{
$newname=time().rand(1000,100000).".".$ext;
$x = $_POST['i_id'];
$query="INSERT INTO moreprod(prod_id,imagename)VALUES('$x','$newname')";
move_uploaded_file($tmp_name, "upload/".$newname);
mysqli_query($con,$query);
header("location:view product.php");
}




?>