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
                    <th> Perihal </th>
                    <th> Keperluan </th>
                    <th> File Surat </th>
                    <th> Tanggal Upload </th>
                    <th> Jenis Surat</th>
                    
                </tr>
            </thead>

           
          <tbody>
         

                <?php if(is_array($data_pencarian)){ ?>
                    <?php $no = 1;?>

                <?php foreach($data_pencarian as $dt): ?>
                <tr>
                    <td> <?php echo $no; ?></td>
                    <td> <?php echo $dt->perihal; ?></td>
                    <td width="50%"> <?php echo $dt->keperluan; ?></td>
                    <td width="20%"> <?php echo $dt->file_surat; ?></td>
                    <td width="20%"> <?php echo $dt->tgl_upload; ?></td>
                    <td> <?php echo $dt->jenis_surat; ?></td>
                </tr>
                <?php $no++; ?>
                <?php endforeach;?>

                <?php }else { ?>
                    <td colspan="10" align="center"><strong>Belum Ada Permohonan</strong></td>
                <?php } ?>

            </tbody> 
            </table>

            </center>
            </div>
            

            </div>   
    

        </div>

    </section>



   

 <?=$footer;?>