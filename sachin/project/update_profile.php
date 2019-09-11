<?php 
// print_r($_POST);
include ("db.php");
$id = $_SESSION['id'];
if ($_FILE['image']['name']=="")

{
   $a = $_POST['full_name'];
   $b = $_POST['address'];
   $c = $_POST['gender'];
   $d = $_POST['city'];
   $e = $_POST['contact'];
   $query = "UPDATE project SET full_name='$a',address='$b', gender ='$c',city = '$d',contact='$e'	WHERE id = $id ";
   mysqli_query($con,$query);
   header("location:my_profile.php");
}
else
	{
		$name = $_FILE['image']['name'];
		$size =$_FILE['image']['size'];
		$tmp_name= $_FILE['image']['tmp_name'];
		$arr= explode(".",$name);
		$ext = end($arr);
		if ($ext=="jpg" || $ext == "jpeg" || $ext == "gif" ||$ext =="png")
    {  
	    if($size<=(1024*1024*1))
	    {
          $naw_name = time ().rand(10000,100000).".".$ext;
          $a = $_POST['full_name'];
          $b = $_POST['address'];
          $c = $_POST['gender'];
          $d = $_POST['city'];
          $e = $_POST['contact'];
          $query = "UPDATE project SET full_name='$a',address='$b', gender='$c',city='$d',contact='$e',image_name='$new_name' WHERE id =$id";
          move_uploaded_file($tmp_name,"user_image/".$new_name);
          mysqli_query($con,$query);
          header("location:my_profile.php");
        }
	      else
	        {
              $_SESSION['msg']="File is Too Large";
			 header("location:edit_profile.php");
		    }


    }
    else
    {
      $_SESSION['msg']="File Type is not allowed";
		header("location:edit_profile.php");
	}
}
?>




