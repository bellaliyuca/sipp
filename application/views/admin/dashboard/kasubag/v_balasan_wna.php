<!-- Menu -->
<?=$header;?>
<!-- End Menu -->

<?php if ($this->session->flashdata('izin')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Berhasil Memberi Nomor Surat",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

<?php }?>


<?php if ($this->session->flashdata('tanggal')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Berhasil Memberi Tanggal Surat",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

<?php }?>



<?php if ($this->session->flashdata('email')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Email Berhasil Dikirim",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

<?php }?>

<?php if ($this->session->flashdata('gagal')){ ?>
        <script>
            swal({
                title: "Gagal",
                text: "Email Gagal Dikirim",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

<?php }?>


        <!-- Isi Konten Disini -->
        <div class="right_col" role="main">
        
            <h3>Data Surat Balasan WNA </h3>
          <hr>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
         <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Cetak Surat</th>
                <th>No Surat Balasan</th>
                <th>Tanggal Surat Permohonan</th>
                <th>Kirim Notif Email</th>
                <th>Lihat Surat Sementara</th>
                <th>Membaca</th>
                <th>Tembusan 1</th>
                <th>Tembusan 2</th>
                <th>Tembusan 3</th>
                <th>Tembusan 4</th>
                <th>Tembusan 5</th>
                <th>Tembusan 6</th>
              </tr>
            </thead>

             <?php if(is_array($data_balasan_wna)){ ?>
             <?php $no = 1;?>
             <?php foreach($data_balasan_wna as $dt) : ?>

            <tbody>
              <tr>
              <td> <?=$no?></td>
              <td> 
                  
              <?php if ($dt->no_surat_balasan == '' or $dt->tanggal_surat == '') { ?>
                Isi No / Tanggal Surat Terlebih Dahulu
              <?php } else { ?>
              <form action="<?php echo base_url()?>admin/cetak_balasan_wna" method="POST">
              <input type="hidden" name="id_wna" value="<?=$dt->id_wna?>">
              <input type="hidden" name="nik" value="<?=$dt->nik_pemohon?>">
              <button class="btn btn-sm btn-success" type="submit"> <i class="fa fa-print"> </i> </button>
             </form>
              <?php } ?>

              </td>
            
              <td> 
                  <?php if ($dt->no_surat_balasan == '') { ?>
                  <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_no<?php echo $dt->id_balasan;?>"> <i class="fa fa-edit"> </i> Beri Nomor Surat</a>
                  <?php } else { ?>
                    <?=$dt->no_surat_balasan?> <br>
                    <span class="label label-primary" > <a data-toggle="modal" data-target="#modal_no<?php echo $dt->id_balasan;?>" style="color: white">Ubah Nomor</a> </span>

                  <?php } ?>
              </td>

            <td> 
                <?php if ($dt->tanggal_surat == '') { ?>
                   <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tanggal<?php echo $dt->id_balasan;?>"> <i class="fa fa-calendar"> </i> Input Tanggal</a>
                  <?php } else { ?>
                    <?=tgl_indo($dt->tanggal_surat)?> <br>
                    <span class="label label-primary" > <a data-toggle="modal" data-target="#modal_tanggal<?php echo $dt->id_balasan;?>" style="color: white"> Ubah Tanggal</a> </span>
                  <?php } ?></td>

                <td> 
                <?php if ($dt->kirim_email == 'Sudah') { ?>
                  <span class="label label-success" style="color:white"> <i class="fa fa-check-square"> &nbsp; Sudah </i></span>
                <?php } else { ?>
                  <span class="label label-danger"  style="color:white">  <i class="fa fa-close"> &nbsp; Belum </i></span>
                <?php }?> 
              </td>

             <td> 
                <?php if ($dt->no_surat_balasan == '' && $dt->tanggal_surat == '') { ?>
                <form action="<?php echo base_url()?>admin/lihat_balasan_wna" method="POST">
                <input type="hidden" name="id_wna" value="<?=$dt->id_wna?>">
                <input type="hidden" name="nik" value="<?=$dt->nik_pemohon?>">
                <button class="btn btn-sm btn-success" type="submit"> <i class="fa fa-search-plus"> </i> </button>
                <?php } else { ?>
                  -
                <?php } ?>

              </form>
              </td>

              <td> <?=$dt->sumber_surat?></td>
              <td> <?=$dt->tembusan_1?></td>
              <td> <?=$dt->tembusan_2?></td>
              <td> <?=$dt->tembusan_3?></td>
              <td> <?=$dt->tembusan_4?></td>
              <td> <?=$dt->tembusan_5?></td>
              <td> <?=$dt->tembusan_6?></td>

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


<!-- Modal Nomor Surat -->

 <?php if(is_array($data_balasan_wna)){ ?>
 <?php foreach($data_balasan_wna as $dt) : ?>
      
        
        <div class="modal fade" id="modal_no<?php echo $dt->id_balasan;?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog  modal-md modal-dialog-centered " role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nomor Surat</h4>
                </div>

                <form action ="<?php echo base_url()?>admin/update_no_wna" method="POST">
                <!-- <input type="hidden" value="<?=$dt->id_surat_pengantar?>" name="id_surat"> -->
                <div class="modal-body  pr-4 pl-4">
                <input type="hidden" name="id_surat" value="<?=$dt->id_balasan?>">  
                <label>Nomor Surat :</label>
                <input type="text" name="no_surat" class="form-control" value="569/.../VII.01/2020">  
                <br>
                <div class="text-right">
                <button type="submit" class="btn btn-sm btn-primary"> Simpan Nomor </button>
                </div>
                       
                </div>
                
                <br>
                </div>
                </div>
                </div>
              </div>
            </form>
  <?php endforeach;?>
  <?php } ?>


 <!-- Modal Nomor Surat -->

 <?php if(is_array($data_balasan_wna)){ ?>
 <?php foreach($data_balasan_wna as $dt) : ?>
      
        
        <div class="modal fade" id="modal_tanggal<?php echo $dt->id_balasan;?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog  modal-md modal-dialog-centered " role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tanggal Surat</h4>
                </div>

                <form action ="<?php echo base_url()?>admin/update_tgl_wna" method="POST">
                <!-- <input type="hidden" value="<?=$dt->id_surat_pengantar?>" name="id_surat"> -->
                <div class="modal-body  pr-4 pl-4">
                <input type="hidden" name="id_surat" value="<?=$dt->id_balasan?>">  
                <label>Tanggal Surat :</label>
                <input type="date" name="tanggal" class="form-control" value="<?=$dt->tanggal_surat?>">  
                <br>
                <div class="text-right">
                <button type="submit" class="btn btn-sm btn-primary"> Simpan Tanggal </button>
                </div>
                       
                </div>
                
                <br>
                </div>
                </div>
                </div>
              </div>
            </form>
  <?php endforeach;?>
  <?php } ?>

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
 