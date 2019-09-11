<?Php
   
     include("../db.php");

     $u=$_POST['username'];
     $p=$_POST['pass'];

     $query="SELECT * FROM admin WHERE username='$u'";
     $result=mysqli_query($con,$query);

     if (mysqli_num_rows($result)==1) 
     {
          $data=mysqli_fetch_assoc($result);
          if ($data['password']==$p) 
          {
          	$_SESSION['is_admin_logged_in']=true;
          	header("location:dashboard.php");
          }
          else
          {
          	$_SESSION['msg']="This password is incorrect";
          	header("location:index.php");
          }
     }

     else{
     	$_SESSION['msg']="username and password incorrect";
     	header("location:index.php");
     }

?>