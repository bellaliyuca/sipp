<!-- Menu -->
<?=$header;?>
<!-- End Menu -->

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
                    $('#data-ormas').printArea();
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

  <?php if(is_array($lihat_balasan_ormas)){ ?>
   <?php foreach($lihat_balasan_ormas as $dt) { 
    $nik = $dt->nik_pemohon;
    $id_surat = $dt->id_surat_pengantar;
    $berdasarkan = $dt->sumber_surat;
    $email = $dt->email;
    $id_balasan = $dt->id_balasan;
    $foto = $dt->foto;
    $nomor_surat = $dt->no_surat_balasan;
    $tgl_permohonan = $dt->tanggal_surat;
    $surat = $dt->id_surat_pengantar;
    $nama = $dt->nama_lengkap;
    $jabatan = $dt->jabatan;
    $organisasi = $dt->nama_organisasi;
    $alamat_org= $dt->alamat_organisasi;
    $tingkat = $dt->tingkat_kepengurusan;
    $legalitas = $dt->legalitas;
    $ketua = $dt->ketua;
    $sekretaris = $dt->sekretaris;
    $bendahara = $dt->bendahara;
    $tgl1 = date('Y-m-d');// pendefinisian tanggal awal
    $tgl2 = date('Y-m-d', strtotime('+5 years', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
    $tgl_indo1 = tgl_indo($tgl1);
    $tgl_indo2 = tgl_indo($tgl2);

   } ?>
 <?php } ?>        
        
<h3>Cetak Surat Balasan Ormas &nbsp; </h3>
 <table border="0">
  <tr>
   
    </tr>
    <tr>
      <td> <button id="cetak" class="btn btn-sm btn-success"> <i class="fa fa-print"> </i> &nbsp; Cetak Surat</button> &nbsp;</td>
      <td>
      <form action ="<?php echo base_url()?>email/email_ormas" method="POST">
      <input type="hidden" name="id_surat" value="<?=$id_surat?>">
      <input type="hidden" name="email" value="<?=$email?>">
      <input type="hidden" name="id_balasan" value="<?=$id_balasan?>">
      <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-paper-plane"> </i> &nbsp; Kirim pemberitahuan ke email pemohon
      </button>
      </form>
      </td>
    </tr>
  </table>

<hr>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">

   

<div id="data-ormas" align="center">
  <table border="0">
  <tr>
    <th colspan="4">
      <center>
     <img src="<?php echo base_url()?>assets2/surat/kop_surat.jpg" width="70%" height="140px">
      <hr style="border-width: 3px ; border-color: black;margin-top: 3px"> 
    </center>
    </th>
  </tr>

  <tr>
    <th colspan="4">
      <center>
      <p style="color: black; font-size: 20px"> <u>SURAT KETERANGAN KEBERADAAN 
      </u>
      <br> <?=$nomor_surat;?> 
        <br>

      </p>
    </center>
    </th>
  </tr>

   <tr>
    
    <td colspan="4">
        <br>
      
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        &emsp; &emsp; 
        Berdasarkan <?=$berdasarkan?> pada tanggal <?=tgl_indo($tgl_permohonan)?> perihal Pemberitahuan Keadaan, sebagaimana tercantum dibawah ini adalah benar telah dilaporkan kepada kami oleh :
        <br>
        
      </p>
    </td>
  </tr>

  <tr>
     <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
       &nbsp;
      </p>
    </td>
    <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        1. Nama 
      </p>
    </td>

    <td colspan="2">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        : &emsp;  <?=$nama;?> 
      </p>
    </td>
    
  </tr>


  <tr>
     <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
       &nbsp;
      </p>
    </td>
    <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        2. Jabatan 
      </p>
    </td>

    <td colspan="2">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        : &emsp;  <?=$jabatan;?>  
      </p>
    </td>
   
  </tr>

    <tr>
     <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
       &nbsp;
      </p>
    </td>
    <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        3. Nama Organisasi
      </p>
    </td>

    <td colspan="2">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        : &emsp;  <?=$organisasi?>
      </p>
    </td>
    
  </tr>

  <tr>
     <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
       &nbsp;
      </p>
    </td>
    <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        4. Alamat
      </p>
    </td>

    <td colspan="2">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        : &emsp;   <?=$alamat_org?> 
      </p>
    </td>
    
  </tr>

  <tr>
     <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
       &nbsp;
      </p>
    </td>
    <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        5. Tingkat Kepengurusan
      </p>
    </td>

    <td colspan="2">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        : &emsp;   <?=$tingkat?>
      </p>
    </td>
    
  </tr>

   <tr>
     <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
       &nbsp;
      </p>
    </td>
    <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
       6. Legalitas Organisasi
      </p>
    </td>

    <td colspan="2">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        : &emsp;  <?=$legalitas?> 
      </p>
    </td>
 
  </tr>

  <tr>
     <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
       &nbsp;
      </p>
    </td>
    <td width="20%">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
      7. Susunan Pengurus
      &emsp; <br>
      &emsp; <br>
      &emsp; <br>
      </p>
    </td>

    <td colspan="2">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        : &emsp;  1) Ketua :<?=$ketua?> <br>
        : &emsp;  2) Sekretaris :<?=$sekretaris?> <br>
        : &emsp;  3) Bendahara :<?=$bendahara?> <br>
      </p>
    </td>
   
  </tr>

 

 <tr>
    <td colspan="4">
      <p style="color: black; font-family: Times New Roman, Times, serif;"> 
        &emsp; &emsp; Berdasarkan Undang-Undang Nomor 17 Tahun 2013 Pasal 21 (d) Ormas berkewajiban menjaga ketertiban menjaga ketertiban umum dan terciptanya kedamaian dalam masyarakat. Apabila dikemudian hari Surat Keterangan ini terdapat kekeliruan dan/atau terjadi penyalahgunaan, akan ditinjau kembali sesuai ketentuan yang berlaku dan ormas yang bersangkutan wajib melaporkan kembali keberadaan setiap tahunnya pada tanggal <?php echo substr(tgl_indo(date('Y-m-d')),0,11) ?> kepada Kaban Kesbangpol Provinsi Lampung.
        <br>
        <br>

        &emsp; &emsp; Demikian Surat Keterangan ini dibuat untuk dipergunakan seperlunya.
        
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

    <td width="15%"><p style="font-family: Times New Roman, Times, serif; color: black; font-size: 12px;" align="left">
    &emsp; <br>
   
    </p></td>
    <td>
    <br>
     
  </td>
  </tr>

  <tr>
    
    <td colspan="2">
      <center>
      <img src="<?php echo base_url().'/file/syarat_ormas/'.$foto ?>" width="140px" height="200px">
      <br>
      <br>
      <p style="font-family: Times New Roman, Times, serif;  color: black; font-size: 12px; " >
        <b>
      BERLAKU : <br>
      DARI TANGGAL <br><?=$tgl_indo1?> s/d <?=$tgl_indo2?>
    </b>
    </p>
    </center>
    </td>

    <td width="15%"><p style="font-family: Times New Roman, Times, serif;  color: black; font-size: 12px; " align="center">
    &emsp; <br>
   
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px; " align="center">
  
    Bandar Lampung : <?php echo tgl_indo(date('Y-m-d'))?> <br> <br>
   

  <b>
   KEPALA BADAN KESATUAN BANGSA <br>DAN POLITIK PROVINSI LAMPUNG </b>  <br>
  <img src="<?php echo base_url().'/image/ttd_stamp.png' ?>" width="200px" height="120px">
  <br>
   <b> <u> FITTER SYAHBOEDIN,S.E.,M.M </u> </b>
   <br>
   <b>
   Pembina Utama Madya <br>
   NIP. 19600810 199002 1 001
  </b>
    </p>
  </td>
  </tr>

  </table>


      </div>
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
 