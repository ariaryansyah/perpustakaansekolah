<div class="wrapper">
    <header class="main-header fixed">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>index.php/Home/tampil" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>a</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>s</b>s</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar ">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="user-image" alt="User Image">
                            <span class="hidden-xs">User</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                                <p>
                                    Ari Aryansyah - Pemilik TokoBaju
                                    <small>03 November 2001</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Pengikut</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Penjualan</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Teman</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url(); ?>index.php/HalamanUtama/login" class="btn btn-default btn-flat">Keluar</a>
                                </div>
                            </li>
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
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar bg-black">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url(); ?>assets/dist/img/aa.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Ari Aryansyah</p>
                    <a href="#"><i class="fa fa-circle text-success"></i>Aktif</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu utama</li>
                <li class=" menu-open">
                    <a href="<?php echo base_url('index.php/Home/tampil'); ?>">
                        <i class="fa fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-basket"></i>
                        <span>Pembelian</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/ct_Pembelian/showdatapembelian/Menampilkan "><i class="fa fa-circle-o"></i>Data Pembelian</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/ct_Pembelian/showdatapembelian/datanya "><i class="fa fa-circle-o"></i>Contoh Dari Ka anam Dengan JSON</a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa ion-ios-people"></i>
                        <span>Pelanggan</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url(); ?>index.php/ct_pelanggan/detail_pelanggan/tampil"><i class="fa fa-circle-o"></i>Detail Pelanggan</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/ct_pelanggan/detail_pelanggan/datanya"><i class="fa fa-circle-o"></i>Belajar ajax json</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/ct_laporanpembayaran/laporanpembayaran/tampil">
                        <i class="fa fa-edit"></i> <span>Laporan Pembayaran</span>
                    </a>
                </li>
                <li class="header">News</li>
                <li><a href="#"><i class="fa fa-circle-o text-blue"></i> <span>Diskon 20%</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

</div>