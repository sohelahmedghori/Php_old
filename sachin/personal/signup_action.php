<?php 
include("abc.php");
// print_r($_POST);
// print_r($_FILES);
$name= $_FILES['image']['name'];
$size= $_FILES['image']['size'];
$tmp_name=$_FILES['image']['tmp_name'];
$arr=explode(".",$name);
$ext=end($arr);
if($ext=="jpg" || $ext =="jpeg" || $ext =="gif" || $ext =="png");
{
 if($size<=(1024*1024*1)){
 
 	$new_name = time().rand(10000,1000000).".".$ext;
 	$a= $_POST['full_name'];
 	$b= $_POST['username'];
 	$c= $_POST['password'];
 	$c=sha1($c);
 	$d=	$_POST['gender'];
 	$e= $_POST['address'];
 	$f= $_POST['contact'];
 	$g= $_POST['city'];

 	$query = "INSERT INTO rekword (full_name,username,password,gender,address,contact,city,image_name)VALUES('$a','$b','$c','$d','$e','$f','$g','$new_name')";
 	$result = mysqli_query($con,$query);
 	move_uploaded_file($tmp_name,"user_photo/".$new_name);
 	header("location:login.php");

 


 }else{
 	    $_SESSION['msg']="file is large";
 	    header("location:signup.php"); 

}


    }else{
     
       $_SESSION['msg']="this file not uplode";
       header("location:signup.php");
     }

?>
