<?Php 

$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
      	<a href="#"class="navbar-brand">my shopping</a>

      	<button type="button" class="navbar-toggler btn" data-toggle="collapse" data-target="#menu">
      		<span class="navbar-toggler-icon"></span>
      	</button>
        <div id="menu" class="collapse navbar-collapse">
      	<ul class="navbar-nav">
      		<li class="nav-item">
      			<a href="index.php" class="nav-link">home</a>
      		</li>
      		<li class="nav-item">
      			<a href="#" class="nav-link">about</a>
      		</li>
      		<li class="nav-item">
      			<a href="#" class="nav-link">contact</a>
      		</li>
      		<li class="nav-item">
      			<a href="#" class="nav-link">help</a>
      		</li>
      	</ul>
      	</div>
      	<form class="form-inline ">
      		<input type="text" class="form-control" placeholder="search">
      		<button class="btn btn-dark" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
            </button>
      	</form>
      	<ul class="navbar-nav">
      		<li class="nav-item"><a href="#" class="nav-link">my-cart<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
</a></li>
<?php if (isset($_SESSION['is_user_loged_in'])) {
   
 ?>
      		<li class="nav-item"><a href="#" class="nav-link">my account<i class="fa fa-user" aria-hidden="true"></i>
</a></li>
      		<li class="nav-item"><a href="#" class="nav-link">setting<i class="fa fa-user" aria-hidden="true"></i>
</a></li>
 <li class="nav-item"><a href="logout.php" class="nav-link">logout<i class="fa fa-user" aria-hidden="true"></i>
</a></li>

    <?php 
         }
         else
         {

      ?>
      <li class="nav-item">
        <a href="login.php" class="nav-link">Login <i class="fa fa-user" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a href="signup.php" class="nav-link">Signup <i class="fa fa-user" aria-hidden="true"></i></a>
      </li> 


    <?php 
    }
    ?>
      	</ul>

      </nav>
  <div class="jumbotron text-light" style="background-image: url('image/j.jpg');background-size: 100% 100%">
  	<h2>Cmping Gear</h2>
  	<P>sjdoip dpoijsdi cdjpvpd sdalpo </P>
  </div>
<div class="container mt-4">
    <DIV class="row">
      <div class="col-md-3">
        <div class="list-group">
          <?php
        while($data=mysqli_fetch_assoc($result))
        { ?>
          <a class="list-group-item list-group-item-action" href="#"><?php echo $data['cat_name'];?></a>

        <?php
        }
        ?>
        </div>
      </div>