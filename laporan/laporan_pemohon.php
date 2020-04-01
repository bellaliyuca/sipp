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
                    $('#data-pemohon').printArea();
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
            <a class="brand" href="#">Laporan Pemohon</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="val" align="center">

        <h3>

<button id="cetak" class="btn pull-right">Cetak</button>
</h3>
<br>

<div id="data-pemohon" align="center">

<center>
<h5>Laporan Pemohon</h5>
</center>


</p>




<table class="table table-bordered table-striped" border="1">
<thead>
<tr>
<th> <center> No </center></th>
<th><center> NIK Pemohon </center></th>
<th><center> Nama Lengkap </center></th>
<th><center> Tanggal Lahir </center></th>
<th><center> Alamat </center></th>
<th><center> Jenis Kelamin </center></th>
<th><center> Pekerjaan </center></th>
<th><center> Kewarganegaraan </center></th>
<th><center> Email </center></th>

</tr>

</thead>
<tbody>

<?php


$sql = "select * from tb_pemohon order by nik_pemohon desc";

$result = mysqli_query($koneksi, $sql);

if ($result->num_rows > 0) {

$no = 0;

while($row = mysqli_fetch_assoc($result)) {

$no++;

?>

<tr>

<td> <center> <?=$no;?> </center></td>
<td> <center><?=$row['nik_pemohon'];?> </center></td>
<td> <center><?=$row['nama_lengkap'];?> </center></td>
<td> <center><?=$row['alamat'];?> </center></td>
<td> <center><?=tgl_indo($row['tanggal_lahir']);?> </center></td>
<td> <center><?=$row['jenis_kelamin'];?> </center></td>
<td> <center><?=$row['pekerjaan'];?> </center></td>
<td> <center><?=$row['kewarganegaraan'];?> </center></td>
<td> <center><?=$row['email'];?> </center></td>


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
