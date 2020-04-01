<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laporan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap.min.css" rel="stylesheet" media="screen">
    
    <!-- css yang digunakan ketika dalam mode screen -->
    <link href="style.css" rel="stylesheet" media="screen">
    
    <!-- ss yang digunakan tampilkan ketika dalam mode print -->
    <link href="print.css" rel="stylesheet" media="print">
    
    <script src="jquery-1.8.3.min.js"></script>
    <script src="jquery.PrintArea.js"></script>
    <script>
        (function($) {
            // fungsi dijalankan setelah seluruh dokumen ditampilkan
            $(document).ready(function(e) {
                
                // aksi ketika tombol cetak ditekan
                $("#cetak").bind("click", function(event) {
                    // cetak data pada area <div id="#data-mahasiswa"></div>
                    $('#data-permohonan').printArea();
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
</head>

<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>

<div class="navbar navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="#">Laporan Permohonan</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="val" align="center">

        <h3>

<button id="cetak" class="btn pull-right">Cetak</button>
</h3>
<br>

<div id="data-permohonan" align="center">

<center>
<h5>Laporan Permohonan Surat</h5>
</center>


</p>




<table class="table table-bordered table-striped" border="0">
<thead>
<tr>
<th width="20px"> <center> No </center></th>
<th width="200px"><center> Tanggal Surat </center></th>
<th width="150px"><center> Nomor Surat </center></th>
<th width="200px"><center> Nama Pemohon </center></th>
<th width="200px"><center> Jenis Surat </center></th>

</tr>

</thead>
<tbody>

<?php
$sql = "select * from tb_balasan_wna join tb_pemohon on tb_balasan_wna.nik_pemohon = tb_pemohon.nik_pemohon where tb_balasan_wna.tanggal_surat between '$_POST[dari_tgl]' AND '$_POST[sampai_tgl]'  order by id_balasan desc";

// $sql = "select * from tb_balasan_wna where tanggal_surat between '$_POST[dari_tgl]' AND '$_POST[sampai_tgl]' order by id_balasan desc";

$result = mysqli_query($koneksi, $sql);

if ($result->num_rows > 0) {

$no = 0;

while($row = mysqli_fetch_assoc($result)) {

$no++;

?>

<tr>

<td> <center> <?=$no;?> </center></td>
<td> <center><?=tgl_indo($row['tanggal_surat']);?> </center></td>
<td> <center><?=$row['no_surat_balasan'];?> </center></td>
<td> <center><?=$row['nama_lengkap'];?> </center></td>
<td> <center>Surat Permohonan Tinggal WNA </center></td>


</tr>

<?php }

}
;?>

 

</tbody>
</table>



<br>



</div>



</body>
</html>


<?php
function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
