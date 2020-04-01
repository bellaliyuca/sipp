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
                    $('#data-mahasiswa').printArea();
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
            <a class="brand" href="#">Laporan User</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="val" align="center">

        <h3>
            
            <button id="cetak" class="btn pull-right">Cetak</button>
        </h3>
        <br>
        
        <div id="data-mahasiswa" align="center">
        
<center>
  <h5>Laporan User</h5>
</center>


</p>

                    <table class="table table-bordered table-striped" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir </th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Username</th>
                               
                            </tr>
                        </thead>
                                <tbody>

                                <?php
                                
                                $sql = "select * from tb_login where tb_login.group = 2" ;
                                $result = mysqli_query($koneksi, $sql);

                                if ($result->num_rows > 0) {

                                 $no = 0;
                                    
                                    while($row = mysqli_fetch_assoc($result)) {
                               

                                    
                                    $no++;
                                
                                ?>

                                    <tr>

                                <td><?=$no;?></td>
                                <td><?=$row['id'];?></td>
                                <td><?=$row['nama'];?></td>
                                <td><?=$row['alamat'];?></td>
                                <td><?=$row['tgl_lahir'];?></td>
                                <td><?=$row['jenis_kelamin'];?></td>
                                <td><?=$row['email'];?></td>
                                <td><?=$row['username'];?></td>
                            
                               
                            <?php }
                            }
                            ;?>


                                    </tr>
                                   
                                </tbody>
                            </table>

                        
                           
                            <br>

                           

</div>



</body>
</html>
