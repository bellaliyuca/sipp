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
                    $('#data-wna').printArea();
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


 <?php if(is_array($lihat_balasan_wna)){ ?>
   <?php foreach($lihat_balasan_wna as $dt) { 
    $nik = $dt->nik_pemohon;
    $membaca = $dt->sumber_surat;
    $id_surat = $dt->id_surat_pengantar;
    $id_balasan = $dt->id_balasan;
    $nama = $dt->nama_wna;
    $jk = $dt->jenis_kelamin;
    $ttl = $dt->tgl_lahir;
    $kewarganegaraan = $dt->kewarganegaraan;
    $alamat_sementara = $dt->alamat_sementara;
    $pekerjaan = $dt->pekerjaan;
    $foto = $dt->foto;
    $tembusan1 = $dt->tembusan_1;
    $tembusan2 = $dt->tembusan_2;
    $tembusan3 = $dt->tembusan_3;
    $tembusan4 = $dt->tembusan_4;
    $tgl_permohonan = $dt->tanggal_surat;
    $nomor_surat = $dt->no_surat_balasan;
    $kitas= $dt->no_kitas;
    $paspor= $dt->no_paspor;
 
   
    $tgl1 = date('Y-m-d');// pendefinisian tanggal awal
    $tgl2 = date('Y-m-d', strtotime('+2 months', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
    $tgl_indo1 = tgl_indo($tgl1);
    $tgl_indo2 = tgl_indo($tgl2);
    
   } ?>
 <?php } ?>  

    
<section class="section" id="service">

<div class="container">
  <h3>Cetak Surat Balasan WNA &nbsp;  </h3>

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


<div id="data-wna" align="center">

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
    <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 14px" align="center"> <u> REKOMENDASI KEBERADAAN ORANG ASING/ORMAS ASING DI DAERAH PROVINSI LAMPUNG </u>
          <br>
    <?=$nomor_surat?>
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
    <?=$membaca;?> pada tanggal <?=tgl_indo($tgl_permohonan)?> perihal Permohonan Surat Pemberitahuan Tenaga Kerja Asing An. <?=$nama?>
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
     
  </td>
    <td>
       <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
       Nomor Kitas : <?=$kitas;?>, Nomor Paspor : <?=$paspor;?> 
     </p>
  </td>
  </tr>


  
  <tr>
  <th colspan="4">
    <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 14px" align="center">
      <br>
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
   
    Waktu yang Diberikan:  <?=$tgl_indo1?> sampai dengan <?=$tgl_indo2?> <br> <br>
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
    <u> <b> Dengan Ketentuan : </b> </u> <br>
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
   <img src="<?php echo base_url().'/file/syarat_wna/'.$foto ?>" width="" height="200px">
     <br>
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px; padding-left: 200px" align="center">
           Dikeluarkan di : Bandar Lampung <br>
    Pada Tanggal : <?php echo tgl_indo(date('Y-m-d'))?> <br> <br>
    <b>
   KEPALA BADAN KESATUAN BANGSA <br>DAN POLITIK PROVINSI LAMPUNG </b>
   <br>
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
    2. <?=$tembusan2?><br>
    3. <?=$tembusan3?><br>
    4. <?=$tembusan4?><br>
   
    </p></td>
      
    </p>
  </td>
  </tr>

</table>

</div>    

</div>

    </section>



    


 <?=$footer;?>