<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets_log/css/main.css">
<!--===============================================================================================-->

    <!-- Sweetalert Css -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets/aksesoris/SweetAlert/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/aksesoris/SweetAlert/sweetalert/dist/sweetalert.css">

</head>

<body>

<?php if ($this->session->flashdata('gagal')){ ?>
        <script>
            swal({
                title: "Gagal Login",
                text: "Username atau Password Salah",
                timer: 2500,
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>

      <?php }?>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo base_url()?>assets_log/images/bg-02.jpg);">
					<span class="login100-form-title-1">
						LOGIN ADMINISTRATOR
					</span>
				</div>

				<form class="login100-form validate-form" action="<?php echo base_url()?>admin/proses_login" method="POST">

					<div class="wrap-input100 validate-input m-b-26" data-validate="Isi Username Terlebih Dahulu">
						<span class="label-input100">NIP Anda</span>
						<input class="input100" type="text" name="nip" placeholder="Masukkan NIP Anda" onkeypress="return hanyaAngka(event)" size="18" maxlength="18">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-35" data-validate = "Isi Password Terlebih Dahulu">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukkan password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-30" data-validate = "Pilih Kategori Terlebih Dahulu">
					
					<span class="label-input100">Hak Akses	</span>
					<select class="form-control" style="border:0px" name="hakakses" id="hakakses">
                    <option value="Kewaspadaan Nasional">Kewaspadaan Nasional</option>
                    <option value="Ketahanan Sosial">Ketahanan Sosial</option>
                    <option value="Kasubag Umum dan Kepegawaian">Kasubag Umum dan Kepegawaian</option>
                    <option value="Kepala Badan">Kepala Badan</option>
                    
                 	 </select>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	    <script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    </script>



	 <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url();?>/assets/aksesoris/SweetAlert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets_log/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets_log/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets_log/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()?>assets_log/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets_log/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets_log/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url()?>assets_log/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets_log/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets_log/js/main.js"></script>

</body>
</html>