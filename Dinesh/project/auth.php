<?Php
include("db.php");
$u=$_POST['username'];
$p=$_POST['password'];

$p=sha1($p);

   $query="select * from user where username='$u'";

   $result=mysqli_query($con,$query);

   if (mysqli_num_rows($result)==1) {
   	 $data=mysqli_fetch_assoc($result);
   	 if ($data['password']==$p) 
   	 {
   	 	 $_SESSION['id']=$data['id'];
   	 	 $_SESSION['name']=$data['full_name'];
   	 	 $_SESSION['is_user_loged_in']=true;
   	 	 header("location:myacc.php");
   	 }
   	 else
   	 {
   	 	$_SESSION['msg']="this password is incorrect";
   	 header("location:login.php");
   	 }
   }
   else
   {
   	 $_SESSION['msg']="this user name and password is incorrect";
   	 header("location:login.php");
     }
?>