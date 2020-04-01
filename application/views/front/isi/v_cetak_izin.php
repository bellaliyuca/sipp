<?=$header?>


  <!-- SECTIONS
    ================================================== -->
 <link href="<?php echo base_url()?>print/print.css" rel="stylesheet" media="print">
    
    <script src="<?php echo base_url()?>print/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url()?>print/jquery.PrintArea.js"></script>

  <script>
        (function($) {
            // fungsi dijalankan setelah seluruh dokumen ditampilkan
            $(document).ready(function(e) {
                
                // aksi ketika tombol cetak ditekan
                $("#cetak").bind("click", function(event) {
                    // cetak data pada area <div id="#data-mahasiswa"></div>
                    $('#data-izin').printArea();
                });
            });
        }) (jQuery);
  </script>

   <style type="text/css">
    .tegak {
        positon:absolute;
        top:60px;
        -moz-transform: rotate(-90deg);
        -webkit-transform: rotate (-90deg);
        -o-transform:rotate (-90deg);
        -ms-transform:rotate(-90deg);
        transform: rotate(-90deg);
        margin-top: 0px;
        }

    </style>

 <style type="text/css" media="print">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 11pt "Arial";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
      #headers, #footers {display: none;}
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>



  <?php if(is_array($lihat_balasan_izin)){ ?>
   <?php foreach($lihat_balasan_izin as $dt) { 
    $nik = $dt->nik_pemohon;
    $id_balasan = $dt->id_balasan;
    $id_surat = $dt->id_surat_pengantar;
    $nama = $dt->nama_lengkap;
    $email = $dt->email;
    $nomor_surat = $dt->no_surat_balasan;
    $tgl_permohonan = $dt->tanggal_surat;
    $npm = $dt->npm;
    $jk = $dt->jenis_kelamin;
    $ttl = $dt->tanggal_lahir;
    $pekerjaan = $dt->pekerjaan;
    $alamat = $dt->alamat;
    $tujuan = $dt->tujuan;
    $lokasi = $dt->lokasi_penelitian;
    $judul = $dt->judul_penelitian;
    $membaca = $dt->sumber_surat;
    $memperhatikan = $dt->memperhatikan;
    $tembusan1 = $dt->tembusan_1;
    $cq1 = $dt->cq_1;
    $tembusan2 = $dt->tembusan_2;
    $cq2 = $dt->cq_2;
    $foto = $dt->foto;
    $tgl1 = date('Y-m-d');// pendefinisian tanggal awal
    $tgl2 = date('Y-m-d', strtotime('+2 months', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
    $tgl_indo1 = tgl_indo($tgl1);
    $tgl_indo2 = tgl_indo($tgl2);
    
   } ?>
 <?php } ?>


    

   


<section class="section" id="service">

<div class="container">
  <h3>Cetak Surat Balasan Izin &nbsp;  </h3>

<button id="cetak" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;"> <i class="fa fa-print"> </i> &nbsp; Cetak Surat</button>
</div>

<br>
<br>


<div id="data-izin" align="center">

<div class="container">



  <table border="0">
  <tr>
    <th colspan="4">
      <center>
      <img src="<?php echo base_url()?>assets2/surat/kop_surat.jpg" width="80%" height="200px"> 
      <hr style="border-width: 3px ; border-color: black;margin-top: 3px"> 
    </center>
    </th>
  </tr>
  <tr>
  <th colspan="4">
    <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 14px" align="center"> <u> REKOMENDASI PENELITIAN / SURVEI DI DAERAH PROVINSI LAMPUNG </u>
      <br> <?=$nomor_surat;?> 
    </p>
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
    &nbsp; <br>
    &nbsp; <br>
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    1. Undang-Undang No 23 Tahun 2014 Tentang Pemerintahan Daerah <br>
    2. Peraturan Menteri Dalam Negeri Nomor 11. Tahun 2019 Tentang Perangkat Daerah yang Melaksanakan Urusan Pemerintahan di Bidang Kesatuan Bangsa dan Politik <br>
    3. Peraturan Daerah Provinsi Lampung Nomor 8 Tahun 2016 Tentang Pembentukan dan Susunan Perangkat Daerah Provinsi Lampung sebagaimana telah diubah dengan Peraturan Daerah Provinsi Lampung No 17 Tahun 2017 <br>
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

    <td width="20%"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    MEMBACA : <br>
   
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    <?=$membaca;?>  pada tanggal <?=tgl_indo($tgl_permohonan);?>
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
      <?=$memperhatikan;?>
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
    Nama &emsp; &emsp; &emsp; &emsp; &nbsp;: <b><?=$nama;?> / <?=$npm;?></b><br>
    Jenis Kelamin &emsp; &nbsp; &nbsp;: <?=$jk;?><br> 
    Tempat/Tgl Lahir &nbsp; : <?=tgl_indo($ttl);?> <br>
    Alamat &emsp; &emsp; &emsp; &emsp;: <?=$alamat;?><br>
    Pekerjaan &emsp; &emsp; &emsp; : <?=$pekerjaan;?><br>
    Tujuan &emsp; &emsp; &emsp; &emsp; : <?=$tujuan;?><br>
    Lokasi Penelitian &nbsp; &nbsp;: <?=$lokasi;?><br>
    Judul Penelitian &emsp; : <b>"<?=$judul;?>" </b><br>
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
    1. Rekomendasi ini diterbitkan untuk kepentingan penelitian yang bersangkutan <br>
    2. Tidak dibenarkan melakukan Penelitian/Survei yang tidak sesuai/tidak ada kaitannya dengan judul kegiatan  Penelitian/Survei tersebut diatas<br>
    3. Melaporkan hasil Penelitian/Survei kepada Kepala Badan Kesatuan Bangsa dan Politik Bandar Lampung <br>
    4. Surat Rekomendasi ini dicabut kembali apabila pemegangnya tidak mentaati ketentuan tersebut diatas<br>
    5. Yang bersangkutan harus memenuhi syarat serta ketentuan Peraturan Perundang-undangan yang berlaku <br>
   
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
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px; padding-left: 400px "align="center">
        <br>
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
   <img src="<?php echo base_url().'/file/syarat_izin/'.$foto ?>" width="140px" height="">
     <br>
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px; padding-left: 400px  " align="center"><b>
   KEPALA BADAN KESATUAN BANGSA <br>DAN POLITIK PROVINSI LAMPUNG </b> <br>
   
    <img src="<?php echo base_url().'/image/ttd_stamp.png' ?>" width="200px" height="120px">
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
    <?=$cq1?><br>
    2. <?=$tembusan2?><br>
    <?=$cq2?><br>
   
    </p></td>
      
    </p>
  </td>
  </tr>

</table>
</div>    

</div>

    </section>



    


 <?=$footer;?>