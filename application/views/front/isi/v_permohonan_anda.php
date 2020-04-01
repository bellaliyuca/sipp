<?=$header?>

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- SECTIONS
    ================================================== -->

    <section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-12 text-center">
                    <div class="service-heading">
                        <h1>Data Permohonan Anda</h1>
                    </div>
                </div>
            </div>
            
            <form method="POST" action="<?php echo base_url()?>front/cari_permohonan">
               <table border="0">
                <tr>
                    <td> <label> Cari Permohonan Disini </label></td>
                    <td>&nbsp;</td>
                    <td> <input type="text" class="form-control" name="cari" width="500px"></td>
                    <td>&nbsp;</td>
                    <td> <button type="submit" ><i class="fa fa-search-plus"> </i> Cari</button></td>
                </tr>
            </table>
            </form>

            <div class="table-responsive">
            <center>

            <table id="tableaja" class="table table-bordered table-striped table-hover"  >
            <thead>
                <tr>
                    <th> No </th>
                    <th width="15%"> Status </th>
                    <th> Tanggal Upload </th>
                    <th> Jenis Surat</th>
                    <th> Foto Anda </th>
                    <th> File Surat </th>
                    <th> Scan KTP / Paspor </th>
                    <th> Scan KTM </th>
                    <th> File Proposal </th>
                    <th> File Struktur Organisasi </th>
                    <th> Akta Notaris </th>
                    <th> Ket.Tidak Sengketa </th>
                    <th> Domisili Ormas</th>
                    <th> Susunan Pengurus</th>
                    <th> Program Kerja</th>
                    <th> Ket. Kementrian</th>
                    <th> Izin Tinggal</th>
                    <th> Tanda Lapor</th>
                    
                </tr>
            </thead>

           
          <tbody>

                <?php if(is_array($data_permohonan)){ ?>
                    <?php $no = 1;?>

                <?php foreach($data_permohonan as $dt): ?>
                <tr>
                    <td> <?php echo $no; ?></td>
                    <td> 
                        <?php if($dt->status=="Selesai") { ?>
                        <span style="color: red"><?=$dt->status;?></span>
                        <br> <small> <b> <u>

                        <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                       <form action = "<?php echo base_url()?>front/cetak_surat_wna" method="POST" target="_BLANK"> 
                            <input type="hidden" name="nik_pemohon" value="<?=$dt->nik_pemohon?>">
                            <input type="hidden" name="id_surat" value="<?=$dt->id_surat_pengantar?>">
                             <button type="submit" style="border: 0px; color: blue; text-decoration: none; margin-top: 6px"> Download Hasil </button>
                         </u> 
                         </b> 
                         </form>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <form action = "<?php echo base_url()?>front/cetak_surat_ormas" method="POST" target="_BLANK"> 
                            <input type="hidden" name="nik_pemohon" value="<?=$dt->nik_pemohon?>">
                            <input type="hidden" name="id_surat" value="<?=$dt->id_surat_pengantar?>">
                             <button type="submit" style="border: 0px; color: blue; text-decoration: none; margin-top: 6px"> Download Hasil </button>
                         </u> 
                         </b> 
                         </form>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                         <form action = "<?php echo base_url()?>front/cetak_surat_izin" method="POST" target="_BLANK"> 
                            <input type="hidden" name="nik_pemohon" value="<?=$dt->nik_pemohon?>">
                            <input type="hidden" name="id_surat" value="<?=$dt->id_surat_pengantar?>">
                             <button type="submit" style="border: 0px; color: blue; text-decoration: none; margin-top: 6px"> Download Hasil </button>
                         </u> 
                         </b> 
                         </form>
                        <?php } ?>

                       
                        </small>   
                        <?php } else { ?>
                        <span style="color: red"><?=$dt->status;?></span>

                        <?php } ?>
                    </td>

                    
                  
                    <td width="20%"> <?php echo $dt->tgl_upload; ?></td>
                    <td> <?php echo $dt->jenis_surat; ?></td>

                     <td> 

                        <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->foto ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Lihat Foto</a>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->foto ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Foto</a>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                        <a href="<?php echo base_url().'/file/syarat_izin/'.$dt->foto ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Foto</a>
                        <?php } ?>

                    </td>
                     <td> 
                        <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->file_surat ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Lihat Surat</a>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->file_surat ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Surat</a>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                        <a href="<?php echo base_url().'/file/syarat_izin/'.$dt->file_surat ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Surat</a>
                        <?php } ?>
                    </td>
                    <td> 
                       <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->file_ktp ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Lihat Paspor</a>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->file_ktp ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat KTP</a>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                        <a href="<?php echo base_url().'/file/syarat_izin/'.$dt->file_ktp ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat KTP</a>
                        <?php } ?>
                    </td>

                      <td> 

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


                        <?php } ?>

                    </td>

                      <td> 

                        <?php if ($dt->file_ktm == '') { ?>
                            -
                        <?php } else { ?>


                        <?php if ($dt->jenis_surat == 'Lapor WNA'){?>
                        <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->file_proposal ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Lihat Proposal</a>
                        <?php } else if ($dt->jenis_surat == 'Keberadaan Ormas') { ?>
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->file_proposal ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Proposal</a>
                        <?php } else if ($dt->jenis_surat == 'Izin Riset') { ?>
                        <a href="<?php echo base_url().'/file/syarat_izin/'.$dt->file_proposal ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Proposal</a>
                        <?php } ?>

                        <?php } ?>
                    </td>

                     <td> 

                        <?php if ($dt->file_struktur == '') { ?>
                            -
                        <?php } else { ?>
                        
                        <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->file_struktur ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Struktur</a>

                        <?php } ?>
                    </td>

                     <td> 

                        <?php if ($dt->akta_notaris == '') { ?>
                        -

                        <?php } else { ?>

                         <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->akta_notaris ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Akta</a>


                        <?php } ?>

                    </td>

                     <td> 

                        <?php if ($dt->sengketa == '') { ?>
                        -

                        <?php } else { ?>

                         <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->sengketa ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Lihat Keterangan</a>


                        <?php } ?>

                    </td>


                     <td> 

                        <?php if ($dt->domisili_ormas == '') { ?>
                        -

                        <?php } else { ?>

                         <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->domisili_ormas ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Domisili Ormas</a>


                        <?php } ?>

                    </td>


                    <td> 

                        <?php if ($dt->susunan_pengurus == '') { ?>
                        -

                        <?php } else { ?>

                         <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->susunan_pengurus ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Domisili Ormas</a>


                        <?php } ?>

                    </td>


                         <td> 

                        <?php if ($dt->program_kerja == '') { ?>
                        -

                        <?php } else { ?>

                         <a href="<?php echo base_url().'/file/syarat_ormas/'.$dt->program_kerja ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Program Kerja</a>


                        <?php } ?>

                    </td>

                    <td> 

                        <?php if ($dt->ket_kementrian == '') { ?>
                        -

                        <?php } else { ?>

                         <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->ket_kementrian ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Ket. Kementrian</a>


                        <?php } ?>

                    </td>

                    <td> 

                        <?php if ($dt->izin_tinggal == '') { ?>
                        -

                        <?php } else { ?>

                         <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->izin_tinggal ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp;  Izin Tinggal</a>


                        <?php } ?>

                    </td>


                    <td> 

                        <?php if ($dt->tanda_lapor == '') { ?>
                        -

                        <?php } else { ?>

                         <a href="<?php echo base_url().'/file/syarat_wna/'.$dt->tanda_lapor ?>" target="_BLANK"> <i class="fa fa-file"> </i> &nbsp; Tanda Lapor</a>


                        <?php } ?>

                    </td>


                </tr>
                <?php $no++; ?>
                <?php endforeach;?>

                <?php }else { ?>
                    <td colspan="10" align="center"><strong>Belum Ada Permohonan</strong></td>
                <?php } ?>

            </tbody> 
            </table>
            <?php echo $pagination; ?>

            </center>
            </div>
            

            </div>   
    

        </div>

    </section>



   

 <?=$footer;?>