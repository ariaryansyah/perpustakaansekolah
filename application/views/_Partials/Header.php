<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url() ?>index.php/HalamanUtama/index" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>M</b>L</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>my</b>Library</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url('assets/dist/img/avatar5.png') ?>" class="user-image" alt="User Image">
            <span class="hidden-xs">Admin</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/dist/img/avatar5.png') ?>" alt="User profile picture">

                <h3 class="profile-username text-center">Admin</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <a href="<?php echo base_url(); ?>index.php/HalamanUtama/login" class="btn btn-primary btn-block"><b>Log Out</b></a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- Menu Body -->
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>