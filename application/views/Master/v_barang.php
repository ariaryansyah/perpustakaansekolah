 <section class="content">
  <div class="row">
    <div class="col-xs-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo $jumlahnya; ?> </h3>

          <p>Pembeli</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-xs-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>1000<sup style="font-size: 20px">pcs</sup></h3>

          <p>Barang Terjual</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-xs-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>44</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-xs-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

  <div class="row">
    <div class="col-xs-12">
       <div class="box">
        <div class="box-header">
          <h3 class="box-title">Barang</h3>
          <div class=" pull-right">

              <a href="<?php echo site_url('HalamanUtama/Tambahbaru') ?>"><i class="fa fa-plus-circle"></i> Tambah Baru</a>
          
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama </th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data_tabel as $tampilkan): ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td width="150">
                    <?php echo $tampilkan->nama_pembeli ?>
                  </td>
                  <td>
                    <?php echo $tampilkan->jk ?>
                  </td>
                  <td>
                    <?php echo $tampilkan->alamat ?>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary ">Pilih</button>
                      <button type="button" class="btn btn-primary  dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="<?php echo base_url('HalamanUtama/delete/'.$tampilkan->id); ?>" onclick="return confirm('Yakin Anda ingin Menghapus Data?');">Hapus</a>
                           
                        </li>
                        <li><a href="<?php echo base_url("HalamanUtama/Update/".$tampilkan->id) ?>">Ubah</a></li>

                      </ul>
                    </div>
                    </td><?php $no++;
                  endforeach; ?>

                </tr>
                 </tbody>
                 <tfoot>
                  <tr>
                   <th>No</th>
                   <th>Nama </th>
                   <th>Jenis Kelamin</th>
                   <th>Alamat</th>
                   <th>Aksi</th>
                 </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 

<script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>