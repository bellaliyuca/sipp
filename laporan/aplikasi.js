(function($) {
	// fungsi dijalankan setelah seluruh dokumen ditampilkan
	$(document).ready(function(e) {

		// deklarasikan variabel
		var kd_mhs = 0;
		var main = "mahasiswa.data.php";

		// tampilkan data mahasiswa dari berkas mahasiswa.data.php
		// ke dalam <div id="data-mahasiswa"></div>
		$("#data-mahasiswa").load(main);

		// ketika inputbox pencarian diisi
		$('input:text[name=pencarian]').on('input',function(e){
			var v_cari = $('input:text[name=pencarian]').val();

			if(v_cari!="") {
				$.post(main, {cari: v_cari} ,function(data) {
					// tampilkan data mahasiswa yang sudah di perbaharui
					// ke dalam <div id="data-mahasiswa"></div>
					$("#data-mahasiswa").html(data).show();
				});
			} else {
				// tampilkan data mahasiswa dari berkas mahasiswa.data.php
				// ke dalam <div id="data-mahasiswa"></div>
				$("#data-mahasiswa").load(main);
			}
		});

		// ketika tombol ubah/tambah ditekan
		$('.ubah, .tambah').live("click", function(){

			var url = "mahasiswa.form.php";
			// ambil nilai id dari tombol ubah
			kd_mhs = this.id;

			if(kd_mhs != 0) {
				// ubah judul modal dialog
				$("#myModalLabel").html("Ubah Data Mahasiswa");
			} else {
				// saran dari mas hangs
				$("#myModalLabel").html("Tambah Data Mahasiswa");
			}

			$.post(url, {id: kd_mhs} ,function(data) {
				// tampilkan mahasiswa.form.php ke dalam <div class="modal-body"></div>
				$(".modal-body").html(data).show();
			});
		});

		// ketika tombol hapus ditekan
		$('.hapus').live("click", function(){
			var url = "mahasiswa.input.php";
			// ambil nilai id dari tombol hapus
			kd_mhs = this.id;

			// tampilkan dialog konfirmasi
			var answer = confirm("Apakah anda ingin mengghapus data ini?");

			// ketika ditekan tombol ok
			if (answer) {
				// mengirimkan perintah penghapusan ke berkas transaksi.input.php
				$.post(url, {hapus: kd_mhs} ,function() {
					// tampilkan data mahasiswa yang sudah di perbaharui
					// ke dalam <div id="data-mahasiswa"></div>
					$("#data-mahasiswa").load(main);
				});
			}
		});

		// ketika tombol halaman ditekan
		$('.halaman').live("click", function(event){
			// mengambil nilai dari inputbox
			kd_hal = this.id;

			$.post(main, {halaman: kd_hal} ,function(data) {
				// tampilkan data mahasiswa yang sudah di perbaharui
				// ke dalam <div id="data-mahasiswa"></div>
				$("#data-mahasiswa").html(data).show();
			});
		});

		// ketika tombol simpan ditekan
		$("#simpan-mahasiswa").bind("click", function(event) {
			var url = "mahasiswa.input.php";

			// mengambil nilai dari inputbox, textbox dan select
			var v_nim = $('input:text[name=nim]').val();
			var v_nama = $('input:text[name=nama]').val();
			var v_alamat = $('textarea[name=alamat]').val();
			var v_kelas = $('select[name=kelas]').val();
			var v_status = $('select[name=status]').val();

			// mengirimkan data ke berkas transaksi.input.php untuk di proses
			$.post(url, {nim: v_nim, nama: v_nama, alamat: v_alamat, kelas: v_kelas, status: v_status, id: kd_mhs} ,function() {
				// tampilkan data mahasiswa yang sudah di perbaharui
				// ke dalam <div id="data-mahasiswa"></div>
				$("#data-mahasiswa").load(main);

				// sembunyikan modal dialog
				$('#dialog-mahasiswa').modal('hide');

				// kembalikan judul modal dialog
				$("#myModalLabel").html("Tambah Data Mahasiswa");
			});
		});
	});
}) (jQuery);
