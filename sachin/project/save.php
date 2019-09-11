<?php

 // print_r($_POST);
$con = mysqli_connect("localhost", "root", "password", "myproject");
session_start();
// print_r($_POST);
// print_r($_FILES);
// die;
$name = $_FILES['image']['name'];
$size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];
$arr = explode(".",$name);
$ext = end($arr);

if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext=="png"  )
{ 
	if($size<=(1024*1024*1))
	{   
		$new_name = time().rand(10000,100000).".".$ext;
       $a = $_POST['full_name'];
       $b = $_POST['username'];
       $c = $_POST['password'];

       $c = sha1($c);
       $d = $_POST['gender'];
       $e = $_POST['address'];
       $f = $_POST['contact'];
       $g = $_POST['city'];

        $query="INSERT INTO project (full_name, user_name, password, gender, address, contact, city,image_name) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g','$new_name')";

        mysqli_query($con, $query);
        move_uploaded_file($tmp_name,"user_image/".$new_name);

         header("location:login.php");

	}
	else
	{
		$_SESSION['msg']="file is too large";
		header("location:signup.php");


	}

	

}
else
{ echo "no";
$_SESSION['msg']= "file type not allowed";
header("location:signup.php");
}













?>