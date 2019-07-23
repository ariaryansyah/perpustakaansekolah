<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/dist/img/avatar5.png') ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Users</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Aktif</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Master</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>Master Anggota</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <!-- untuk hreff saya ambil dari config/router -->
          <li><a href="<?php echo base_url() ?>index.php/ct_data_anggota/index"><i class="fa fa-book"></i> Data Anggota</a></li>
          <li><a href="<?php echo base_url() ?>index.php/ct_data_kelas/index"><i class="fa fa-building"></i> Data Kelas</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>Master Buku</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url() ?>index.php/ct_buku/index"><i class="fa fa-circle-o"></i> Data Buku</a></li>
          <li><a href="<?php echo base_url() ?>index.php/ct_data_kelas/index"><i class="fa fa-circle-o"></i> Data Detail Buku</a></li>
        </ul>
      </li>



      <li class="header">Transaksi</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>Transkasi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url() ?>"><i class="fa fa-book"></i> Data Peminjaman</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>Report</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('#') ?>"><i class="fa fa-circle-o"></i> Report pengrmbalian</a></li>
        </ul>
      </li>


      <li class="header">Admin/Petugas</li>
      <li>
        <a href="<?php echo base_url() ?>index.php/ct_data_petugas/index">
          <i class="fa fa-user-plus"></i> <span>Petugas</span>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>