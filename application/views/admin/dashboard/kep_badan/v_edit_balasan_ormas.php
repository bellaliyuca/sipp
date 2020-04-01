<!-- Menu -->
<?=$header;?>
<!-- End Menu -->



<?php if ($this->session->flashdata('ormas')){ ?>
        <script>
            swal({
                title: "Berhasil",
                text: "Berhasil Ubah Data Balasan Ormas",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

      <?php }?>


        <!-- Isi Konten Disini -->
        <div class="right_col" role="main">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Surat Balasan Ormas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                  
                    
                    <form class="form-horizontal form-label-left" action="<?php echo base_url()?>admin/update_balasan_ormas"  method="POST">


                      <input type="hidden" name="id_surat" value="<?=$id_surat?>">
                      <input type="hidden" name="nik" value="<?=$nik?>">


                    <?php if(is_array($edit_balasan_ormas)){ ?>
                    <?php foreach($edit_balasan_ormas as $dt) { 
                      $tgl_surat = $dt->tanggal_surat;
                      $berdasarkan = $dt->sumber_surat;
                      $tgl_wajib_lapor = $dt->tgl_wajib_lapor;
                     
                     } ?> 
                    <?php }?>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal Surat : </label>
                        <div class="col-md-4 col-sm-10 col-xs-12">
                          <input type="date" class="form-control" name="tgl_surat" value="<?=$tgl_surat?>" required oninvalid="this.setCustomValidity('Isi Terlebih Dahulu')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                    
                  
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Berdasarkan : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="berdasarkan" value="<?=$berdasarkan?>" placeholder="Berdasarkan Surat Pengantar" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')" disabled>
                        </div>
                      </div>

                   <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal Wajib Lapor : </label>
                        <div class="col-md-4 col-sm-10 col-xs-12">
                          <input type="date" class="form-control" name="tgl_wajib_lapor" value="<?=$tgl_wajib_lapor?>"  required oninvalid="this.setCustomValidity('Isi Terlebih Dahulu')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                      
                  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success"> <i class="fa fa-edit"> </i> &nbsp; Ubah Surat</button>
                    </form>
                          <button type="button" class="btn btn-danger" onclick="window.history.go(-1); return false;"> <i class="fa fa-arrow-left"> </i> &nbsp; Kembali</button> 
                        </div>
                      </div>

                  </div>
                </div>
              </div>



        <!-- End Konten  -->


<!-- Footer -->
<?=$footer;?>
<!-- End Footer-->


 