<!DOCTYPE html>
<html>
 <head>
  <title>admin pnel</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
  <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js'); ?>"></script>


</head>
 <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <h4 class="navbar-brand">Nokia</h4>
    <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#yadav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="yadav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a  class="nav-link "href="<?php echo site_url('admindashboard'); ?>">Dashbord</a></li>

        <li class="nav-item">
          <a  class="nav-link "href="<?php echo site_url('admindashboard/view_user'); ?>">View User</a></li>
        <li class="nav-item">
          <a  class="nav-link "href="<?php echo site_url('admindashboard/logout'); ?>">logout</a></li>

        </li></ul></div></nav>




        <div class="container">
          <div class="row">
                  <h2>View All Users</h2>
      <div class="col-md-10 offset-md-1">
        <table class="table table-hover table-dark table-bordered">
          <tr>
            <th>S.No.</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Contact</th>
            <th>Detail</th>
            <th>Current Status</th>
            <th>Change</th>
          </tr>
          <?php 
          foreach($result->result_array() as $data)
            { 
              if($data['status']==1)
              {
                $x ="active";

              } 
              else
               {
                $x= "deactive";
               } ?>
          <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['full_name']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['contact']; ?></td>
            <td><a href="<?php echo site_url('admindashboard/user_detail/'.$data['id']); ?>"class="btn btn-sm btn-info">Detail</a></td>
            <td><?php echo $x; ?></td>
            <td><a href="<?php echo site_url('admindashboard/change_status/'.$data['id'].'/'.$data['status']) ?>" class="btn btn-warning btn-sm">Change</a></td>


           <?php }
         ?>




          </tr>





          </div></div>



 </body>
</html>