<!-- Menu -->
<?=$header;?>
<!-- End Menu -->



        <!-- Isi Konten Disini -->
        <div class="right_col" role="main">
        
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pengaturan Akun <small>Silahkan Atur Akun Anda Disini</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                  <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


         <?php if(is_array($det_akun)){ ?>
         <?php foreach($det_akun as $dt) {
         	$nama = $dt->nama_lengkap;
         	$nip = $dt->nip;
         	$jabatan = $dt->jabatan;
         	$hakakses = $dt->hak_akses;
          } ?>
         <?php } ?>

                    <table class="table">
                      <thead>
                        <tr>
                          <th width="30%">Nama Lengkap</th>
                          <th><?=$nama?></th>

                          <tr>
                          <th width="30%">NIP</th>
                          <th><?=$nip?></th>
                      	  </tr>

                      	   <tr>
                          <th width="30%">Jabatan</th>
                          <th><?=$jabatan?></th>
                      	  </tr>

                      	
                      	   <tr>
                          <th width="30%">Hak Akses</th>
                          <th><?=$hakakses?></th>
                      	  </tr>

                        </tr>
                      </thead>
                   
                    </table>

                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_akun<?php echo $dt->id_admin;?>"> <i class="fa fa-edit"> </i> Ubah Data </button>

                  </div>
                </div>
              </div>


        </div>
        <!-- End Konten  -->

<!-- Modal -->

 <?php if(is_array($det_akun)){ ?>
 <?php foreach($det_akun as $dt) : ?>
      
        
        <div class="modal fade" id="modal_akun<?php echo $dt->id_admin;?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog  modal-md modal-dialog-centered " role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data Akun</h4>
                <br><p style="color:red">Jika merubah akun maka akan logout secara otomatis, Kemudian anda dapat login kembali</p>
                </div>

                <div class="modal-body">
                
               <form action ="<?php echo base_url()?>admin/ubah_akun" method="POST">
               <input type="hidden" name="id_admin" value="<?=$dt->id_admin?>" class="form-control">

               	<div class="form-group">
               	<label> Nama Lengkap </label>
               <input type="text" name="nama" value="<?=$dt->nama_lengkap?>" class="form-control">
                </div>

                <div class="form-group">
               	<label> NIP </label>
               <input type="text" name="nip" value="<?=$dt->nip?>" class="form-control">
                </div>

                <div class="form-group">
               	<label> Jabatan </label>
               <input type="text" name="jabatan" value="<?=$dt->jabatan?>" class="form-control">
                </div>


               <div class="form-group">
               <label> Hak Akses </label>
               <input type="text" name="hakakses" value="<?=$dt->hak_akses?>" class="form-control">
               </div>

               <div class="form-group">
               <label> Password &nbsp; <small style="color: red"> Kosongkan jika tidak ingin mengubah password</small> </label>
               <input type="text" name="password" value="" class="form-control">
               </div>
                
                <br>
               <button class="btn btn-md btn-success" type="submit"> <i class="fa fa-user"> </i> &nbsp; Ubah Akun </button>
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


 