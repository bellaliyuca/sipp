<!-- Menu -->
<?=$header;?>
<!-- End Menu -->

<?php if ($this->session->flashdata('user')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Pengguna Berhasil Ditambahkan",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

<?php }?>

<?php if ($this->session->flashdata('ubah')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Pengguna Berhasil Diubah",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

<?php }?>

<?php if ($this->session->flashdata('hapus')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Pengguna Berhasil Dihapus",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

<?php }?>


<!-- Isi Konten Disini -->
<div class="right_col" role="main">
        
<h3>Manajemen Pengguna </h3>
<hr>

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_tambah"> <i class="fa fa-user"> </i> Tambah Data </button>
<br>
<br>
<div class="x_title">

  <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
        <th>No</th>
        <th>Ubah</th>
        <th>Hapus</th>
        <th>Nama Lengkap</th>
        <th>NIP</th>
        <th>Jabatan</th>
        <th>Hak Akses</th>
        </tr>
      </thead>


      <tbody>
        <?php if(is_array($data_admin)){ ?>
        <?php $no = 1;?>
        <?php foreach($data_admin as $dt) : ?>
        <tr>
          <td><?=$no;?></td>
          <td> <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $dt->id_admin;?>"><i class="fa fa-edit"> </i></button></td>
          <td>
          <?php if($dt->hak_akses == "Kasubag Umum dan Kepegawaian") { ?> 
            -
          <?php } else { ?> 
            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $dt->id_admin;?>"><i class="fa fa-trash"> </i></button>
          <?php } ?> 
          </td>
          <td><?=$dt->nama_lengkap?></td>
          <td> <?=$dt->nip?></td>
          <td> <?=$dt->jabatan?></td>
          <td> <?=$dt->hak_akses?></td>
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

<!-- Modal Tambah Pengguna -->


        <div class="modal fade bs-example-modal-lg" id = "modal_tambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Pengguna</h4>
          </div>

          <form action ="<?php echo base_url()?>admin/simpan_pengguna" method="POST">
          <!-- <input type="hidden" value="<?=$dt->id_surat_pengantar?>" name="id_surat"> -->
          <div class="modal-body  pr-4 pl-4">
          <div class="col-md-12">
          <div class="col-md-6">
          <label>Nama Lengkap :</label>
          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Pengguna">  
          <br>
          </div>
          <div class="col-md-6">

          <label>NIP :</label>
          <input type="text" name="nip" class="form-control" placeholder="NIP Pengguna" onkeypress="return hanyaAngka(event)" size="18" maxlength="18">  
          <br>
          </div>

          <div class="col-md-6">

          <label>Jabatan :</label>
          <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">  
          <br>
          </div>


          <div class="col-md-6">
          <label>Password :</label>
          <input type="text" name="password" class="form-control" placeholder="Password">  
          <br>
          </div>
          
          <div class="col-md-6">
          <label>Hak Akses :</label>
          <select class="form-control" name="hakakses" id="hakakses">
          <option value="Kewaspadaan Nasional">Kewaspadaan Nasional</option>
          <option value="Ketahanan Sosial">Ketahanan Sosial</option>
          <option value="Kasubag Umum dan Kepegawaian">Kasubag Umum dan Kepegawaian</option>
          <option value="Kepala Badan">Kepala Badan</option>
          </select>
          <br>
          </div>

          <div class="row"> </div>

          <div class="col-md-6">
          <button type="submit" class="btn btn-md btn-primary"> Simpan Pengguna </button>
           <br>
          <br>
          </div>


          </div>
          
                 
          </div>
          
          <br>
          </div>
          </div>
          </div>
        </div>
      </form>


 <!-- Modal Edit Pengguna -->

 <?php if(is_array($data_admin)){ ?>
 <?php foreach($data_admin as $dt) : ?>
      
        
       

        <div class="modal fade bs-example-modal-lg" id = "modal_edit<?php echo $dt->id_admin;?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Pengguna</h4>
          </div>

          <form action ="<?php echo base_url()?>admin/update_pengguna" method="POST">
          <input type="hidden" value="<?=$dt->id_admin?>" name="id_admin">
          <div class="modal-body  pr-4 pl-4">
          <div class="col-md-12">
          <div class="col-md-6">
          <label>Nama Lengkap :</label>
          <input type="text" name="nama" class="form-control" value="<?=$dt->nama_lengkap?>">  
          <br>
          </div>
          <div class="col-md-6">

          <label>NIP :</label>
          <input type="text" name="nip" class="form-control" value="<?=$dt->nip?>" onkeypress="return hanyaAngka(event)" size="18" maxlength="18">  
          <br>
          </div>

          <div class="col-md-6">

          <label>Jabatan :</label>
          <input type="text" name="jabatan" class="form-control" value="<?=$dt->jabatan?>">  
          <br>
          </div>

          <div class="col-md-6">
          <label>Password :</label>  <small style="color: red">*Kosongkan jika tidak merubah password </small>
          <input type="text" name="password" class="form-control" placeholder="Password">  
          <br>
          </div>
          
          <div class="col-md-6">
          <label>Hak Akses :</label>
          <select class="form-control" name="hakakses" id="hakakses">

          <?php if ($dt->hak_akses == 'Kewaspadaan Nasional') { ?>
          <option value="Kewaspadaan Nasional" selected>Kewaspadaan Nasional</option>
          <option value="Ketahanan Sosial">Ketahanan Sosial</option>
          <option value="Kasubag Umum dan Kepegawaian">Kasubag Umum dan Kepegawaian</option>
          <option value="Kepala Badan">Kepala Badan</option>

          <?php }  else if ( $dt->hak_akses == 'Ketahanan Sosial') {?>
          <option value="Kewaspadaan Nasional">Kewaspadaan Nasional</option>
          <option value="Ketahanan Sosial" selected>Ketahanan Sosial</option>
          <option value="Kasubag Umum dan Kepegawaian">Kasubag Umum dan Kepegawaian</option>
          <option value="Kepala Badan">Kepala Badan</option>

          <?php } else if ( $dt->hak_akses == 'Kasubag Umum dan Kepegawaian') {?>
          <option value="Kewaspadaan Nasional">Kewaspadaan Nasional</option>
          <option value="Ketahanan Sosial">Ketahanan Sosial</option>
          <option value="Kasubag Umum dan Kepegawaian" selected>Kasubag Umum dan Kepegawaian</option>
          <option value="Kepala Badan">Kepala Badan</option>

          <?php } else if ($dt->hak_akses == 'Kepala Badan') {?>
          <option value="Kewaspadaan Nasional">Kewaspadaan Nasional</option>
          <option value="Ketahanan Sosial">Ketahanan Sosial</option>
          <option value="Kasubag Umum dan Kepegawaian">Kasubag Umum dan Kepegawaian</option>
          <option value="Kepala Badan" selected>Kepala Badan</option>

          <?php } ?>
          
          </select>
          <br>
          </div>

          <div class="row"> </div>
          <div class="col-md-6">
          <button type="submit" class="btn btn-md btn-primary"> Simpan Pengguna </button>
           <br>
          <br>
          </div>


          </div>
          
                 
          </div>
          
          <br>
          </div>
         
        </div>
        </div>
      </form>

  <?php endforeach;?>
  <?php } ?>

  <!-- Modal Hapus Pengguna -->

 <?php if(is_array($data_admin)){ ?>
 <?php foreach($data_admin as $dt) : ?>
      
        <div class="modal fade bs-example-modal-sm" id = "modal_hapus<?php echo $dt->id_admin;?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel2">Hapus Pengguna</h4>
        </div>
        <form action ="<?php echo base_url()?>admin/hapus_pengguna" method="POST">
        <div class="modal-body">
        <p> Yakin akan menghapus pengguna? </p>
        <input type="hidden" name="id_admin" value="<?=$dt->id_admin?>">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
          <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
        </form>
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
<script src="<?php echo base_url()?>assets2/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/pdfmake/build/vfs_fonts.js"></script>

 