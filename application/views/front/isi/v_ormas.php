<?=$header?>


  <!-- SECTIONS
    ================================================== -->

    <section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 pl-4 text-center">
                    <div class="service-heading">
                        <h1>Syarat Permohonan Pengantar Keberadaan Ormas</h1>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Scan KTP</h4>
                            <p>Silahkan Persiapakan Scan KTP.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-3 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-notepad"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Upload Struktur Organisasi</h4>
                            <p>Silahkan Persiapakan Scan Struktur Organisasi.</p>
                        </div>
                    </div>
                </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Foto Diri</h4>
                            <p>Silahkan Persiapakan Foto Diri.</p>
                        </div>
                    </div>
                </div>


                 <div class="col-lg-6 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-pencil-alt"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Mengisi Form Permohonan</h4>
                            <p>Silahkan Isi Form Permohonan.</p>
                        </div>
                    </div>
                </div>



                  <div class="col-lg-6 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-file"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Akta Pendirian Dari Notaris</h4>
                            <p>Silahkan Persiapakan Scan Akta Pendirian Dari Notaris.</p>
                        </div>
                    </div>
                </div>
               

                  <div class="col-lg-6 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-file"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Surat Pernyataan Tidak Dalam Sengketa Kepengurusan / Pengadilan</h4>
                            <p>Silahkan Persiapakan Surat Pernyataan Tidak Dalam Sengketa.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-file"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Surat Keterangan Domisili Sekretariat Ormas</h4>
                            <p>Silahkan Persiapakan Surat Keterangan Domisili Sekretariat Ormas.</p>
                        </div>
                    </div>
                </div>


                 <div class="col-lg-6 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-file"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Susunan Pengurus</h4>
                            <p>Silahkan Persiapakan Susunan Pengurus.</p>
                        </div>
                    </div>
                </div>


                 <div class="col-lg-6 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-file"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Program Kerja</h4>
                            <p>Silahkan Persiapakan Program Kerja.</p>
                        </div>
                    </div>
                </div>




            

                </div>
                
               
                


            </div>   
        <h4 style="text-align: center">                
        Jika sudah memahami seluruh persyaratan, Klik tombol dibawah ini untuk mulai membuat permohonan
        <br>
        <br>
        <?php if($nik != '') {?>

        <a href="<?php echo base_url()?>front/form_keberadaan_ormas">
        <button type="button" class="btn btn-primary btn-circled" > Buat Permohonan </button>
        </a>
        <?php } else {?>
           <p style="color: red"> 
            Mohon login terlebih dahulu untuk mengakses fitur
        </p>
        <?php }?>
        </h4>

        </div>

    </section>



    


 <?=$footer;?>