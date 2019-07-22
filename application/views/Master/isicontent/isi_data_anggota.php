<section class="content">
	 <div class="row">
	 	<div class="col-xs-12">
	 		<div class="box">
	 			<div class="box-header">
	 				 <h3 class="box-title">Data Anggota</h3>
	 				
	 			</div>

	 			<div class="box-body">
	 				 <table id="example1" class="table table-bordered table-striped">
	 				 	 <thead>
			              <tr>
			                <th>No</th>
			                <th>ID </th>
			                <th>Nama</th>
			                <th>Kelas</th>
			                <th>Jenis Kelamin</th>
			                <th>Status</th>
			                <th>Action </th>
			              </tr>
           				 </thead>
           				 <tbody>
           				 	 <?php
				              $no = 1;
				              foreach ($data_tabel as $tampilkan): ?>
				                <tr>
				                  <td><?php echo $no; ?></td>
				                  <td><?php echo $tampilkan->id_anggota; ?></td>
				                  <td width="150">
				                    <?php echo $tampilkan->nama ?>
				                  </td>
				                  <td>
				                    <?php echo $tampilkan->id_kelas ?>
				                  </td>
				                  <td>
				                    <?php echo $tampilkan->jenis_kelamin ?>
				                  </td>
				                   <td>
				                    <?php echo $tampilkan->status?>
				                  </td>
				                  <td>
				                    <div class="btn-group">
				                      <input type="submit" value="Perbaiki" class="btn btn-danger">
				                      <input type="submit" value="Hapus" class="btn btn-primary">
				                      <input type="submit" value="segarkan" class="btn btn-success">
				                    </div>
				                    </td><?php $no++;
				                  endforeach; ?>
           				 </tbody> 

           				 <tfoot>
           				 	<th>No</th>
			                <th>ID </th>
			                <th>Nama</th>
			                <th>Kelas</th>
			                <th>Jenis Kelamin</th>
			                <th>Status</th>
			                <th>Action </th>
           				 </tfoot>
	 				 </table>
	 			</div>
	 		</div>
	 	</div>
	 </div>

</section>