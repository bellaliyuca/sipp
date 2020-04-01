<?=$header?>

<?php if ($this->session->flashdata('daftar')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Akun anda berhasil dibuat, Silahkan Login",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

      <?php }?>

<?php if ($this->session->flashdata('nik')){ ?>
        <script>
            swal({
                title: "Gagal",
                text: "Akun Sudah Pernah Dibuat",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

      <?php }?>



  <!-- SECTIONS
    ================================================== -->

    <section class="section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 col-lg-12">
                    <h5> <center> Form Pendaftaran </center></h5>
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        <center> Daftarkan  <span class="font-weight-normal">Diri Anda Sekarang</span> </center>
                    </h2>

                    <br>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-12">
                   <!-- form message -->
                   
                    <!-- end message -->
                    <!-- Contacts Form -->
                    <form class="contact_form" action="<?php echo base_url()?>login/daftar" method="POST">
                        <div class="row">

                           <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        NIK Anda
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" onkeypress="return hanyaAngka(event)" name="nik" id="name" required="" placeholder="Ketik NIK Anda Disini" type="text" size="16" maxlength="16">
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
                                        <input class="form-control" name="nama" id="name" required="" placeholder="Ketik Nama Lengkap Anda Disini" type="text">
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
                                        <input class="form-control" name="alamat" id="subject" required="" placeholder="Ketik Alamat Anda Disini" type="text" >
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

                                    <div class="input-group ">
                                      <select class="form-control" name="jk">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        </select>
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
                                        <input type="date" class="form-control" name="tgl_lahir" id="subject" required="">
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
                                        <input type="text" class="form-control" name="kwg" id="subject" required="" value="Indonesia">
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
                                        <input type="text" class="form-control" name="pekerjaan" id="subject" required="" placeholder="Ketik Pekerjaan Anda Disini">
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
                                        <input type="email" class="form-control" name="email" id="subject" required="" placeholder="Ketik Email Anda Disini">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                              <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Password Anda
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="password" id="subject" required="" placeholder="Ketik Password Anda Disini">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                        </div>

                       
                        <!-- End Input -->

                        <div class="">
                            <p align="right" >
                           <button type="submit" class="btn btn-primary btn-circled" > Daftar Sekarang </button>
                           </p>
                        </div>
                    </form>
                    <!-- End Contacts Form -->
                </div>

              
            </div>
        </div>
    </section>




 <?=$footer;?>