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
          <div class="row"></div></div>



 </body>
</html>