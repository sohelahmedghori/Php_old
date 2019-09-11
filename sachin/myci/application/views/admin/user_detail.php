


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
  <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Admin Panel</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admindashboard'); ?>">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admindashboard/view_users'); ?>">View Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admindashboard/logout'); ?>">Logout</a>
      </li>
      
      
    </ul>
  </div> 
</nav>



<div class="container mt-4">
  <div class="row">
      <div class="col-md-6 offset-md-3">
        <?php
        $data = $result->row_array();
        ?>
      <h2>View User Detail</h2>
        <table class="table table-hover table-dark table-bordered">
          <tr>
            <td>Full Name</td>
            <td><?php echo $data['full_name'] ?></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><?php echo $data['username'] ?></td>
          </tr>
          <tr>
            <td>Contact</td>
            <td><?php echo $data['contact'] ?></td>
          </tr>
          <tr>
            <td>City</td>
            <td><?php echo $data['city'] ?></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><?php echo $data['gender'] ?></td>
          </tr>

        </table>
      </div>
    
  </div>
</div>
</body>
</html>