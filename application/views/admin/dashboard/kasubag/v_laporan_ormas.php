<!-- Menu -->
<?=$header;?>
<!-- End Menu -->



<!-- Isi Konten Disini -->
<div class="right_col" role="main">
        
<h3>Cetak Laporan Permohonan Pembentukan Ormas</h3>
<hr>

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">

	<h4> <i class="fa fa-book"> </i> &nbsp; Laporan  Surat Permohonan Pembentukan Ormas </h4>
	<br>

    <form method="post" action="<?=base_url();?>laporan/laporan_ormas.php" enctype="multipart/form-data" target="_blank">
            
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Dari Tanggal</label> 
                <input class='form-control' type='date' name='dari_tgl' value='' />
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Sampai Tanggal</label>
                <input class='form-control' type='date' name='sampai_tgl' value='' />
            </div>
            <div class="form-group col-md-6">

            <button class="btn btn-success" type="submit"><i class="fa fa-print"></i> Cetak Laporan Permohonan</button>
        </div>
          
    </form>

    
</div>

</div>

</div>
</div>
</div>


<!-- End Konten  -->


<!-- Footer -->
<?=$footer;?>
<!-- End Footer-->
