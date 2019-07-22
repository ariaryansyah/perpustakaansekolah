<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
			<section class="content">
				<div class="row">
					<div class="col-md-10">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title"><b>Table Tambahkan Pembeli</b></h3>
								<div class="pull-right">
									<a href="<?php echo base_url('HalamanUtama') ?>"><b> lihat Hasil</b><i class="fa fa-arrow-circle-right"></i> </a>
								</div>
							</div>

							<!-- alert berhasil -->
							<?php if ($this->session->flashdata('success')): ?>
								<div class="alert alert-success" role="alert">
									<?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php endif; ?>


							


							<form method="post"  action=" <?php echo base_url('HalamanUtama/tambahbaru')?> ">
								<div class="box-body">
									<div class="form-group">
										<label for="nama_pembeli">Nama Lengkap</label>
										<input type="text" class="form-control"  name="nama_pembeli" placeholder="Masukan Nama" value="<?= set_value('nama_pembeli');  ?>">

										<div class="invalid-feedback">
											<?php echo form_error('nama_pembeli','<small class="text-danger">','</small>') ?>
										</div>
									</div>
									<div class="form-group">
										<div class="form-group">
											<label>Jenis Kelmain</label>
											<!-- <input type="text" name="jk" placeholder="Masukan jenis kelamin" class="form-control"> -->
											<select name="jk" id="" class="form-control">
												<option value="Laki-Laki">Laki-Laki</option>
												<option value="Perempuan">Perempuan</option>

											</select>
										</div>
										<div class="form-group">
											<label>Alamat Lengkap</label>
											<textarea class="form-control" <?php echo form_error('alamat') ?'is-invalid':'' ?> rows="3" placeholder="Enter ..." name="alamat"></textarea>

											<div class="invalid-feedback">
												<?php echo form_error('alamat') ?>
											</div>
										</div>
									</div>
									<!-- /.box-body -->

									<div class="box-footer">
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
			</div>
			<?php $this->load->view('_partials/Footer'); ?>
		</div>
		<!-- footer -->

		<?php $this->load->view("_partials/Js") ?>
	</body>
	</html>
