<!-- Menu -->
<?=$header;?>
<!-- End Menu -->

<?php if ($this->session->flashdata('ver')){ ?>
        <script>
            swal({
                title: "Info",
                text: "Verifikasi dibatalkan",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "info"
            });
        </script>

      <?php }?>

        <!-- Isi Konten Disini -->
        <div class="right_col" role="main">
        
          <h3> Data Permohonan  <small>(Status : Menunggu) </small> </h3>
          <hr>
 <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
         <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Status</th>
                <th>Jenis Surat</th>
                <th>NIK Pemohon</th>
                <th>Tanggal Upload</th>
                <th>Foto Diri</th>
                <th>Scan KTP</th>
                <th>Scan KTM</th>
                <th>File Proposal</th>
                <th>File Surat</th>
                <th>Akta Notaris</th>
                <th>Ket Tidak Sengketa</th>
                <th>Domisili Ormas</th>
                <th>Pengurus</th>
                <th>Progja</th>
                <th>Ket Kementrian</th>
                <th>Izin Tinggal</th>
                <th>Tanda Lapor</th>
              </tr>
            </thead>
            <?php if(is_array($data_permohonan)){ ?>
             <?php $no = 1;?>
             <?php foreach($data_permohonan as $dt) : ?>
             <tbody>
              <tr>
              <td class="center"> <?=$no?></td>
              <td class="center"> <?=$dt->status?></td>

              <td class="center"> <?=$dt->jenis_surat?></td>
              <td class="center"> <?=$dt->nik_pemohon?></td>
             
              <td class="center"> <?php $tgl_upload = $dt->tgl_upload;
                echo tgl_indo($tgl_upload);
              ?></td>
               <td class="center">
                        <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->foto ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Lihat Foto</a>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->foto ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Foto</a>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                        <a href="<?php echo base_url().'/file/syarat_izin/'.$dt->foto ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Foto</a>
                        <?php } ?>
              </td>
              <td class="center">
              	        <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->file_ktp ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Lihat KTP</a>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->file_ktp ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat KTP</a>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                        <a href="<?php echo base_url().'/file/syarat_izin/'.$dt->file_ktp ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat KTP</a>
                        <?php } ?>
              </td>
              <td class="center"> 
              <?php if ($dt->file_ktm == '') { ?>
                        -

                        <?php } else { ?>

                        <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->file_ktm ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Lihat KTM</a>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->file_ktm ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat KTM</a>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                        <a href="<?php echo base_url().'/file/syarat_izin/'.$dt->file_ktm ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat KTM</a>
                        <?php } ?>


                        <?php } ?></td>
              <td class="center"> 
                <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->file_proposal ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Lihat Proposal</a>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->file_proposal ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Proposal</a>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                        <a href="<?php echo base_url().'/file/syarat_izin/'.$dt->file_proposal ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Proposal</a>
                        <?php } ?>
                    </td>
              <td class="center"> 
              	   <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->file_surat ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Lihat Surat</a>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->file_surat ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Syarat Ormas</a>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                        <a href="<?php echo base_url().'/file/syarat_izin/'.$dt->file_surat ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Syarat Izin</a>
                        <?php } ?>
             </td>

             <td class="center"> 
                     <?php if ($dt->akta_notaris == '') { ?>
                        -
                        <?php } else { ?>                    
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->akta_notaris ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Akta</a>

                        <?php } ?>
                    </td>

                    <td class="center"> 
                     <?php if ($dt->sengketa == '') { ?>
                        -
                        <?php } else { ?>                    
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->sengketa ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Tidak Sengketa</a>

                        <?php } ?>
                    </td>

                    <td class="center"> 
                     <?php if ($dt->domisili_ormas == '') { ?>
                        -
                        <?php } else { ?>                    
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->domisili_ormas ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Domisili</a>

                        <?php } ?>
                    </td>

                   <td class="center"> 
                     <?php if ($dt->susunan_pengurus == '') { ?>
                        -
                        <?php } else { ?>                    
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->susunan_pengurus ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Pengurus</a>

                        <?php } ?>
                    </td>


                   <td class="center"> 
                     <?php if ($dt->program_kerja == '') { ?>
                        -
                        <?php } else { ?>                    
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->program_kerja ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Progja</a>

                        <?php } ?>
                    </td>

                   <td class="center"> 
                     <?php if ($dt->ket_kementrian == '') { ?>
                        -
                        <?php } else { ?>                    
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->ket_kementrian ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Kementrian</a>

                        <?php } ?>
                    </td>

                    <td class="center"> 
                     <?php if ($dt->izin_tinggal == '') { ?>
                        -
                        <?php } else { ?>                    
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->izin_tinggal ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Izin</a>

                        <?php } ?>
                    </td>

                     <td class="center"> 
                     <?php if ($dt->tanda_lapor == '') { ?>
                        -
                        <?php } else { ?>                    
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->tanda_lapor ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Tanda Lapor</a>

                        <?php } ?>
                    </td>
              </tr>
             <?php $no++; ?>
             <?php endforeach; ?>
             <?php } ?>
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
