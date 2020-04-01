<!-- Menu -->
<?=$header;?>
<!-- End Menu -->

        <!-- Isi Konten Disini -->
        <div class="right_col" role="main">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Surat Balasan Izin Riset</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                  
                    <form class="form-horizontal form-label-left" action="<?php echo base_url()?>admin/update_balasan_izin"  method="POST">


                      <input type="hidden" name="id_surat" value="<?=$id_surat?>">
                      <input type="hidden" name="nik" value="<?=$nik?>">
                     
                    <?php if(is_array($edit_balasan_izin)){ ?>
                    <?php foreach($edit_balasan_izin as $dt) { 
                      $membaca = $dt->sumber_surat;
                      $memperhatikan = $dt->memperhatikan;
                      $tembusan_1 = $dt->tembusan_1;
                      $cq_1 = $dt->cq_1;
                      $tembusan_2 = $dt->tembusan_2;
                      $cq_2 = $dt->cq_2;
                      $tembusan_3 = $dt->tembusan_3;
                      $cq_3 = $dt->cq_3;
                      $tembusan_4 = $dt->tembusan_4;
                      $cq_4 = $dt->cq_4;
                     } ?> 
                    <?php }?>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Membaca : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="membaca" value="<?=$membaca?>" placeholder="Sumber Surat" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Memperhatikan : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="memperhatikan" value="<?=$memperhatikan?>"  placeholder="Isi Proposal" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Tembusan 1 : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="tembusan_1" value="<?=$tembusan_1?>"  placeholder="Isi Tembusan 1" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Cq : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="cq_1" value="<?=$cq_1?>" placeholder="Isi Cq 1" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Tembusan 2 : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="tembusan_2" value="<?=$tembusan_2?>" placeholder="Isi Tembusan 2" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Cq 2: </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="cq_2" value="<?=$cq_2?>"  placeholder="Isi Cq 2" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Tembusan 3 : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="tembusan_3" value="<?=$tembusan_3?>"  placeholder="Isi Tembusan 3" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Cq : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="cq_3" value="<?=$cq_3?>" placeholder="Isi Cq 3" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Tembusan 4 : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="tembusan_4" value="<?=$tembusan_4?>" placeholder="Isi Tembusan 4" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Cq 4: </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="cq_4" value="<?=$cq_4?>"  placeholder="Isi Cq 4" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
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


 