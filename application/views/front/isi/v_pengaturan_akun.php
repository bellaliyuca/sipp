<?=$header?>

<?php if ($this->session->flashdata('ubah')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Akun anda berhasil Diubah",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

      <?php }?>




  <!-- SECTIONS
    ================================================== -->

    <section class="section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 col-lg-12">
                    <h5> <center> Pengaturan Akun </center></h5>
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        <center> Form  <span class="font-weight-normal">Pengaturan Akun</span> </center>
                    </h2>

                    <br>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-12">
                   <!-- form message -->
                   
                    <!-- end message -->
                    <!-- Contacts Form -->
                        <div class="row">

                 <?php if(is_array($det_akun)){ ?>
                 <?php foreach($det_akun as $dt) {
                    $nik = $dt->nik_pemohon;
                    $nama = $dt->nama_lengkap;
                    $alamat = $dt->alamat;
                    $jk = $dt->jenis_kelamin;
                    $tanggal = tgl_indo($dt->tanggal_lahir);
                    $pekerjaan = $dt->pekerjaan;
                    $kewarganegaraan = $dt->kewarganegaraan;
                    $email = $dt->email;
                  } ?>
                 <?php } ?>

                           <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        NIK Anda
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" onkeypress="return hanyaAngka(event)" name="nik" id="name" required="" value="<?=$nik?>" disabled>
                                </div>
                            </div>
                        </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Nama Anda       
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="nama" id="name" value="<?=$nama?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                         

                            <div class="w-100"></div>

                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Alamat Anda
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="alamat" id="subject" value="<?=$alamat?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Jenis Kelamin
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" name="alamat" id="subject" value="<?=$jk?>" disabled>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- End Input -->

                             <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Tanggal Lahir
                                        <span class="text-danger">*</span>
                                    </label>

                                      <div class="input-group">
                                        <input class="form-control" name="alamat" id="subject" value="<?=$tanggal?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Kewarganegaraan
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="kwg" id="subject" value="<?=$kewarganegaraan?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                                 <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Pekerjaan
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                     <input type="text" class="form-control" name="kwg" id="subject" value="<?=$pekerjaan?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->      

                             <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Email Anda
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="kwg" id="subject" value="<?=$email?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                    <form  action="<?php echo base_url()?>front/update_akun" method="POST">


                              <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Password Anda
                                        <span class="text-danger">*</span>
                                    </label>
                                        <input type="hidden" name="nik" value="<?=$nik?>">

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="password" id="subject" required="" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                        </div>

                       
                        <!-- End Input -->

                        <div class="">
                            <p align="right" >
                           <button type="submit" class="btn btn-primary btn-circled" > Ganti Password </button>
                           </p>
                        </div>
                    </form>
                    <!-- End Contacts Form -->
                </div>

              
            </div>
        </div>
    </section>




 <?=$footer;?>