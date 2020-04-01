<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!DOCTYPE html>

<html>

<head>


	<meta charset="UTF-8">
	<title><?php echo $judul;?></title>
	<meta name="description" content="">

<!-- css -->

  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/metis-menu/dist/metisMenu.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/venus.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
<!-- js -->



</head>
<body>
<div class="container">
<h2>
CRUD Dengan AJAX CI </h2>
<br>

<button class="btn btn-primary" onclick="tambah_user()"> Tambah Data </button>
<br>
<br>

 <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
	<tr>
	<th> No </th>
	<th> Nama </th>
	<th> Jabatan </th>
    <th> No HP </th>
    <th> Username </th>
	<th> Password </th>
	</tr>
	</thead>

    <tbody>
        
    </tbody>

</tabel>

</div>


  <!-- modal tambah user-->
  
    <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Menu Gallery</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_gallery"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input name="nama_gallery" placeholder="Nama Lengkap" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div class="col-md-9">
                                <input name="keterangan" placeholder="Jabatan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                          <div class="form-group">
                            <label class="control-label col-md-3">No HP</label>
                            <div class="col-md-9">
                                <input name="keterangan" placeholder="Nomor HP" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input name="keterangan" placeholder="Username" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="keterangan" placeholder="Password" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
  
<!-- end nyoba modal -->


<!-- JQUery dimulai disini -->
<script src="<?php echo base_url('assets/jquery-3.2.1.min.js') ?>"></script>


    <script type="text/javascript">
    var table, save_method;
    var base_url = '<?php echo base_url();?>';

    // function show_list


    $(document).ready(function(){
        table = $('#table').DataTable({ 
            "processing": true,
            "serverSide": true, 
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('learn/ajax_list')?>",
                "type": "POST"
            },
            "columnDefs": [{ 
                "targets": [ -1 ], 
                "orderable": false, 
            },
            ],
        });
    });

</script>
<!-- End JQuery -->


<script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/metis-menu/dist/metisMenu.min.js') ?>"></script>
<script src="<?php echo base_url('assets/venus.js') ?>"></script>
<script src="<?php echo base_url('assets/dataTables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/dataTables/js/dataTables.bootstrap.js')?>"></script>

</body>






</html>