<!DOCTYPE html>
 <html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css') ?>">
    <script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>


  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <span class="navbar-brand">Online</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yadav">
        <span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="yadav">
          <ul class="navbar-nav">
            <li class="nav-item">

              <a class="nav-link" href="<?php echo site_url('project/home') ?>">home</a>
            </li>
          </ul>
          <?php
          if($this->session->userdata("is_user_logged_in"))
          {
           ?>
          
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('project/about') ?>">about</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('project/profile'); ?>">profile</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('userproject/logout'); ?>">logout</a>
            </li>
          </ul>
        <?php }else
        { ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('project/login') ?>">login</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('project/signup'); ?>">signup</a>
            </li>
          </ul><?php } ?>
        </div>

    </nav>






    <div class="container-fluid">
      <div class="jumbotron"><h4>india is a number one country</h4></div></div>





<?php
$this->load->view($pagename);
 ?>




      <div class="container-fluid bg-dark">
        <p class="text-center text-light">
          Thank for you visit</p></div>

  </body>
 </html>