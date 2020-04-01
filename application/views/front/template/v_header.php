<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="it">
  <meta name="keywords" content="Rapoo,creative, agency, startup,onepage, clean, modern,business, company,it">
  
  <meta name="author" content="themefisher.com">

  <title><?=$title?></title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Animate Css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/animate-css/animate.css">
  <!-- Icon Font css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fonts/Pe-icon-7-stroke.css">
  <!-- Themify icon Css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/themify/css/themify-icons.css">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

    <!-- Sweetalert Css -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets/aksesoris/SweetAlert/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/aksesoris/SweetAlert/sweetalert/dist/sweetalert.css">

    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css">

</head>


<body id="top-header">

<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
    <!-- /LOADER TEMPLATE -->

    <div class="top-bar bg-dark " id="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="top-bar-left text-white">
                        <i class="fa fa-map-marker"></i>
                        <span class="ml-2">Jl. Basuki Rahmat No.21, Telukbetung Selatan, Bandar Lampung </span>
                    </div>
                </div>

                <div class="col-lg-4 ml-lg-auto col-md-6">
                    <ul class="d-flex list-unstyled header-socials float-lg-right">
                        <li><a href="#"> &nbsp; </a> </li>
                     </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url()?>">
                            <h2>SIPP BKBP</h2>
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">(0721) 481544</h5>
                            <p>Telepon  </p>
                        </div>
                    </div>

                    
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-time"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">Senin - Jumat (07.00 - 16.00) </h5>
                            <p>Sabtu dan Minggu Libur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

                <a class="navbar-brand d-lg-none d-block" href="">
                    <h4>SIPP</h4>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->

                 <?php if(!$this->session->userdata('nik_pemohon')) { ?>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="<?php echo base_url()?>" class="nav-link js-scroll-trigger"> 
                            Beranda
                            </a>

                        </li>
                      <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Buat Permohonan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="<?php echo base_url()?>front/izin_riset">
                                    Surat Pengantar Izin Riset
                                </a>
                                <a class="dropdown-item " href="<?php echo base_url()?>front/tanda_lapor">
                                    Surat Pengantar Tanda Lapor
                                </a> 
                                <a class="dropdown-item " href="<?php echo base_url()?>front/keberadaan_ormas">
                                    Surat Keterangan Keberadaan Ormas
                                </a>
                                
                            </div>
                        </li>

                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cara Pengajuan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="<?php echo base_url()?>front/petunjuk">
                                    Petunjuk Penggunaan Sistem
                                </a>
                                <a class="dropdown-item " href="<?php echo base_url()?>front/daftar">
                                    Daftar Akun
                                </a> 
                               
                                
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a href="<?php echo base_url()?>front/tentang_kami" class="nav-link js-scroll-trigger">
                                Tentang Kami
                            </a>
                        </li>

                      
                    </ul>

                    <ul class="ml-lg-auto list-unstyled m-0">
                        <li><a href="#" data-toggle="modal" data-target="#modal-login" class="btn btn-white btn-circled">Login</a></li>
                    </ul>
                </div> <!-- / .navbar-collapse -->

                 <?php } else { ?>

                 <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="<?php echo base_url()?>" class="nav-link js-scroll-trigger"> 
                            Beranda
                            </a>

                        </li>
                      <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Buat Permohonan
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="<?php echo base_url()?>front/izin_riset">
                                    Surat Pengantar Izin Riset
                                </a>
                                <a class="dropdown-item " href="<?php echo base_url()?>front/tanda_lapor">
                                    Surat Pengantar Tanda Lapor
                                </a> 
                               <a class="dropdown-item " href="<?php echo base_url()?>front/keberadaan_ormas">
                                    Surat Keterangan Keberadaan Ormas
                                </a>
                                
                            </div>
                        </li>

                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Akun Anda
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                             <a class="dropdown-item " href="<?php echo base_url()?>front/permohonan_anda">
                             Permohonan Anda
                            </a>     

                            <a class="dropdown-item " href="<?php echo base_url()?>front/pengaturan_akun">
                            Pengaturan Akun
                            </a> 

                                 
                               
                                
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a href="<?php echo base_url()?>front/tentang_kami" class="nav-link js-scroll-trigger">
                                Tentang Kami
                            </a>
                        </li>

                      
                    </ul>

                    <ul class="ml-lg-auto list-unstyled m-0">
                        <li><a href="<?php echo base_url()?>Login/logout" class="btn btn-white btn-circled">Logout</a></li>
                    </ul>
                </div> <!-- / .navbar-collapse -->

                    <?php } ?>


            </nav>
        </div> <!-- / .container -->
    </div>


<?php if ($this->session->flashdata('sukses')){ ?>
        <script>
            swal({
                title: "Selamat Datang",
                text: "Sekarang Anda Bisa Menikmati Semua Fitur",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

      <?php }?>

<?php if ($this->session->flashdata('gagal')){ ?>
        <script>
            swal({
                title: "Gagal",
                text: "NIK atau Password Salah",
                timer: 3000,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

      <?php }?>


 <!-- Modal -->
<div id="modal-login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Silahkan Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form method="POST" action="<?php echo base_url()?>Login/proses_login">
      <div class="modal-body">
        <input type="text" name="nik" class="form-control" onkeypress="return hanyaAngka(event)" placeholder="NIK Anda" size="16" maxlength="16"> 
        <br>
        <input type="password" name="password" class="form-control" placeholder="Password Anda"> 
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-circled btn-xs" >Login</button>
      </div>
    </form>
    </div>

  </div>
</div>

<!-- End Modal -->