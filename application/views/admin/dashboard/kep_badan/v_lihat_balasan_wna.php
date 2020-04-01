<!-- Menu -->
<?=$header;?>
<!-- End Menu -->

<?php if ($this->session->flashdata('balasan')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Surat Balasan Berhasil Dibuat",
                timer: 3000,
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>

      <?php }?>
        <!-- Isi Konten Disini -->
        <div class="right_col" role="main">
        
            <h3>Lihat Surat Balasan Izin </h3>
          <hr>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">

   <?php if(is_array($lihat_balasan_wna)){ ?>
   <?php foreach($lihat_balasan_wna as $dt) { 

    $membaca = $dt->sumber_surat;
    $nama = $dt->nama_wna;
    $jk = $dt->jenis_kelamin;
    $ttl = $dt->tgl_lahir;
    $kewarganegaraan = $dt->kewarganegaraan;
    $kitas= $dt->no_kitas;
    $paspor= $dt->no_paspor;
    $alamat_sementara = $dt->alamat_sementara;
    $pekerjaan = $dt->pekerjaan;
    $foto = $dt->foto;
    $tembusan1 = $dt->tembusan_1;
    $tembusan2 = $dt->tembusan_2;
    $tembusan3 = $dt->tembusan_3;
    $tembusan4 = $dt->tembusan_4;   
    $tembusan5 = $dt->tembusan_5;   
    $tembusan6 = $dt->tembusan_6;   
    $tgl1 = date('Y-m-d');// pendefinisian tanggal awal
    $tgl2 = date('Y-m-d', strtotime('+2 months', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
    $tgl_indo1 = tgl_indo($tgl1);
    $tgl_indo2 = tgl_indo($tgl2);
    
   } ?>
 <?php } ?>

      
  <table border="0">
  <tr>
    <th colspan="4">
      <center>
      <img src="<?php echo base_url()?>assets2/surat/kop_surat.jpg" width="70%" height="170px"> 
      <hr style="border-width: 3px ; border-color: black;margin-top: 3px"> 
    </center>
    </th>
  </tr>
  <tr>
  <th colspan="4">
    <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 14px" align="center"> <u> REKOMENDASI KEBERADAAN ORANG ASING/ORMAS ASING DI DAERAH PROVINSI LAMPUNG </u></p>
    </th>
  </tr>
  <tr>
    <td> &nbsp; </td>
    <td> &nbsp; </td>
    <td> &nbsp; </td>
    <td> &nbsp; </td>
  </tr>

  <tr>
    <td>
      &emsp;
    </td>
    <td width="10%">
      &emsp;
    </td>

    <td width="15%"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    DASAR : <br>
    &nbsp; <br>
    &nbsp; <br>
    &nbsp; <br>
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
  1. Undang-Undang No 32 Tahun 2004 Tentang Pemerintahan Daerah <br>
  2. Undang-Undang No 6 Tahun 2011 Tentang Keimigrasian <br>
  3. Peraturan Menteri Dalam Negeri Nomor 11 Tahun 2019 Tentang Perangkat Daerah yang Melaksanakan Utusan Pemerintah di Bidang Kesatuan Bangsa dan Politik <br>
  4. Peraturan Menteri Dalam Negeri Nomor 49 Tahun 2010 Tentang Pedoman Pemantauan Orang Asing dan Organisasi Masyarakat Asing di Daerah <br>
  5. Peraturan Menteri Dalam Negeri Nomor 50 Tahun 2010 Tentang Pedoman Pemantauan Tenaga Kerja Asing di Daerah<br>
  6. Peraturan Menteri Dalam Negeri Nomor 08 Tahun 2016 Tentang Pembentukan dan Susunan Perangkat Daerah Provinsi Lampung sebagaimana telah diubah dengan Peraturan Daerah Provinsi Lampung Nomor 17 Tahun 2017 <br>
  7. Surat Keputusan Gubernur Lampung Nomor : G/160/VII.D1/HK/2019 tentang Pembentukan Tim Pendataan dan Pemantauan Kegiatan Warga Negara Asing di Provinsi Lampung. <br>
    </p>
  </td>
  </tr>

  <tr>
    <td>
      &emsp;
    </td>
    <td width="10%">
      &emsp;
    </td>

    <td width="15%"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    MEMBACA : <br>
   
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    <?=$membaca;?> Perihal Permohonan Surat Pemberitahuan Keberadaan Tenaga Kerja Asing An. <?=$nama;?> 
    </p>
  </td>
  </tr>


   <tr>
    <td>
      &emsp;
    </td>
    <td width="10%">
      &emsp;
    </td>

    <td width="15%"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    MEMPERHATIKAN : <br>
   
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
       Nomor Kitas : <?=$kitas;?>, Nomor Paspor : <?=$paspor;?> 
    </p>
  </td>
  </tr>

  <tr>
  <th colspan="4">
    <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 14px" align="center">
      MEREKOMENDASIKAN :
    </p>
    </th>
  </tr>
  
  <tr>
    <td>
      &emsp;
    </td>
    <td width="10%">
      &emsp;
    </td>

    <td width="15%"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    &emsp; <br>
   
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    Nama &emsp; &emsp; &emsp; &emsp; &nbsp;: <b><?=$nama;?></b><br>
    Jenis Kelamin &emsp; &nbsp; &nbsp;: <?=$jk;?><br> 
    Tempat/Tgl Lahir &nbsp; : <?=tgl_indo($ttl);?> <br>
    Kewarganegaraan &nbsp;: <?=$kewarganegaraan;?><br>
    Alamat Sementara : <?=$alamat_sementara;?><br>
    Pekerjaan &emsp; &emsp; &emsp; : <?=$pekerjaan;?><br>
   
    Waktu yang Diberikan:  <?=$tgl_indo1?> sampai dengan <?=$tgl_indo2?> <br>
    </p>
  </td>
  </tr>


   <tr>
    <td>
      &emsp;
    </td>
    <td width="10%">
      &emsp;
    </td>

    <td colspan="2"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    <u> Dengan Ketentuan : </u> <br>
    1. Melaporkan setiap perubahan : Alamat, Jenis Pekerjaan, Masa Kerja dan pada saat meninggalkan wilayah hukum Provinsi Lampung baik sementara atau selamanya kepada Kepala Badan Kesatuan Bangsa dan Politik Provinsi Lampung. <br>
    2. Yang bersangkutan harus memenuhi syarat serta ketentuan Peraturan Perundang-Undangan yang berlaku. <br>
   
    </p></td>
   
  </tr>

  <tr>
    <td>
      &emsp;
    </td>
    <td width="10%">
      &emsp;
    </td>

    <td width="15%"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    &emsp; <br>
   
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px; padding-left: 440px" align="center">
    Dikeluarkan di : Bandar Lampung <br>
    Pada Tanggal : <?php echo tgl_indo(date('Y-m-d'))?>
    </p>
  </td>
  </tr>

  <tr>
    <td>
      &emsp;
    </td>
    <td width="10%">
      &emsp;
    </td>

    <td width="15%"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px; " align="left">
   <img src="<?php echo base_url().'/file/syarat_wna/'.$foto ?>" width="140px" height="200px">
     <br>
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px; padding-left: 450px" align="center"><b>
   KEPALA BADAN KESATUAN BANGSA <br>DAN POLITIK PROVINSI LAMPUNG </b>
   <br>
   <br>
   <br>
   <br>
   <br>
   <b> <u> FITTER SYAHBOEDIN,S.E.,M.M </u> </b>
   <br>
   <b>
   Pembina Utama Madya <br>
   NIP. 19600810 199002 1 001
   </b> </p>
  </td>
  </tr>

<tr>
    <td>
      &emsp;
    </td>
    <td width="10%">
      &emsp;
    </td>

    <td colspan="2"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    <u>Tembusan : </u> <br>
    1. <?=$tembusan1?><br>

    <?php if ($tembusan2 != ''){ ?>
    2. <?=$tembusan2?><br>
    <?php } else {?>
    <?php } ?>

    <?php if ($tembusan3 != ''){ ?>
    3. <?=$tembusan3?><br>
    <?php } else {?>
    <?php } ?>


    <?php if ($tembusan4 != ''){ ?>
    4. <?=$tembusan4?> <br>
    <?php } else {?>
    <?php } ?>

    <?php if ($tembusan5 != ''){ ?>
    5. <?=$tembusan5?><br>
    <?php } else {?>
    <?php } ?>

    <?php if ($tembusan6 != ''){ ?>
    6. <?=$tembusan6?><br>
    <?php } else {?>
    <?php } ?>


    </p></td>
      
    </p>
  </td>
  </tr>

</table>


      </div>
    </div>
    </div>
  </div>


        <!-- End Konten  -->


<!-- Footer -->
<?=$footer;?>
<!-- End Footer-->

<script src="<?php echo base_url()?>assets2/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets2/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
 