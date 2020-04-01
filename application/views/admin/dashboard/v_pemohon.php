<!-- Menu -->
<?=$header;?>
<!-- End Menu -->

        <!-- Isi Konten Disini -->
        <div class="right_col" role="main">
        
            <h3>Data Pemohon </h3>
          <hr>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
         <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>NIK Pemohon</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Kewarganegaraan</th>
                <th>Email</th>
                <th>Hapus</th>
              </tr>
            </thead>

             <?php if(is_array($data_pemohon)){ ?>
             <?php $no = 1;?>
             <?php foreach($data_pemohon as $dt) : ?>

            <tbody>
              <tr>
              <td class="center"> <?=$no?></td>
              <td class="center"> <?=$dt->nik_pemohon?></td>
              <td class="center"> <?=$dt->nama_lengkap?></td>
              <td class="center"> <?=$dt->alamat?></td>
              <td class="center"> <?=$dt->jenis_kelamin?></td>
              <td class="center"> <?=$dt->tanggal_lahir?></td>
              <td class="center"> <?=$dt->kewarganegaraan?></td>
              <td class="center"> <?=$dt->email?></td>
              <td class="center"> <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"> </i> </button></td>

              </tr>
             <?php $no++; ?>
             <?php endforeach; ?>
             <?php } ?>

            </tbody>
          </table>

          </div>
    </div>
    </div>
  </div>


        <!-- End Konten  -->


<!-- Footer -->
<?=$footer;?>
<!-- End Footer-->

<script src="<?php echo base_url()?>assets2/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
 