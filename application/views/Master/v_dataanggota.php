<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <?php   $this->load->view("_partials/head.php") ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  <!-- header -->
    <?php $this->load->view("_partials/Header") ?>
  <!-- akhir hader -->

    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view("_partials/aside") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <?php $this->load->view("Master/isicontent/isi_data_anggota") ?>
      <?php $this->load->view('_partials/Footer'); ?>
      <?php $this->load->view("_partials/Js") ?>
    </div>
    <!-- akhir content wrapper -->
  </div>
  <!-- akhir wrapper -->

  <!-- footer -->
  </body>
</html>
