<?=$header?>


  <!-- SECTIONS
    ================================================== -->

    <section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 pl-4 text-center">
                    <div class="service-heading">
                        <h1>Syarat Permohonan Pengantar Izin Riset</h1>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
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
                            <h4>File Proposal</h4>
                            <p>Silahkan Persiapakan File Proposal.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="ti-credit-card"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Scan KTM</h4>
                            <p>Silahkan Persiapakan Scan KTM.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-3 col-md-6">
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


            </div>   
        <h4 style="text-align: center">                
        Jika sudah memahami seluruh persyaratan, Klik tombol dibawah ini untuk mulai membuat permohonan
        <br>
        <br>
        <?php if($nik != '') {?>

        <a href="<?php echo base_url()?>front/form_izin_riset">
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