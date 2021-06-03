<?php
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

<title><?php echo $title;?></title>

 <?php include "../../includes/adminStyles.php"; ?>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a href="logout" class="dropdown-item dropdown-footer">Logout</a>
        
      </li>
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center" style="color: white; font-family: Comic Sans, cursive, sans-serif">
      <span class="brand-text font-weight-light">Claybrook Zoo</span><br>
      <span class="brand-text font-weight-light">Welcome <?php echo $_SESSION ['username']; ?></span>
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  
          <li class="nav-item">
            <a href="admin_home" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="manageCategories" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-paw"></i>
              <p>
                Manage All Animals
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <p>
                Mammals
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listOfMammals" class="nav-link">
                  <i class="fa fa-eye nav-icon"></i>
                  <p>View Mammals</p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
          <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <p>
                Reptiles and Amphibians
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listOfReptiles" class="nav-link">
                  <i class="fa fa-eye nav-icon"></i>
                  <p>View Reptiles</p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
          <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <p>
                Birds
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listOfBirds" class="nav-link">
                  <i class="fa fa-eye  nav-icon"></i>
                  <p>View Birds</p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
          <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <p>
                Fishes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listOfFishes" class="nav-link">
                  <i class="fa fa-eye  nav-icon"></i>
                  <p>View Fishes</p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
          </li>

          <?php if($_SESSION['sessionBackUserId'] == 1){
          echo 
          '<li class="nav-item has-treeview">
            <a href="manageRoles" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Manage Roles
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="listOfUsers" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Manage Users
              </p>
            </a>
          </li>';}?>
          <li class="nav-item">
            <a href="listOfSponsorships" class="nav-link">
              <i class="nav-icon fas fa-donate"></i>
              <p>
                Sponsors
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>
                Manage Tickets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manageCost" class="nav-link">
                  <i class="fa fa-plus-circle nav-icon"></i>
                  <p>Manage Cost</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manageBookings" class="nav-link">
                  <i class="fa fa-calendar-alt nav-icon"></i>
                  <p>Bookings</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <?php if($_SESSION['sessionBackUserId'] == 3){
          echo '<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center" style="color: white; font-family: Comic Sans, cursive, sans-serif">
      <span class="brand-text font-weight-light">Claybrook Zoo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="admin_home" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_home" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
                View Categories
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-paw"></i>
              <p>
                View All Animals
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
            <a href="zooM_page_mammals" class="nav-link">
              <p>
                View Mammals
              </p>
            </a>
            </li>
            </ul>
          <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
            <a href="zooM_page_reptiles" class="nav-link">
              <p>
                View Reptiles-Amphibians
              </p>
            </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
            <a href="zooM_page_birds" class="nav-link">
              <p>
                View Birds
              </p>
            </a>
          </li>
          </ul>
          <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
            <a href="zooM_page_fishes" class="nav-link">
              <p>
                View Fishes
              </p>
            </a>
          </li>
          </ul>
          </li>
          </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
          ';
        }
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $content;?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer text-center">
    <p class="copyright">Copyright &copy;Claybrook Zoo <script>document.write(new Date().getFullYear());</script>. All rights reserved.</p>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

 <?php include "../../includes/adminScript.php"; ?>
</body>
</html>
<?php } 
      else{
        ?>
<head>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body style="background-image:url(../../images/loginBg.jpg);background-position: center; background-repeat: no-repeat; background-size: cover; opacity:0.7;">
  <div class="container">
    <div id="loginbox" style="margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" >
    <div class="panel panel-info" >
      <div class="panel-heading">
        <div class="panel-title">Please enter correct credentials to login</div>
      </div>
      <div style="padding-top:30px" class="panel-body" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
          <form action="admin_home" method="POST" id="loginform" class="form-horizontal" role="form">
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="username" type="text" class="form-control" placeholder="Username" name="username" required autocomplete="username" autofocus style="color: darkgreen;">
            </div>
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password" style="color: darkgreen;">
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-success" name="login_btn">Login
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<?php } ?>
