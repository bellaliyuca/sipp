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

<button class="btn btn-primary" data-toggle="modal" data-target="#modal_form" > Tambah Data </button>
<br>
<br>

 <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
	<tr>
	<th> ID User </th>
	<th> Nama </th>
	<th> Jabatan </th>
    <th> No HP </th>
    <th> Username </th>
    <th> Password </th>
	<th colspan="2" style="text-align:center"> Aksi </th>
	</tr>
	</thead>

	<tbody id = "target">
	
	</tbody>

</tabel>

</div>


  <!-- modal tambah user-->
  
    <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Data User</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_gallery"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input id="nama" placeholder="Nama Lengkap" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div class="col-md-9">
                                <input id="jabatan" placeholder="Jabatan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                          <div class="form-group">
                            <label class="control-label col-md-3">No HP</label>
                            <div class="col-md-9">
                                <input id="nohp" placeholder="Nomor HP" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input id="username" placeholder="Username" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input id="password" placeholder="Password" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_simpan" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
  
<!-- end modal user -->

 <!-- modal edit user-->
  
    <div class="modal fade" id="modal_edit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Data User</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_gallery"/> 
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input id="nama2" placeholder="Nama Lengkap" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div class="col-md-9">
                                <input id="jabatan2" placeholder="Jabatan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                          <div class="form-group">
                            <label class="control-label col-md-3">No HP</label>
                            <div class="col-md-9">
                                <input id="nohp2" placeholder="Nomor HP" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input id="username2" placeholder="Username" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input id="password2" placeholder="Password" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_edit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
  
<!-- end modal edit user -->


<!-- Modal Hapus Data User -->

     <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data User</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                           
                            <input type="hidden" name="id" id="textid" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus data user ini?</p></div>
                                         
                    </div>
                    <div class="modal-footer">
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

<!-- End Modal Hapus Data User -->

<script src="<?php echo base_url('assets/jquery-3.2.1.min.js') ?>"></script>    


<script type="text/javascript">

    $(document).ready(function(){

    ambilData();


    $('#table').DataTable();
  
	function ambilData(){
		$.ajax({
			type:'POST',
			url: '<?php echo base_url()."page/ambilData"?>',
			dataType : 'json',
			success: function(data){
			var baris = '';

				for(var i=0;i < data.length;i++) {

					baris += '<tr>'+
					'<td>' + data[i].iduser + '</td>'+	
					'<td>' + data[i].nama + '</td>'+	
					'<td>' + data[i].jabatan + '</td>'+	
                    '<td>' + data[i].no_hp + '</td>'+ 
                    '<td>' + data[i].username + '</td>'+ 
                    '<td>' + data[i].password + '</td>'+    
				     
                    '<td style="text-align:center;">'+
                     '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].iduser+'">Edit</a>'+' '+
                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].iduser+'">Hapus</a>'+
                    '</td>'+
					'</tr>';

				  }
 


				$('#target').html(baris);
		      	}

		  })
    	}


/* ===================================================  */
/* Function tampil modal user  */

                  function tampil_modal_user(){
                    $('#form')[0].reset(); 
                    $('#modal_form').modal('show');
                    $('.form-group').removeClass('has-error'); 
                    $('.help-block').empty(); 
                    $('.modal-title').text('Tambah User');
                }

// end function tambah_user


/* ===================================================  */
/* Function simpan data user  */

            $('#btn_simpan').on('click',function(){
            var nama=$('#nama').val();
            var jabatan=$('#jabatan').val();
            var nohp=$('#nohp').val();
            var username=$('#username').val();
            var password=$('#password').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('page/simpanUsers')?>",
                dataType : "JSON",
                data : {nama:nama , jabatan:jabatan, nohp:nohp, username:username , password:password},
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="jabatan"]').val("");
                    $('[name="nohp"]').val("");
                    $('[name="username"]').val("");
                    $('[name="password"]').val("");
                    $('#modal_form').modal('hide');
                    ambilData();
                }
            });
            return false;
        });

// End function tambah_user


/* ===================================================  */
/* Function Muncul modal hapus data user  */
        $('#target').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="id"]').val(id);
        });

// End function hapus data user


/* ===================================================  */
/* Function Hapus data user  */

       //Hapus User
        $('#btn_hapus').on('click',function(){
            var id=$('#textid').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('page/hapusUsers')?>",
            dataType : "JSON",
                    data : {id: id},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            ambilData();
                    }
                });
                return false;
            });
 
    });

// End function hapus


/* ================================================== */
/* Function Update Data User */

    //Update User

     $('#btn_edit').on('click',function(){
            var nama=$('#nama2').val();
            var jabatan=$('#jabatan2').val();
            var nohp=$('#nohp2').val();
            var username=$('#username2').val();
            var password=$('#password2').val();
             $.ajax({
                type : "POST",
                url  : "<?php echo base_url('page/updateUsers')?>",
                dataType : "JSON",
                data : {nama:nama , jabatan:jabatan, nohp:nohp, username:username , password:password},
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="jabatan"]').val("");
                    $('[name="nphp"]').val("");
                    $('[name="username"]').val("");
                    $('[name="password"]').val("");
                    $('#modal_form').modal('hide');
                    ambilData();
                }
            });

                return false;
        });

/* End Function Update Data User */


/**
    Get Users
 */

      $('#target').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('page/getUsers')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(nama, jabatan, no_hp,username,password){
                        $('#modal_edit').modal('show');
                        $('[name="nama"]').val(data.nama);
                        $('[name="jabatan"]').val(data.jabatan);
                        $('[name="no_hp"]').val(data.no_hp);
                        $('[name="username"]').val(data.username);
                        $('[name="password"]').val(data.password);
                    });
                }
            });
            return false;
        });

/* End  Get Users */

</script>




	 <script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>
		
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/metis-menu/dist/metisMenu.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/venus.js') ?>"></script>

<script src="<?php echo base_url('assets/dataTables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/dataTables/js/dataTables.bootstrap.js')?>"></script>

</body>






</html>