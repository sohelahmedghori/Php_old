<?php
// print_r($_POST);
$con = mysqli_connect("localhost","root","","onlineshop");
session_start();
include("header.php");
$id = $_SESSION['id'];
if($_FILES['image']['name']=="")
{
  $a = $_POST['full_name'];
  $b = $_POST['gender'];
  $c = $_POST['add'];
  $d = $_POST['city'];

  $query = "UPDATE user SET full_name = '$a', gender = '$b',address = '$c', city = '$d' WHERE id = $id";

  mysqli_query($con,$query);
  header("location:myprofile.php");


}
else{

    $name = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $arr = explode(".",$name);
    $ext = end($arr);

    if($ext=="jpg" || $ext=="jpeg"|| $ext=="png" ||$ext=="gif")
    {
    	if($size=(1024*1024*1))
    	{

          $newname = time().rand(10000,100000).".".$ext;
           $a = $_POST['full_name'];
           $b = $_POST['gender'];
  		   $c = $_POST['add'];
           $d = $_POST['city'];

           $query= "UPDATE user SET full_name='$a',gender='$b', address='$c', city='d',userimage='$newname' WHERE id = $id";
           move_uploaded_file($tmp_name, "userimages/".$newname);
           mysqli_query($con,$query);
           header("location:myprofile.php");



    	}
    	else{
          $_SESSION['msg']= "file size is large";
          header("location:edit_profile.php");
            }

    }
    else{
       $SESSION['msg']="file extention not match";
       header("location:edit_profile.php");

    }

}



?>



