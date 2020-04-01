 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$title?> </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets2/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets2/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>assets2/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url()?>assets2/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url()?>assets2/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url()?>assets2/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url()?>assets2/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>assets2/build/css/custom.min.css" rel="stylesheet">

    <!-- Sweetalert Css -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets/aksesoris/SweetAlert/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/aksesoris/SweetAlert/sweetalert/dist/sweetalert.css">

    <link href="<?php echo base_url()?>assets2/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets2/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets2/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets2/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets2/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view"> 

  <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span>ADMINISTRATOR</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url()?>image/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2><?=$hakakses;?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <?php if ($hakakses == 'Kewaspadaan Nasional') { ?>

                <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url()?>admin/dashboard"><i class="fa fa-home"></i> Beranda</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Permohonan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()?>admin/permohonan_menunggu">Permohonan Menunggu</a></li>
                      <li><a href="<?php echo base_url()?>admin/permohonan_verifikasi">Permohonan Verifikasi</a></li>
                      <li><a href="<?php echo base_url()?>admin/pemohon">Data Pemohon</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url()?>admin/pengaturan_akun"><i class="fa fa-user"></i> Pengaturan Akun </a>
                   
                  </li>
               
             
              
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

            <?php } else if ($hakakses == 'Ketahanan Sosial') { ?>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                  <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url()?>admin/dashboard"><i class="fa fa-home"></i> Beranda</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Permohonan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()?>admin/permohonan_menunggu">Permohonan Menunggu</a></li>
                      <li><a href="<?php echo base_url()?>admin/permohonan_verifikasi">Permohonan Verifikasi</a></li>
                      <li><a href="<?php echo base_url()?>admin/pemohon">Data Pemohon</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url()?>admin/pengaturan_akun"><i class="fa fa-user"></i> Pengaturan Akun </a>
                   
                  </li>
               
             
              
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->
            
            <?php } else if ($hakakses == 'Kasubag Umum dan Kepegawaian') { ?>

          <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url()?>admin/dashboard"><i class="fa fa-home"></i> Beranda</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Permohonan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()?>admin/permohonan_menunggu_kasubag">Permohonan Menunggu</a></li>
                      <li><a href="<?php echo base_url()?>admin/permohonan_verifikasi_kasubag">Permohonan Verifikasi</a></li>
                      <li><a href="<?php echo base_url()?>admin/pemohon">Data Pemohon</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Surat Balasan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   <li><a href="<?php echo base_url()?>admin/surat_balasan_izin_kasubag">Balasan Izin Riset</a></li>
                      <li><a href="<?php echo base_url()?>admin/surat_balasan_wna_kasubag">Balasan Lapor WNA</a></li>
                      <li><a href="<?php echo base_url()?>admin/surat_balasan_ormas_kasubag">Balasan Ormas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Manajemen Pengguna <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()?>admin/manajemen_pengguna">Manajemen Pengguna</a></li>
                      <li><a href="<?php echo base_url()?>admin/pengaturan_akun">Pengaturan Akun</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()?>admin/laporan_pemohon">Pelapor</a></li>
                      <li><a href="<?php echo base_url()?>admin/laporan_izin">Laporan Surat Izin</a></li>
                      <li><a href="<?php echo base_url()?>admin/laporan_ormas">Laporan Ormas</a></li>
                      <li><a href="<?php echo base_url()?>admin/laporan_wna">Laporan WNA</a></li>
                     
                    </ul>
                  </li>
                 
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->
            
            <?php } else if ($hakakses == 'Kepala Badan') { ?>

             <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url()?>admin/dashboard"><i class="fa fa-home"></i> Beranda</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Permohonan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()?>admin/permohonan_terverifikasi">Permohonan Terverifikasi</a></li>
                      <li><a href="<?php echo base_url()?>admin/pemohon">Data Pemohon</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Surat Balasan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()?>admin/surat_balasan_izin">Balasan Izin Riset</a></li>
                      <li><a href="<?php echo base_url()?>admin/surat_balasan_wna">Balasan Lapor WNA</a></li>
                      <li><a href="<?php echo base_url()?>admin/surat_balasan_ormas">Balasan Ormas</a></li>

                      
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url()?>admin/pengaturan_akun"><i class="fa fa-user"></i> Pengaturan Akun </a>
                  </li>
                  
                
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

          <?php } ?>


              <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
              &nbsp;
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
               &nbsp;  
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                &nbsp; 
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url()?>admin/logout">
               &nbsp;  
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()?>image/user.png" alt=""><?=$hakakses;?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url()?>admin/pengaturan_akun"> Pengaturan Akun</a></li>
                  
                    <li><a href="<?php echo base_url()?>admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->