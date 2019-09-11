<?php
// print_r($_POST);
include("db.php");
$name = $_FILES['image']['name'];
$size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];
 
$arr = explode(".",$name);
$ext = end($arr);

if($ext=="jpg"|| $ext=="jpeg"|| $ext=="png" ||$ext=="gif")
{
  if($size<=(1024*1024*1))
  {
    
    $a = $_POST['fullname'];
    $b = $_POST['email'];
    $c = $_POST['pass'];
    $newname = time().rand(10000,100000).".".$ext;
    $e = $_POST['address'];
    $f = $_POST['gender'];
    $g = $_POST['city'];

    $query = "INSERT INTO signup(fullname,email,password,imagename,address,gender,city)VALUES('$a','$b','$c','$newname','$e','$f','$g')";
    move_uploaded_file($tmp_name, "upload/".$newname);
    mysqli_query($con,$query);
    // echo "hello";die;
    header("location:signin.php");


    





  }
  else
  {

   $_SESSION['msg'] = "FILE IS TOO LARGE";
   header("location:signup.php");

  }





}
else{
   $_SESSION['msg']= "FILE EXTENSION IS WRONG";
   header("location:signup.php");

}


?>