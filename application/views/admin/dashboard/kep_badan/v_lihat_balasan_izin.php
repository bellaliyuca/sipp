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

   <?php if(is_array($lihat_balasan_izin)){ ?>
   <?php foreach($lihat_balasan_izin as $dt) { 
    $nik = $dt->nik_pemohon;
    $nama = $dt->nama_lengkap;
    $npm = $dt->npm;
    $jk = $dt->jenis_kelamin;
    $ttl = $dt->tanggal_lahir;
    $pekerjaan = $dt->pekerjaan;
    $alamat = $dt->alamat;
    $tujuan = $dt->tujuan;
    $lokasi = $dt->lokasi_penelitian;
    $judul = $dt->judul_penelitian;
    $sumber = $dt->sumber_surat;
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
    <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 14px" align="center"> <u> REKOMENDASI PENELITIAN / SURVEI DI DAERAH PROVINSI LAMPUNG </u></p>
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

    <td width="15%"><p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    MEMBACA : <br>
   
    </p></td>
    <td>
      <p style="font-family: Times New Roman, Times, serif; ; color: black; font-size: 12px" align="left">
    <?=$sumber;?> , Perihal Permohonan Surat Izin Penelitian
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
    Tempat/Tgl Lahir &nbsp; : <?=$ttl;?> <br>
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
   <img src="<?php echo base_url().'/file/syarat_izin/'.$foto ?>" width="140px" height="200px">
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
 