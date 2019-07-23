<section class="content">
	 <div class="row">
	 	<div class="col-xs-12">
	 		<div class="box">
	 			<div class="box-header">
	 				 <h3 class="box-title">Data Kelas</h3>
	 				
	 			</div>

	 			<div class="box-body">
	 				 <table id="example1" class="table table-bordered table-striped">
	 				 	 <thead>
			              <tr>
			                <th>No</th>
			                <th>Kelas</th>
			                <th>Action</th>
			              </tr>
           				 </thead>
           				 <tbody>
           				 	 <?php
				              $no = 1;
				              foreach ($data_tabel as $tampilkan): ?>
				                <tr>
				                  <td><?php echo $no; ?></td>
				                  <td width="150">
				                    <?php echo $tampilkan->kelas ?>
				                  </td>
				                  <td>
				                    <div class="btn-group">
				                      <input type="submit" value="Perbaiki" class="btn btn-danger">
				                      <input type="submit" value="Hapus" class="btn btn-primary">
				                    </div>
				                    </td><?php $no++;
				                  endforeach; ?>
           				 </tbody> 

           				 <tfoot>
           				 	 <tr>
			                <th>No</th>
			                <th>Kelas</th>
			                <th>Action</th>

			              </tr>
           				 </tfoot>
	 				 </table>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</section>