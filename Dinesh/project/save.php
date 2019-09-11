<?php 
   
   include("db.php");
   $name = $_FILES['image']['name'];
   $tmp_name=$_FILES['image']['tmp_name'];
   $size=$_FILES['image']['size'];

  $arr=explode(".", $name);

  $ext=end($arr);

  if ($ext=="jpg"|| $ext=="jpeg" || $ext=="gif" || $ext=="png") 
  {
  	if ($size<=(1024*1024*1)) 
  	{
 $new_name=time().rand(10000,100000).".".$ext;
 $a=$_POST['full_name'];
 $b=$_POST['username'];
 $c=$_POST['pass'];
 $c=sha1($c);
 $d=$_POST['gender'];
 $e=$_POST['add'];
 $f=$_POST['contact'];
 $g=$_POST['city'];

 $query="INSERT INTO user (full_name,username,password,address,city,gender,contact,pro_pic) values ('$a','$b','$c','$e','$g','$d','$f','$new_name')";

 move_uploaded_file($tmp_name,"user_image/".$new_name);

 mysqli_query($con,$query);

 header("location:login.php");
  	}
  	else
  	{
  		$_SESSION['msg']="file is too large";
  		header("location:signup.php");
  	}
  }
  else{
  	$_SESSION['msg']="file type is not allowed ";
  	header("location:signup.php");
  }

 
  ?>