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
			                <th>judul</th>
			                <th>kategori</th>
			                <th>tahun terbit</th>
			                <th>stok</th>
			                <th>Action </th>
			              </tr>
           				 </thead>
           				 <tbody>
           				 	 <?php
				              $no = 1;
				              foreach ($data_tabel as $tampilkan): ?>
				                <tr>
				                  <td><?php echo $no; ?></td>
				                  <td><?php echo $tampilkan->judul; ?></td>
				                  <td width="150">
				                    <?php echo $tampilkan->id_kategori ?>
				                  </td>
				                  
				                
				                   <td>
				                    <?php echo $tampilkan->thn_terbit ?>
				                  </td>
				                  <td>
				                    <?php echo $tampilkan->stok ?>
				                  </td>
				                  <td>
				                    <div class="btn-group">
				                      <input type="submit" value="Edit" class="btn btn-primary">

				                      <a href="<?php echo base_url('index.php/ct_data_petugas/hapus/'.$tampilkan->id_buku); ?>" >
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
			                <th>judul</th>
			                <th>kategori</th>
			                <th>tahun terbit</th>
			                <th>stok</th>
			                <th>Action </th>
           				 </tfoot>
	 				 </table>
	 			</div>
	 		</div>
	 	</div>
	 </div>

</section>