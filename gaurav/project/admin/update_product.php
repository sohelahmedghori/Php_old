<?php
include("db.php");
if($_FILES['image']['name']=="")
{
	$a = $_POST['P_name'];
	$b = $_POST['P_price'];
	$c = $_POST['P_discount'];
	$d = $_POST['P_details'];
	$e = $_POST['P_cate'];
	$x = $_POST['pid'];

	$query = "UPDATE addproduct SET p_name = '$a',p_price = '$b',p_discount = '$c',p_details = '$d',p_category = '$e' 	WHERE 	id =$x";
    mysqli_query($con,$query);
    header("location:view product.php");


}
else
{

 	$name = $_FILES['image']['name'];
 	$size = $_FILES['image']['size'];
 	$tmp_name = $_FILES['image']['tmp_name'];

 	$arr = explode(".",$name);
 	$ext = end($arr);
 	if($ext=="jpg" || $ext=="jpeg" ||$ext=="png" ||$ext=="gif" )
 	{

 		if($size <=(1024*1024*1))
 		{
 			$newname= time().rand(10000,100000).".".$ext;
 			$a = $_POST['P_name'];
	    	$b = $_POST['P_price'];
	    	$c = $_POST['P_discount'];
	    	$d = $_POST['P_details'];
	        $e = $_POST['p_cate'];
	        $x = $_POST['pid'];

	    $query ="UPDATE addproduct SET p_name='$a',p_price='$b',p_discount='$c',p_details ='$d',p_category ='$e',image_name = '$newname' WHERE id = $x"; 
	    mysqli_query($con,$query);
	    move_uploaded_file($tmp_name, "upload/".$newname);
	    header("location:view product.php");
	    }
	    else
	    {
	    	$_SESSION['msg']="This File is too large";
			header("location:edit_product.php?demo=".$x);
	    }   

 		
 	 }
  else{
     $_SESSION['msg']="This File type not allowed";
		header("location:edit_product.php?demo=".$x);
  }

	
}




?>