<?=$header?>

<?php if ($this->session->flashdata('pesan1')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: "Upload File KTP Terlebih Dahulu",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

      <?php }?>

<?php if ($this->session->flashdata('pesan2')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: "Upload Struktur Organisasi Terlebih Dahulu",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

      <?php }?>

<?php if ($this->session->flashdata('pesan3')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: "Upload Foto Terlebih Dahulu",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

      <?php }?>

<?php if ($this->session->flashdata('pesan4')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: " Upload Surat Pengantar Terlebih Dahulu",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

<?php }?>

<?php if ($this->session->flashdata('pesan5')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: " Upload Akta Notaris Terlebih Dahulu",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

<?php }?>


<?php if ($this->session->flashdata('pesan6')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: "Upload Keterangan Tidak Sengketa Terlebih Dahulu",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

<?php }?>


<?php if ($this->session->flashdata('pesan7')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: "Upload Domisili Ormas Terlebih Dahulu",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

<?php }?>

<?php if ($this->session->flashdata('pesan8')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: " Upload Susunan Pengurus Terlebih Dahulu",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

<?php }?>

<?php if ($this->session->flashdata('pesan9')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: "Upload Program Kerja Terlebih Dahulu",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

<?php }?>



<?php if ($this->session->flashdata('pesan')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Berhasil Ajukan Permohonan",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

      <?php }?>


<section class="section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 col-lg-12">
                    <h5> <center> Silahkan Buat Permohonan </center></h5>
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        <center> Form Keterangan <span class="font-weight-normal"> Keberadaan Ormas</span> </center>
                    </h2>

                    <br>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-12">
                   <!-- form message -->
                   
                    <!-- end message -->
                    <!-- Contacts Form -->
                    <form class="contact_form" action="<?php echo base_url()?>front/simpan_ormas" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <input class="form-control" name="id_surat" type="hidden" value="<?=$kodeunik?>">
                            <input class="form-control" name="nik" type="hidden" value="<?=$nik?>">


                             <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Nama Organisasi       
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="organisasi" id="name" required oninvalid="this.setCustomValidity('Nama Organisasi tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Nama Organisasi Disini" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->



                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Alamat Organisasi       
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="alamat" id="name" required oninvalid="this.setCustomValidity('Alamat tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Alamat Disini" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                              <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Jabatan Anda di Ormas
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="jabatan" id="name" required oninvalid="this.setCustomValidity('Jabatan tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Jabatan Disini" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Tingkat Kepengurusan       
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="tingkat" id="name" required oninvalid="this.setCustomValidity('Tingkat Kepengurusan tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Tingkat Kepengurusan Disini" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Legalitas    
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="legalitas" id="name" required oninvalid="this.setCustomValidity('Legalitas tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Legalitas Disini" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-4 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Ketua
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="ketua" id="name" required oninvalid="this.setCustomValidity('Ketua tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Ketua Disini" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-4 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Sekretaris
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="sekretaris" id="name" required oninvalid="this.setCustomValidity('Sekretaris tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Sekretaris Disini" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->


                            <!-- Input -->
                            <div class="col-sm-4 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Bendahara
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="bendahara" id="name" required oninvalid="this.setCustomValidity('Bendahara tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Bendahara Disini" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                             <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Sumber Surat Pengantar        
                                         <span class="text-danger">*</span>
                                        <br>
                                        <small>Surat Dari Brantas Narkotika dan Maksiat nomor : 016/A-1/DPD.LAMPUNG/BNM.RI/I/2020 </small>
                                    </label>

                                    <div class="input-group">   
                                         <input class="form-control" name="sumber" id="name" required oninvalid="this.setCustomValidity('Perihal Surat tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Sumber Surat Pengantar" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                         
                             <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Scan KTP
                                        <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk JPEG</i></small>

                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="scan_ktp" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                              <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Foto Diri Anda
                                        <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk JPEG</i></small>

                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="foto" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                           

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Scan Struktur Organisasi   <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="struktur" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                            
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        File Surat Pengantar <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="s_pengantar" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->


                             <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Akta Pendirian dari Notaris <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="akta" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->


                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Pernyataan Tidak Dalam Sengketa Kepengurusan <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="sengketa" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->


                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Keterangan Domisili Sekretariat Ormas <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="domisili_ormas" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                             <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Susunan Pengurus <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="susunan_pengurus" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->


                               <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Program Kerja <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="program_kerja" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->


                        </div>
                       
                        <!-- End Input -->

                    <div class="">
                     <?php if($nik != '') {?>
                     <p align="right" >
                     <button type="submit" class="btn btn-primary btn-circled" name="submit"> Buat Permohonan </button>
                     </p>
                     <?php } else {?>
                     <p align="right" >
                     <button type="button" class="btn btn-primary btn-circled" disabled> Buat Permohonan </button>
                    </p>
                     <?php }?>


                        </div>
                    </form>
                    <!-- End Contacts Form -->
                </div>

              
            </div>
        </div>
    </section>

 <?=$footer;?>
