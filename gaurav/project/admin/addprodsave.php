<?php
 // print_r($_POST);

$con = mysqli_connect("localhost","root","","onlineshop");

// print_r($_FILES);

$name = $_FILES['image']['name'];
$size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];

$arr = explode("." , $name);
$ext = end($arr);

if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")
{
    if ($size <=(1024*1024*1))
    {
    	$new_name = time().rand(10000,100000).".".$ext;
    	$a = $_POST['P_name'];
    	$b = $_POST['P_price'];
    	$c = $_POST['P_discount'];
    	$d = $_POST['P_details'];
        $e = $_POST['p_cate'];

 $query = "insert into addproduct(p_name,p_price,p_discount,p_details,image_name,p_category)
             values('$a','$b','$c','$d','$new_name','$e')";

     	move_uploaded_file($tmp_name, "upload/".$new_name);

     	mysqli_query($con ,$query);
     	header("location:addproduct.php");

    } 
    else
    {
    	$_SESSION['msg'] ="image size is too large";
    	header("location:addproduct.php"); 
    }
    
}
else
{
   $SESSION['msg'] = "file format is different";
   header("location:addproduct.php");
}
?>