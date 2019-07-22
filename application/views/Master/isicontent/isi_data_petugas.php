<section class="content">
	 <div class="row">
	 	<div class="col-xs-12">
	 		<div class="box">
	 			<div class="box-header">
	 				 <h2><font face="times new roman">Data Petugas</font></h2>
	 				 <div align="right">
				           <input type="submit" value="Tambahkan" class="btn btn-primary">
	 				 </div>
	 			</div>
	 			
	 			<div class="box-body">
	 				 <table id="example1" class="table table-bordered table-striped">
	 				 	 <thead>
			              <tr>
			                <th>No</th>
			                <th>ID Petugas</th>
			                <th>Nama</th>
			                <th>Foto</th>
			                <th>Jenis Kelamin</th>
			                <th>Alamat</th>
			                <th>Password</th>
			                <th>No HP</th>
			                <th>Action </th>
			              </tr>
           				 </thead>
           				 <tbody>
           				 	 <?php
				              $no = 1;
				              foreach ($data_tabel as $tampilkan): ?>
				                <tr>
				                  <td><?php echo $no; ?></td>
				                  <td><?php echo $tampilkan->id_petugas; ?></td>
				                  <td width="150">
				                    <?php echo $tampilkan->nama ?>
				                  </td>
				                  <td>
				                    <img src="<?php echo base_url('assets/dist/img/1.jpg') ?>" width="60" height="60">
				                  </td>
				                  <td>
				                    <?php echo $tampilkan->jenis_kelamin ?>
				                  </td>
				                  <td>
				                    <?php echo $tampilkan->alamat ?>
				                  </td>
				                   <td>
				                    <?php echo $tampilkan->password ?>
				                  </td>
				                  <td>
				                    <?php echo $tampilkan->hp ?>
				                  </td>
				                  <td>
				                    <div class="btn-group">
				                      <input type="submit" value="Edit" class="btn btn-primary">

				                      <a href="<?php echo base_url('index.php/ct_data_petugas/hapus/'.$tampilkan->id_petugas); ?>" >
				                      <input type="submit" value="Hapus" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?');">
				                     </a>

				                      <a href="<?php echo base_url() ?>index.php/ct_data_petugas/index">
				                      <input href="" type="submit" value="segarkan" class="btn btn-success">
				                  	  </a>
				                    </div>
				                    </td><?php $no++;
				                  endforeach; ?>
           				 </tbody> 

           				 <tfoot>
           				 	<th>No</th>
			                <th>ID Petugas</th>
			                <th>Nama</th>
			                <th>Foto</th>
			                <th>Jenis Kelamin</th>
			                <th>Alamat</th>
			                <th>Password</th>
			                <th>No HP</th>
			                <th>Action </th>
           				 </tfoot>
	 				 </table>
	 			</div>
	 		</div>
	 	</div>
	 </div>

</section>