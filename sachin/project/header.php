<?php 
include("db.php");
$query  = "SELECT *  FROM  category";
$result = mysqli_query($con,$query);

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js">
  </script>


  <style type="text/css">
    .list-group-item{
      border-color: #fe4c50 !important;
      color: #fe4c50;
    }
    .list-group-item-action:hover{
      background-color: #fe4c50 !important;
      color: #FFF !important;
    }
    .my-box{
      margin:40px;
      height: 200px;
      background-size: 100% 100%;
    }
    .bg-mycolor{
      background-image: url("image/bg.jpg");
      background-size: 100%;
    }
  </style>
</head>
<body>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
      	<a href="#"class="navbar-brand">my shopping</a>

      	<button type="button" class="navbar-toggler btn" data-toggle="collapse" data-target="#menu">
      		<span class="data-toggler-icon"></span>
      	</button>
        <div id="menu" class="collapse navbar-collapse">
      	<ul class="navbar-nav">
      		<li class="nav-item">
      			<a href="index.php" class="nav-link">home</a>
      		</li>
      		<li class="nav-item">
      <a href="my_cart.php" class="nav-link">My Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
    </li>
      	</ul>
      	</div>
      	


        <form class="form-inline ">
      		<input type="text" class="form-control" name="s_name" placeholder="search">
      		<button class="btn btn-dark" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
            </button>
      	</form>






      	<ul class="navbar-nav">
    

    <?php 
    if(isset($_SESSION['is_user_logged_in']))
    { ?>

      <li class="nav-item">
        <a href="my_account.php" class="nav-link">My Account <i class="fa fa-user" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a href="my_profile.php" class="nav-link">My Profile <i class="fa fa-user" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a href="admin/logout.php" class="nav-link">Logout <i class="fa fa-user" aria-hidden="true"></i></a>
      </li> 

    <?php }
    else
    { ?>

      <li class="nav-item">
        <a href="login.php" class="nav-link">Login <i class="fa fa-user" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a href="signup.php" class="nav-link">Signup <i class="fa fa-user" aria-hidden="true"></i></a>
      </li> 


    <?php 
    }
    ?>

      </nav>
  <div class="jumbotron text-light" style="background-image: url('image/j.jpg');background-size: 100% 100%">
  	<h1 class="text-light">The Stepping Stone</h1>
  <p class="text-light">Web Development Training Insititute in Indore</p>
  </div>
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-md-3 offset-md-0">
      <div class="list-group">
        <?php
        while($data=mysqli_fetch_assoc($result))
        { ?>
          <a class="list-group-item list-group-item-action" href="index.php?category=<?php echo $data['cate_name'];?>"><?php echo $data['cate_name']; ?></a>

        <?php
        }
        ?>
        
      </div>
    </div>