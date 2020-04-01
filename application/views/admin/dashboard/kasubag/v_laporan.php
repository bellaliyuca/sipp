<!-- Menu -->
<?=$header;?>
<!-- End Menu -->



<!-- Isi Konten Disini -->
<div class="right_col" role="main">
        
<h3>Cetak Laporan Pemohon</h3>
<hr>

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">

<div class="x_panel">

	<h4> <i class="fa fa-user"> </i> &nbsp; Laporan Pemohon </h4>
	<br>

    <form method="post" action="<?=base_url();?>laporan/laporan_pemohon.php" enctype="multipart/form-data" target="_blank">
            
    <div class="form-group col-md-6">
    <button class="btn btn-success" type="submit"><i class="fa fa-print"></i> Cetak Semua Laporan Pemohon</button>
	</div>
          
    </form>

    
</div>

</div>
</div>
</div>


<!-- End Konten  -->


<!-- Footer -->
<?=$footer;?>
<!-- End Footer-->
