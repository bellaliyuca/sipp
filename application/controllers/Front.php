<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function __construct(){

		parent::__construct();		
        $this->load->model('M_Users','u');
        $this->load->model('M_Admin','a');
        $this->load->library('pagination');

		}


	public function index()
	{
		$data['title'] = "Sistem Informasi Pelayanan Publik";
		$data['nik'] = $this->session->userdata('nik_pemohon');		
		$data['header'] = $this->load->view('front/template/v_header',$data,true);     
		$data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
		$this->load->view('front/v_beranda',$data);
	}

	public function daftar()
	{
		$data['title'] = "Daftar Pemohon";
		$data['nik'] = $this->session->userdata('nik_pemohon');		
		$data['header'] = $this->load->view('front/template/v_header',$data,true);     
		$data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
		$this->load->view('front/isi/v_daftar',$data);
	}

    public function pengaturan_akun()
    {
        $data['title'] = "Daftar Pemohon";
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $nik = $this->session->userdata('nik_pemohon');     
        $data['det_akun'] = $this->u->find_nik('tb_pemohon',$nik);
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
        $this->load->view('front/isi/v_pengaturan_akun',$data);
    }


    public function update_akun() {
     $nik = $this->input->post('nik'); 
     $password = md5($this->input->post('password')); 
     $data_utama = array(
        'password' => $password
     );
     $this->u->update_akun('tb_pemohon',$nik,$data_utama);
     $this->session->set_flashdata('ubah', 'Berhasil Ubah Akun');
     redirect($_SERVER['HTTP_REFERER']);
     // redirect('admin/permohonan_verifikasi');

    }

	public function izin_riset()
	{
		$data['title'] = "Syarat Izin Riset";
		$data['nik'] = $this->session->userdata('nik_pemohon');		
		$data['header'] = $this->load->view('front/template/v_header',$data,true);     
		$data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
		$this->load->view('front/isi/v_izin_riset',$data);
	}

	public function form_izin_riset()
	{
		$data['title'] = "Form Izin Riset";
        $data['kodeunik'] = $this->u->kode_unik();
		$data['nik'] = $this->session->userdata('nik_pemohon');		
		$data['header'] = $this->load->view('front/template/v_header',$data,true);     
		$data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
		$this->load->view('front/isi/v_izin_riset_ljt',$data);
	}

	public function simpan_izin(){


        if(isset($_POST['submit'])) {

         $nmfile = "file_".time();
         $config['upload_path']   = './file/syarat_izin'; 
         $config['allowed_types'] = 'jpg|png|jpeg|pdf'; 
         $config['max_size']      =  '8000'; 
         $config['max_width'] = '0';
         $config['max_height'] = '0';
         $config['remove_spaces'] = TRUE;
         $config['file_name'] = $nmfile;

         $this->upload->initialize($config);
         $this->load->library('upload', $config);
        

        if(!empty($_FILES['scan_ktp']['name'])){
         $this->upload->do_upload('scan_ktp');
         $data1 = $this->upload->data();
         $file1 = $data1['file_name'];
         }
          else {            
            @unlink("./file/syarat_izin/".$file1);
            @unlink("./file/syarat_izin/".$file2);
            @unlink("./file/syarat_izin/".$file3);
            @unlink("./file/syarat_izin/".$file4);
            @unlink("./file/syarat_izin/".$file5);
            $this->session->set_flashdata("pesan1","Upload File KTP Terlebih Dahulu");
            redirect($_SERVER['HTTP_REFERER']);
          }

        if(!empty($_FILES['file_proposal']['name'])){
         $this->upload->do_upload('file_proposal');
         $data2 = $this->upload->data();
         $file2 = $data2['file_name'];
          }
          else {
             @unlink("./file/syarat_izin/".$file1);
            @unlink("./file/syarat_izin/".$file2);
            @unlink("./file/syarat_izin/".$file3);
            @unlink("./file/syarat_izin/".$file4);
            @unlink("./file/syarat_izin/".$file5);
            $this->session->set_flashdata("pesan2","Upload File Proposal Terlebih Dahulu");
            redirect($_SERVER['HTTP_REFERER']);
          }

         if(!empty($_FILES['scan_ktm']['name'])){
         $this->upload->do_upload('scan_ktm');
         $data3 = $this->upload->data();
         $file3 = $data3['file_name'];
          }
          else {
            @unlink("./file/syarat_izin/".$file1);
            @unlink("./file/syarat_izin/".$file2);
            @unlink("./file/syarat_izin/".$file3);
            @unlink("./file/syarat_izin/".$file4);
            @unlink("./file/syarat_izin/".$file5);
            $this->session->set_flashdata("pesan3","Upload File KTM Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

        

        if(!empty($_FILES['s_pengantar']['name'])){
         $this->upload->do_upload('s_pengantar');
         $data4= $this->upload->data();
         $file4 = $data4['file_name'];
          }
          else {
             @unlink("./file/syarat_izin/".$file1);
            @unlink("./file/syarat_izin/".$file2);
            @unlink("./file/syarat_izin/".$file3);
            @unlink("./file/syarat_izin/".$file4);
            @unlink("./file/syarat_izin/".$file5);
            $this->session->set_flashdata("pesan4"," Upload Pengantar Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

         if(!empty($_FILES['foto']['name'])){
         $this->upload->do_upload('foto');
         $data5= $this->upload->data();
         $file5 = $data5['file_name'];
          }
          else {
            @unlink("./file/syarat_izin/".$file1);
            @unlink("./file/syarat_izin/".$file2);
            @unlink("./file/syarat_izin/".$file3);
            @unlink("./file/syarat_izin/".$file4);
            @unlink("./file/syarat_izin/".$file5);
            $this->session->set_flashdata("pesan5"," Upload Foto Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }


        $nik = $this->input->post('nik');
        $id_surat = $this->input->post('id_surat');
        $judul = $this->input->post('judul');
        $npm = $this->input->post('npm');
        $tujuan = $this->input->post('tujuan');
        $lokasi = $this->input->post('lokasi');
        $sumber = $this->input->post('sumber');
        $jenis = 'Izin Riset';
        $tanggal = date('Y-m-d');
       
        $data_surat = ['id_surat_pengantar'=>$id_surat , 'nik_pemohon'=>$nik , 'tgl_upload'=>$tanggal,  'file_surat'=>$file4 , 'jenis_surat'=>$jenis ,'tgl_upload'=>$tanggal , 'status'=>'Menunggu'];

        $data_syarat = ['nik_pemohon'=>$nik ,'id_surat_pengantar'=>$id_surat , 'file_ktp'=>$file1 , 'file_proposal'=> $file2, 'file_ktm'=>$file3 , 'foto'=>$file5];

        $data_izin = ['nik_pemohon'=>$nik ,'id_izin_riset'=>$id_surat , 'sumber_surat'=>$sumber , 'npm'=>$npm , 'tujuan'=> $tujuan, 'lokasi_penelitian'=>$lokasi, 'judul_penelitian'=>$judul];

        $insert_data = $this->u->insert_dt('tb_izin_riset',$data_izin);

        $insert_data_2 = $this->u->insert_dt('tb_surat_pengantar',$data_surat); 

        $insert_data_3 = $this->u->insert_dt('tb_persyaratan',$data_syarat); 

        if($insert_data && $insert_data_2 && $insert_data_3 ){
        $this->session->set_flashdata("pesan","Berhasil Ajukan Permohonan");
        redirect($_SERVER['HTTP_REFERER']);
        }

      }

    }

    public function tanda_lapor()
    {
        $data['title'] = "Syarat Tanda Lapor";
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
        $this->load->view('front/isi/v_tanda_lapor',$data);
    }

    public function form_tanda_lapor()
    {
        $data['title'] = "Form Tanda Lapor";
        $data['kodeunik'] = $this->u->kode_unik();
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
        $this->load->view('front/isi/v_tanda_lapor_ljt',$data);
    }

    public function simpan_lapor(){


        if(isset($_POST['submit'])) {

         $nmfile = "file_".time();
         $config['upload_path']   = './file/syarat_wna'; 
         $config['allowed_types'] = 'jpg|png|jpeg|pdf'; 
         $config['max_size']      =  '8000'; 
         $config['max_width'] = '0';
         $config['max_height'] = '0';
         $config['remove_spaces'] = TRUE;
         $config['file_name'] = $nmfile;

         $this->upload->initialize($config);
         $this->load->library('upload', $config);

        if(!empty($_FILES['scan_paspor']['name'])){
         $this->upload->do_upload('scan_paspor');
         $data1 = $this->upload->data();
         $file1 = $data1['file_name'];
         }
          else {            
            @unlink("./file/syarat_wna/".$file1);
            @unlink("./file/syarat_wna/".$file2);
            @unlink("./file/syarat_wna/".$file4);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file7);
            $this->session->set_flashdata("pesan1","Upload File Paspor Terlebih Dahulu");
            redirect($_SERVER['HTTP_REFERER']);
          }

        if(!empty($_FILES['foto']['name'])){
         $this->upload->do_upload('foto');
         $data2 = $this->upload->data();
         $file2 = $data2['file_name'];
          }
          else {
            @unlink("./file/syarat_wna/".$file1);
            @unlink("./file/syarat_wna/".$file2);
            @unlink("./file/syarat_wna/".$file4);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file7);
            $this->session->set_flashdata("pesan2","Upload Foto Terlebih Dahulu");
            redirect($_SERVER['HTTP_REFERER']);
          }
    

        if(!empty($_FILES['s_pengantar']['name'])){
         $this->upload->do_upload('s_pengantar');
         $data4= $this->upload->data();
         $file4 = $data4['file_name'];
          }
          else {
            @unlink("./file/syarat_wna/".$file1);
            @unlink("./file/syarat_wna/".$file2);
            @unlink("./file/syarat_wna/".$file4);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file7);
            $this->session->set_flashdata("pesan4"," Upload pengantar Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

         if(!empty($_FILES['ket_kementrian']['name'])){
         $this->upload->do_upload('ket_kementrian');
         $data5= $this->upload->data();
         $file5 = $data5['file_name'];
          }
          else {
            @unlink("./file/syarat_wna/".$file1);
            @unlink("./file/syarat_wna/".$file2);
            @unlink("./file/syarat_wna/".$file4);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file7);
            $this->session->set_flashdata("pesan5"," Upload Keterangan Kementrian RI Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

         if(!empty($_FILES['izin_tinggal']['name'])){
         $this->upload->do_upload('izin_tinggal');
         $data6= $this->upload->data();
         $file6 = $data6['file_name'];
          }
          else {
            @unlink("./file/syarat_wna/".$file1);
            @unlink("./file/syarat_wna/".$file2);
            @unlink("./file/syarat_wna/".$file4);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file7);
            $this->session->set_flashdata("pesan6"," Upload Izin Tinggal Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

         if(!empty($_FILES['tanda_lapor']['name'])){
         $this->upload->do_upload('tanda_lapor');
         $data7= $this->upload->data();
         $file7 = $data7['file_name'];
          }
          else {
            @unlink("./file/syarat_wna/".$file1);
            @unlink("./file/syarat_wna/".$file2);
            @unlink("./file/syarat_wna/".$file4);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file6);
            @unlink("./file/syarat_wna/".$file7);
            $this->session->set_flashdata("pesan7"," Upload Tanda Lapor Kepolisian Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

        $nik = $this->input->post('nik');
    
        $id_surat = $this->input->post('id_surat');
        $alamat = $this->input->post('alamat');
        $nama_wna = $this->input->post('nama_wna');
        $jk = $this->input->post('jenis_kelamin');
        $tgl_lahir = $this->input->post('tanggal_lahir');
        $pekerjaan = $this->input->post('pekerjaan');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $nik = $this->session->userdata('nik_pemohon');     
        $paspor = $this->input->post('paspor');
        $kitas = $this->input->post('kitas');
        $sumber = $this->input->post('sumber');
        $jenis = 'Lapor WNA';
        $tanggal = date('Y-m-d');
       
        $data_surat = ['id_surat_pengantar'=>$id_surat , 'tgl_upload'=>$tanggal, 'file_surat'=>$file4 , 'jenis_surat'=>$jenis, 'nik_pemohon' =>$nik, 'status'=>'Menunggu'];

        $data_syarat = ['nik_pemohon'=>$nik ,'id_surat_pengantar'=>$id_surat ,'file_ktp'=>$file1 , 'foto'=> $file2 , 'ket_kementrian' => $file5 , 'izin_tinggal' => $file6, 'tanda_lapor' => $file7];

        $data_wna = ['alamat_sementara'=>$alamat, 'sumber_surat'=>$sumber , 'nama_wna'=>$nama_wna,'jenis_kelamin'=>$jk,'tgl_lahir'=>$tgl_lahir,'pekerjaan'=>$pekerjaan,'kewarganegaraan'=>$kewarganegaraan,'no_paspor'=>$paspor , 'no_kitas'=>$kitas ,'nik_pemohon'=>$nik,'id_wna'=>$id_surat ];

        $insert_data = $this->u->insert_dt('tb_surat_pengantar',$data_surat); 

        $insert_data_2 = $this->u->insert_dt('tb_persyaratan',$data_syarat); 

        $insert_data_3 = $this->u->insert_dt('tb_wna',$data_wna); 

        if($insert_data && $insert_data_2 ){

        $this->session->set_flashdata("pesan","Berhasil Ajukan Permohonan");

        redirect($_SERVER['HTTP_REFERER']);
        }

      }

    }

    public function keberadaan_ormas()
    {
        $data['title'] = "Syarat Keberadaan Ormas";
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
        $this->load->view('front/isi/v_ormas',$data);
    }

    public function form_keberadaan_ormas()
    {
        $data['title'] = "Form Keberadaan Ormas";
        $data['kodeunik'] = $this->u->kode_unik();
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
        $this->load->view('front/isi/v_ormas_ljt',$data);
    }

     public function simpan_ormas(){


        if(isset($_POST['submit'])) {

         $nmfile = "file_".time();
         $config['upload_path']   = './file/syarat_ormas'; 
         $config['allowed_types'] = 'jpg|png|jpeg|pdf'; 
         $config['max_size']      =  '8000'; 
         $config['max_width'] = '0';
         $config['max_height'] = '0';
         $config['remove_spaces'] = TRUE;
         $config['file_name'] = $nmfile;

         $this->upload->initialize($config);
         $this->load->library('upload', $config);

        if(!empty($_FILES['scan_ktp']['name'])){
         $this->upload->do_upload('scan_ktp');
         $data1 = $this->upload->data();
         $file1 = $data1['file_name'];
         }
          else {            
            @unlink("./file/syarat_ormas/".$file1);
            @unlink("./file/syarat_ormas/".$file2);
            @unlink("./file/syarat_ormas/".$file3);
            @unlink("./file/syarat_ormas/".$file4);
            @unlink("./file/syarat_ormas/".$file5);
            @unlink("./file/syarat_ormas/".$file6);
            @unlink("./file/syarat_ormas/".$file7);
            @unlink("./file/syarat_ormas/".$file8);
            @unlink("./file/syarat_ormas/".$file9);
            $this->session->set_flashdata("pesan1","Upload File KTP Terlebih Dahulu");
            redirect($_SERVER['HTTP_REFERER']);
          }

        if(!empty($_FILES['struktur']['name'])){
         $this->upload->do_upload('struktur');
         $data2 = $this->upload->data();
         $file2 = $data2['file_name'];
          }
          else {
            @unlink("./file/syarat_ormas/".$file1);
            @unlink("./file/syarat_ormas/".$file2);
            @unlink("./file/syarat_ormas/".$file3);
            @unlink("./file/syarat_ormas/".$file4);
            @unlink("./file/syarat_ormas/".$file5);
            @unlink("./file/syarat_ormas/".$file6);
            @unlink("./file/syarat_ormas/".$file7);
            @unlink("./file/syarat_ormas/".$file8);
            @unlink("./file/syarat_ormas/".$file9);
            $this->session->set_flashdata("pesan2","Upload Struktur Organisasi Terlebih Dahulu");
            redirect($_SERVER['HTTP_REFERER']);
          }
    

        if(!empty($_FILES['foto']['name'])){
         $this->upload->do_upload('foto');
         $data3= $this->upload->data();
         $file3 = $data3['file_name'];
          }
          else {
            @unlink("./file/syarat_ormas/".$file1);
            @unlink("./file/syarat_ormas/".$file2);
            @unlink("./file/syarat_ormas/".$file3);
            @unlink("./file/syarat_ormas/".$file4);
            @unlink("./file/syarat_ormas/".$file5);
            @unlink("./file/syarat_ormas/".$file6);
            @unlink("./file/syarat_ormas/".$file7);
            @unlink("./file/syarat_ormas/".$file8);
            @unlink("./file/syarat_ormas/".$file9);
            $this->session->set_flashdata("pesan3"," Upload Foto Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

        if(!empty($_FILES['s_pengantar']['name'])){
         $this->upload->do_upload('s_pengantar');
         $data4= $this->upload->data();
         $file4 = $data4['file_name'];
          }
          else {
            @unlink("./file/syarat_ormas/".$file1);
            @unlink("./file/syarat_ormas/".$file2);
            @unlink("./file/syarat_ormas/".$file3);
            @unlink("./file/syarat_ormas/".$file4);
            @unlink("./file/syarat_ormas/".$file5);
            @unlink("./file/syarat_ormas/".$file6);
            @unlink("./file/syarat_ormas/".$file7);
            @unlink("./file/syarat_ormas/".$file8);
            @unlink("./file/syarat_ormas/".$file9);
            $this->session->set_flashdata("pesan4"," Upload pengantar Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

        if(!empty($_FILES['akta']['name'])){
         $this->upload->do_upload('akta');
         $data5= $this->upload->data();
         $file5 = $data5['file_name'];
          }
          else {
            @unlink("./file/syarat_ormas/".$file1);
            @unlink("./file/syarat_ormas/".$file2);
            @unlink("./file/syarat_ormas/".$file3);
            @unlink("./file/syarat_ormas/".$file4);
            @unlink("./file/syarat_ormas/".$file5);
            @unlink("./file/syarat_ormas/".$file6);
            @unlink("./file/syarat_ormas/".$file7);
            @unlink("./file/syarat_ormas/".$file8);
            @unlink("./file/syarat_ormas/".$file9);
            $this->session->set_flashdata("pesan5"," Upload Akta Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

        if(!empty($_FILES['sengketa']['name'])){
         $this->upload->do_upload('sengketa');
         $data6= $this->upload->data();
         $file6 = $data6['file_name'];
          }
          else {
            @unlink("./file/syarat_ormas/".$file1);
            @unlink("./file/syarat_ormas/".$file2);
            @unlink("./file/syarat_ormas/".$file3);
            @unlink("./file/syarat_ormas/".$file4);
            @unlink("./file/syarat_ormas/".$file5);
            @unlink("./file/syarat_ormas/".$file6);
            @unlink("./file/syarat_ormas/".$file7);
            @unlink("./file/syarat_ormas/".$file8);
            @unlink("./file/syarat_ormas/".$file9);
            $this->session->set_flashdata("pesan6"," Upload Keterangan Tidak Sengketa Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

        if(!empty($_FILES['domisili_ormas']['name'])){
         $this->upload->do_upload('domisili_ormas');
         $data7= $this->upload->data();
         $file7 = $data7['file_name'];
          }
          else {
            @unlink("./file/syarat_ormas/".$file1);
            @unlink("./file/syarat_ormas/".$file2);
            @unlink("./file/syarat_ormas/".$file3);
            @unlink("./file/syarat_ormas/".$file4);
            @unlink("./file/syarat_ormas/".$file5);
            @unlink("./file/syarat_ormas/".$file6);
            @unlink("./file/syarat_ormas/".$file7);
            @unlink("./file/syarat_ormas/".$file8);
            @unlink("./file/syarat_ormas/".$file9);
            $this->session->set_flashdata("pesan7"," Upload Domisili Ormas Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

        if(!empty($_FILES['susunan_pengurus']['name'])){
         $this->upload->do_upload('susunan_pengurus');
         $data8= $this->upload->data();
         $file8 = $data8['file_name'];
          }
          else {
            @unlink("./file/syarat_ormas/".$file1);
            @unlink("./file/syarat_ormas/".$file2);
            @unlink("./file/syarat_ormas/".$file3);
            @unlink("./file/syarat_ormas/".$file4);
            @unlink("./file/syarat_ormas/".$file5);
            @unlink("./file/syarat_ormas/".$file6);
            @unlink("./file/syarat_ormas/".$file7);
            @unlink("./file/syarat_ormas/".$file8);
            @unlink("./file/syarat_ormas/".$file9);
            $this->session->set_flashdata("pesan8","Upload Susunan Pengurus Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

         if(!empty($_FILES['program_kerja']['name'])){
         $this->upload->do_upload('program_kerja');
         $data9= $this->upload->data();
         $file9 = $data9['file_name'];
          }
          else {
            @unlink("./file/syarat_ormas/".$file1);
            @unlink("./file/syarat_ormas/".$file2);
            @unlink("./file/syarat_ormas/".$file3);
            @unlink("./file/syarat_ormas/".$file4);
            @unlink("./file/syarat_ormas/".$file5);
            @unlink("./file/syarat_ormas/".$file6);
            @unlink("./file/syarat_ormas/".$file7);
            @unlink("./file/syarat_ormas/".$file8);
            @unlink("./file/syarat_ormas/".$file9);
            $this->session->set_flashdata("pesan9"," Upload Program Kerja Terlebih Dahulu");
           
           redirect($_SERVER['HTTP_REFERER']);
          }

        $nik = $this->input->post('nik');
        $perihal = $this->input->post('perihal');
        $keperluan = $this->input->post('keperluan');
        $id_surat = $this->input->post('id_surat');
        $nama_org = $this->input->post('organisasi');
        $alamat_org = $this->input->post('alamat');
        $jabatan = $this->input->post('jabatan');
        $tingkat = $this->input->post('tingkat');
        $legalitas = $this->input->post('legalitas');
        $ketua = $this->input->post('ketua');
        $sekretaris = $this->input->post('sekretaris');
        $bendahara = $this->input->post('bendahara');
        $jenis = 'Keberadaan Ormas';
        $tanggal = date('Y-m-d');
        $sumber = $this->input->post('sumber');
       
        $data_surat = ['id_surat_pengantar'=>$id_surat , 'nik_pemohon'=>$nik , 'tgl_upload'=>$tanggal, 'file_surat'=>$file4 , 'jenis_surat'=>$jenis , 'tgl_upload'=>$tanggal ,'status' => 'Menunggu'];

        $data_syarat = ['nik_pemohon'=>$nik ,'id_surat_pengantar'=>$id_surat ,'file_ktp'=>$file1 , 'file_struktur'=> $file2 , 'foto'=> $file3, 'akta_notaris' => $file5, 'sengketa' => $file6, 'domisili_ormas' => $file7, 'susunan_pengurus' => $file8 , 'program_kerja' => $file9];

        $data_ormas = ['id_ormas'=>$id_surat ,'jabatan'=>$jabatan ,'nama_organisasi'=>$nama_org , 'alamat_organisasi'=> $alamat_org , 'tingkat_kepengurusan'=> $tingkat , 'sumber_surat'=> $sumber, 'legalitas'=> $legalitas , 'ketua'=> $ketua, 'sekretaris'=> $sekretaris , 'bendahara'=> $bendahara , 'nik_pemohon' => $nik ];

        $insert_data = $this->u->insert_dt('tb_ormas',$data_ormas); 

        $insert_data_2 = $this->u->insert_dt('tb_persyaratan',$data_syarat); 

        $insert_data_3 = $this->u->insert_dt('tb_surat_pengantar',$data_surat); 

        if($insert_data && $insert_data_2 && $insert_data_3 ){
        $this->session->set_flashdata("pesan","Berhasil Ajukan Permohonan");
        redirect($_SERVER['HTTP_REFERER']);
        }

      }

    }

    public function permohonan_anda()
    {

        //konfigurasi pagination
        $config['base_url'] = site_url('front/permohonan_anda'); //site url
        $config['total_rows'] = $this->db->count_all('tb_surat_pengantar'); //total row
        $config['per_page'] = 4;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'Utama';
        $config['last_link']        = 'Terakhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Selanjutnya</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $nik = $this->session->userdata('nik_pemohon');  
        $data['data_permohonan'] = $this->u->tampil_permohonan($config["per_page"], $data['page'] , $nik);                    
 
        $data['pagination'] = $this->pagination->create_links();


        $data['title'] = "Permohonan Anda";
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
        $this->load->view('front/isi/v_permohonan_anda',$data);

    }


    public function cari_permohonan()
    {

        $data['title'] = "Permohonan Anda";
        $keyword = $this->input->post('cari');
        if ($keyword!=''){
        $nik = $this->session->userdata('nik_pemohon');     
        $data['data_pencarian'] = $this->u->cari($nik,$keyword);  
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);    
        $this->load->view('front/isi/v_cari_permohonan',$data);
        }
        else {
        redirect('front/permohonan_anda');
        }

        
    }


    public function tentang_kami()
    {
        $data['title'] = "Tentang Kami";
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
        $this->load->view('front/isi/v_tentang',$data);
    }

    public function petunjuk()
    {
        $data['title'] = "Tentang Kami";
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);     
        $this->load->view('front/isi/v_petunjuk',$data);
    }

 public function cetak_surat_izin()
    {
        $data['title'] = "Cetak Izin Riset";
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $nik = $this->session->userdata('nik_pemohon');
        $id = $this->input->post('id_surat');
        $data['lihat_balasan_izin'] = $this->u->lihat_balasan_izin($nik,$id);
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);      
        $this->load->view('front/isi/v_cetak_izin',$data);
    }

 public function cetak_surat_ormas()
    {
        $data['title'] = "Cetak Izin Riset";
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $nik = $this->session->userdata('nik_pemohon');
        $id = $this->input->post('id_surat');
        $data['lihat_balasan_ormas'] = $this->u->lihat_balasan_ormas($nik,$id);
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);      
        $this->load->view('front/isi/v_cetak_ormas',$data);
    }

 public function cetak_surat_wna()
    {
        $data['title'] = "Cetak Surat WNA";
        $data['nik'] = $this->session->userdata('nik_pemohon');     
        $nik = $this->session->userdata('nik_pemohon');
        $id = $this->input->post('id_surat');
        $data['lihat_balasan_wna'] = $this->u->lihat_balasan_wna($nik,$id);
        $data['header'] = $this->load->view('front/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('front/template/v_footer',$data,true);      
        $this->load->view('front/isi/v_cetak_wna',$data);
    }

}
