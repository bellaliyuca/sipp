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
                text: "Upload File Proposal Terlebih Dahulu",
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
                text: "Upload File KTM Terlebih Dahulu",
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
                    <h5> <center> Silahkan Buat Permohonan Izin Reset </center></h5>
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        <center> Form <span class="font-weight-normal">Izin Riset </span> </center>
                    </h2>

                    <br>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-12">
                   <!-- form message -->
                   
                    <!-- end message -->
                    <!-- Contacts Form -->
                    <form class="contact_form" action="<?php echo base_url()?>front/simpan_izin" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <input class="form-control" name="id_surat" type="hidden" value="<?=$kodeunik?>">
                            <input class="form-control" name="nik" type="hidden" value="<?=$nik?>">


                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        NPM Anda
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="npm" id="name" required oninvalid="this.setCustomValidity('NPM tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Ketik NPM Disini" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                             <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Tujuan       
                                        <span class="text-danger">*</span>
                                    </label>


                                    <div class="input-group">

                                     <select class="form-control" name="tujuan">
                                        <option value="" selected="true" disabled="">Pilih Tujuan</option>
                                        <option value="Mengadakan penelitian dalam rangka skripsi">Mengadakan penelitian dalam rangka skripsi</option>
                                        <option value="Mengadakan survey">Mengadakan survey</option>
                                        <option value="Meminta data pra-skripsi">Meminta data pra-skripsi</option>
                                        
                                     </select>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                             <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Lokasi Penelitian     
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">

                                        <select class="form-control" name="lokasi">
                                        <option value="" selected="true" disabled="">Pilih Lokasi Penelitian</option>
                                        <option value="Dinas Bina Marga dan Kontruksi">Dinas Bina Marga dan Kontruksi</option>
                                        <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                                        <option value="Dinas Kominfo">Dinas Kominfo</option>
                                        <option value="Dinas Kependudukan dan Pencatatan Sipil">Dinas Kependudukan dan Pencatatan Sipil</option>
                                        <option value="Rumah Sakit Umum">Rumah Sakit Umum</option>
                                        <option value="Rumah Sakit Jiwa">Rumah Sakit Jiwa</option>
                                        <option value="Badan Perencanaan Daerah">Badan Perencanaan Daerah</option>
                                        <option value="Dinas Perpustakaan dan Arsip Daerah">Dinas Perpustakaan dan Arsip Daerah</option>
                                        <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                                        <option value="Puskesmas">Puskesmas</option>
                                        
                                     </select>

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
                                        <small>Contoh : Surat permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020 </small>
                                    </label>

                                    <div class="input-group">   
                                         <input class="form-control" name="sumber" id="name" required oninvalid="this.setCustomValidity('Perihal Surat tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Sumber Surat Pengantar" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                             <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Judul Penelitian
                                    <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="judul" id="name" required oninvalid="this.setCustomValidity('Judul tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Ketik Judul Penelitian Disini" type="text">
                                    </div>
                                </div>
                            </div>
                         
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
                                        Scan KTM  <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk JPEG</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="scan_ktm" id="subject"  >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                              <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Foto Diri Anda <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk JPEG</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="foto" id="subject"  >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        File Proposal   <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="file_proposal" id="subject" >
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
