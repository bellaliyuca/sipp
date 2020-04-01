
<?=$header?>

<?php if ($this->session->flashdata('pesan1')){ ?>
        <script>
            swal({
                title: "Peringatan",
                text: "Upload Scan Paspor Terlebih Dahulu",
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
                text: " Upload Keterangan Kementrian RI Terlebih Dahulu",
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
                text: " Upload Izin Tinggal Terlebih Dahulu",
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
                text: "Upload Tanda Lapor Kepolisian Terlebih Dahulu",
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
                        <center> Form Tanda <span class="font-weight-normal"> Lapor WNA</span> </center>
                    </h2>

                    <br>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-12">
                   <!-- form message -->
                   
                    <!-- end message -->
                    <!-- Contacts Form -->
                    <form class="contact_form" action="<?php echo base_url()?>front/simpan_lapor" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <input class="form-control" name="id_surat" type="hidden" value="<?=$kodeunik?>">
                            <input class="form-control" name="nik" type="hidden" value="<?=$nik?>">


                           
                             <!-- Input -->
                            <div class="col-sm-12 mb-12">

                                 <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Nama WNA      
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="nama_wna" id="name" required oninvalid="this.setCustomValidity('Nama WNA  tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Nama WNA Disini" type="text">
                                    </div>
                                </div>



                                 <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Jenis Kelamin       
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                    <select class="form-control" name="jenis_kelamin" id="hakakses">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    
                                     </select>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Tanggal Lahir     
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="tanggal_lahir" id="name" required oninvalid="this.setCustomValidity('Tanggal Lahir tidak boleh kosong')" oninput="setCustomValidity('')"  type="date">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Kewarganegaraan     
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="kewarganegaraan" id="name" required oninvalid="this.setCustomValidity('Kewarganegaraan tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Kewarganegaraan Disini" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Alamat Sementara   
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="alamat" id="name" required oninvalid="this.setCustomValidity('Alamat Sementara tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Alamat Sementara Disini" type="text">
                                    </div>
                                </div>

                                  <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Pekerjaan     
                                        <span class="text-danger">*</span>
                                    </label>

                                     <div class="input-group ">
                                      <select class="form-control" name="pekerjaan">
                                        <option value="" selected="true" disabled="">Pilih Pekerjaan</option>
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                        </select>
                                    </div>
                                   
                                </div>

                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        No Paspor     
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="paspor" id="name" required oninvalid="this.setCustomValidity('No paspor tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi No Paspor Disini" type="text">
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        No Kitas     
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="kitas" id="name" required oninvalid="this.setCustomValidity('No kitas tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi No Kitas Disini" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Sumber Surat Pengantar    
                                        <span class="text-danger">*</span>
                                        <br>
                                        <small>Contoh : Surat Permohonan PT. Central Pertiwi Bahari Nomor : 29/CPB//RO-BDL/X/2019 tanggal 8 Oktober 2019</small>

                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="sumber" id="name" required oninvalid="this.setCustomValidity('No kitas tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Isi Sumber Surat Pengantar" type="text">
                                    </div>
                                </div>



                            </div>
                            <!-- End Input -->

                         
                             <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Scan Paspor
                                        <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>

                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="scan_paspor" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                           

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Foto Diri<span class="text-danger">*</span>
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
                                        File Keterangan Disnaker <span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="ket_kementrian" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                        <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        File Izin Tinggal<span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="izin_tinggal" id="subject" >
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                         <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        File Tanda Lapor Polri<span class="text-danger">*</span>
                                        <small><i> Dalam Bentuk Pdf</i></small>
                                      
                                    </label>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="tanda_lapor" id="subject" >
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
