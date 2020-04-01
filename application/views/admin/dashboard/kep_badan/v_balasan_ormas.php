<!-- Menu -->
<?=$header;?>
<!-- End Menu -->

<?php if ($this->session->flashdata('balasan')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Surat Balasan Berhasil Dibuat",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

      <?php }?>
        <!-- Isi Konten Disini -->
        <div class="right_col" role="main">
        
            <h3>Data Surat Balasan Ormas </h3>
          <hr>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
         <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Lihat Surat</th>
                <th>No Surat Balasan</th>
                <th>Tanggal Surat</th>
                <th>Berdasarkan</th>
                <th>Tanggal Wajib Lapor</th>
                <th>NIK Pemohon</th>
               
              </tr>
            </thead>

             <?php if(is_array($data_balasan_ormas)){ ?>
             <?php $no = 1;?>
             <?php foreach($data_balasan_ormas as $dt) : ?>

            <tbody>
              <tr>
              <td class="center"> <?=$no?></td>
              <td class="center"> 
                <form action="<?php echo base_url()?>admin/lihat_balasan_ormas" method="POST">
                  <input type="hidden" name="id_ormas" value="<?=$dt->id_ormas?>">
                  <input type="hidden" name="nik" value="<?=$dt->nik_pemohon?>">
                <button class="btn btn-sm btn-success" type="submit"> <i class="fa fa-search-plus"> </i> </button>
              </form>
              </td>
              <td class="center"> 
                  <?php if ($dt->no_surat_balasan == '') { ?>
                      Belum diberi nomor
                  <?php } else { ?>
                    <?=$dt->no_surat_balasan?>
                  <?php } ?>
              </td>
              <td class="center"> 
                <?php if ($dt->tanggal_surat == '') { ?>
                      Belum diberi tanggal
                  <?php } else { ?>
                    <?=$dt->tanggal_surat?>
                  <?php } ?></td>
              <td class="center"> <?=$dt->sumber_surat?></td>
              <td class="center"> <?=$dt->tgl_wajib_lapor?></td>
              <td class="center"> <?=$dt->nik_pemohon?></td>
             
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
 