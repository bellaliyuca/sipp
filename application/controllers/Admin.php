<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    function __construct(){
    parent::__construct();
    $this->load->model('M_Admin','a');
    }

    // ========================= Login ======================== //

    public function index()
    {
        $data['title'] = "Halaman Login";
       
        $this->load->view('admin/login/login',$data);

    }

     public function proses_login(){

        $nip = $this->input->post('nip');
        $password = $this->input->post('password');
        $hak_akses = $this->input->post('hakakses');

        $data = array(
            'nip' => $nip,
            'password' => md5($password),
            'hak_akses' => $hak_akses
            );
        $cek = $this->a->cek_login("tb_admin",$data)->num_rows();
        if($cek> 0){

            
         $this->session->set_userdata('nip', $nip);
         $this->session->set_userdata('hakakses', $hak_akses);
         $this->session->set_userdata('status', 'login');

       $this->session->set_flashdata("sukses", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Anda Berhasil Login</div></div>");

        redirect('admin/dashboard');

        }
        else{
       $this->session->set_flashdata("gagal", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">NIP atau Password salah!!</div></div>");
        redirect($_SERVER['HTTP_REFERER']);

        }


    }

 public function logout(){
     $this->session->sess_destroy();
     redirect('admin');
        
    }

    // ========================= Dashboard Admin ======================== //


    public function dashboard()
    {
        $data['title'] = "Dashboard Admin";
        $data['jml_pemohon'] = $this->a->getDataPemohonTotal()->num_rows();
        $data['jml_izin'] = $this->a->getDataIzinTotal()->num_rows();
        $data['jml_wna'] = $this->a->getDataWnaTotal()->num_rows();
        $data['jml_ormas'] = $this->a->getDataOrmasTotal()->num_rows();
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/v_utama',$data);

    }

    public function permohonan_menunggu()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $hakakses = $this->session->userdata('hakakses');
        if($hakakses == 'Kewaspadaan Nasional') {
        $data['data_permohonan'] = $this->a->permohonan_menunggu_kewasnas();
        } else if ($hakakses == 'Ketahanan Sosial') {
        $data['data_permohonan'] = $this->a->permohonan_menunggu_ketansos();
        }
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/v_permohonan_menunggu',$data);
    }

     public function permohonan_verifikasi()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $hakakses = $this->session->userdata('hakakses');
        if($hakakses == 'Kewaspadaan Nasional') {
        $data['data_permohonan'] = $this->a->permohonan_verifikasi_kewasnas();
        } else if ($hakakses == 'Ketahanan Sosial') {
        $data['data_permohonan'] = $this->a->permohonan_verifikasi_ketansos();
        }
        
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/v_permohonan_verifikasi',$data);
    }

      public function permohonan_terverifikasi()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $hakakses = $this->session->userdata('hakakses');
        $data['data_permohonan'] = $this->a->permohonan_verifikasi_kepala();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_permohonan_terverifikasi',$data);
    }

    public function pemohon()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_pemohon'] = $this->a->data_pemohon();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/v_pemohon',$data);
    }

    public function update_verifikasi() {
     $id_surat = $this->input->post('id_surat'); 
     $ver = $this->input->post('verifikasi'); 
     $data_utama = array(
        'status' => $ver
     );
     $this->a->update_verifikasi('tb_surat_pengantar',$id_surat,$data_utama);
     $this->session->set_flashdata('ver', 'Berhasil Ubah Status');
     // redirect($_SERVER['HTTP_REFERER']);
     redirect('admin/permohonan_verifikasi');

    }

    public function batal_verifikasi() {
     $id_surat = $this->input->post('id_surat'); 
     $data_utama = array(
        'status' => 'Menunggu'
     );
     $this->a->update_verifikasi('tb_surat_pengantar',$id_surat,$data_utama);
     $this->session->set_flashdata('ver', 'Berhasil Ubah Status');
     // redirect($_SERVER['HTTP_REFERER']);
     redirect('admin/permohonan_menunggu');

    }

    public function pengaturan_akun()
    {
        $data['title'] = "Dashboard Admin";
        $data['nip'] = $this->session->userdata('nip'); 
        $data['hakakses'] = $this->session->userdata('hakakses');
        $nip = $this->session->userdata('nip');
        $data['det_akun'] = $this->a->find_nip('tb_admin',$nip);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/v_akun',$data);
    }


     public function ubah_akun() {
     $id_admin = $this->input->post('id_admin'); 
     $password = $this->input->post('password'); 
     if($password == '') {
     $data_utama = array(
        'nama_lengkap' =>  $this->input->post('nama'),
        'nip' =>  $this->input->post('nip'),
        'jabatan' =>  $this->input->post('jabatan'),
        'hak_akses' =>  $this->input->post('hakakses')
     );
     } else {
    $data_utama = array(
    'nama_lengkap' =>  $this->input->post('nama'),
    'nip' =>  $this->input->post('nip'),
    'jabatan' =>  $this->input->post('jabatan'),
    'password' =>  md5($this->input->post('password')),
    'hak_akses' =>  $this->input->post('hakakses'),
     );
     }
     $this->a->update_akun('tb_admin',$id_admin,$data_utama);
     redirect('admin/logout');
     // redirect($_SERVER['HTTP_REFERER']);

    }

    

// ================= Balasan Izin ==================== //

  public function buat_balasan_izin()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['id_surat'] = $this->input->post('id_surat');
        $data['nik'] = $this->input->post('nik');
        $id_surat = $this->input->post('id_surat');
        $data['cari_sumber_izin'] = $this->a->cari_sumber_izin($id_surat);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_buat_balasan_izin',$data);
    }

    public function simpan_balasan_izin()
    {
        
     $data_utama = array(
        'memperhatikan' =>  $this->input->post('memperhatikan'),
        'tembusan_1' =>  $this->input->post('tembusan_1'),
        'cq_1' =>  $this->input->post('cq_1'),
        'tembusan_2' =>  $this->input->post('tembusan_2'),
        'cq_2' =>  $this->input->post('cq_2'),
        'tembusan_3' =>  $this->input->post('tembusan_3'),
        'cq_3' =>  $this->input->post('cq_3'),
        'tembusan_4' =>  $this->input->post('tembusan_4'),
        'cq_4' =>  $this->input->post('cq_4'),
        'id_izin_riset' =>  $this->input->post('id_surat'),
        'nik_pemohon' =>  $this->input->post('nik')
     );
     $this->a->insert_dt('tb_balasan_izin',$data_utama);
     redirect('admin/surat_balasan_izin');
     $this->session->set_flashdata('balasan', 'Surat Balasan Berhasil Dibuat');
     // redirect($_SERVER['HTTP_REFERER']);
    }

    public function surat_balasan_izin()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_balasan_izin'] = $this->a->data_balasan_izin();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_balasan_izin',$data);
    }

    public function lihat_balasan_izin()
    {
        $data['title'] = "Lihat Balasan Izin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $id_izin_riset = $this->input->post('id_izin_riset');
        $nik = $this->input->post('nik');
        $data['lihat_balasan_izin'] = $this->a->lihat_balasan_izin($nik);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_lihat_balasan_izin',$data);
    }

    public function edit_balasan_izin()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['id_surat'] = $this->input->post('id_surat');
        $data['nik'] = $this->input->post('nik');
        $id_surat = $this->input->post('id_surat');
        $data['edit_balasan_izin'] = $this->a->edit_balasan_izin($id_surat);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_edit_balasan_izin',$data);
    }

    public function update_balasan_izin() {
     $id_surat = $this->input->post('id_surat'); 
     $data_utama = array(
        'memperhatikan' => $this->input->post('memperhatikan'),
        'tembusan_1' => $this->input->post('tembusan_1'),
        'cq_1' => $this->input->post('cq_1'),
        'tembusan_2' => $this->input->post('tembusan_2'),
        'cq_2' => $this->input->post('cq_2'),
         'tembusan_3' =>  $this->input->post('tembusan_3'),
        'cq_3' =>  $this->input->post('cq_3'),
        'tembusan_4' =>  $this->input->post('tembusan_4'),
        'cq_4' =>  $this->input->post('cq_4')
     );
     $this->a->update_balasan_izin('tb_balasan_izin',$id_surat,$data_utama);
     $this->session->set_flashdata('izin', 'Berhasil Ubah Data Balasan Izin Riset');
     redirect('admin/surat_balasan_izin');
     // redirect('admin/permohonan_verifikasi');
    }


// ================= Balasan Ormas ==================== //


    public function buat_balasan_ormas()
    {
        $data['title'] = "Balasan Ormas";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['id_surat'] = $this->input->post('id_surat');
        $data['nik'] = $this->input->post('nik');
        $id_surat = $this->input->post('id_surat');
        $data['cari_sumber_ormas'] = $this->a->cari_sumber_ormas($id_surat);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_buat_balasan_ormas',$data);
    }

     public function simpan_balasan_ormas()
    {
        
     $data_utama = array(
        'tanggal_surat' =>  $this->input->post('tgl_surat'),
        'id_ormas' =>  $this->input->post('id_surat'),
        'nik_pemohon' =>  $this->input->post('nik'),
        'tgl_wajib_lapor' =>  $this->input->post('tgl_wajib_lapor')
      
     );
     $this->a->insert_dt('tb_balasan_ormas',$data_utama);
     redirect('admin/surat_balasan_ormas');
     $this->session->set_flashdata('balasan', 'Surat Balasan Berhasil Dibuat');
     // redirect($_SERVER['HTTP_REFERER']);
    }

     public function surat_balasan_ormas()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_balasan_ormas'] = $this->a->data_balasan_ormas();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_balasan_ormas',$data);
    }


     public function lihat_balasan_ormas()
    {
        $id_ormas = $this->input->post('id_ormas');
        // var_dump($id_ormas);
        $data['title'] = "Lihat Balasan Izin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $id_izin_ormas = $this->input->post('id_izin_ormas');
        $nik = $this->input->post('nik');
        $data['lihat_balasan_ormas'] = $this->a->lihat_balasan_ormas($nik,$id_ormas);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_lihat_balasan_ormas',$data);
    }

      public function edit_balasan_ormas()
    {
        $id_surat = $this->input->post('id_surat');
        // var_dump($id_surat);
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['id_surat'] = $this->input->post('id_surat');
        $data['nik'] = $this->input->post('nik');
        $data['edit_balasan_ormas'] = $this->a->edit_balasan_ormas($id_surat);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_edit_balasan_ormas',$data);
    }

    public function update_balasan_ormas() {
     $id_surat = $this->input->post('id_surat'); 
     $data_utama = array(
        'tanggal_surat' => $this->input->post('tgl_surat'),
        'berdasarkan' => $this->input->post('berdasarkan'),
        'tgl_wajib_lapor' => $this->input->post('tgl_wajib_lapor')
     );
     $this->a->update_balasan_ormas('tb_balasan_ormas',$id_surat,$data_utama);
     $this->session->set_flashdata('ormas', 'Berhasil Ubah Data Balasan Ormas');
     redirect('admin/surat_balasan_ormas');
     // redirect('admin/permohonan_verifikasi');
    }


// ================= Balasan WNA ==================== //


   public function buat_balasan_wna()
    {
        $data['title'] = "Balasan WNA";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['id_surat'] = $this->input->post('id_surat');
        $data['nik'] = $this->input->post('nik');
        // $data['data_izin'] = $this->a->data_izin($id_surat);
        $id_surat = $this->input->post('id_surat');
        $data['cari_sumber_wna'] = $this->a->cari_sumber_wna($id_surat);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_buat_balasan_wna',$data);
    }

    public function simpan_balasan_wna()
    {
        

     $data_utama = array(
        'tembusan_1' =>  $this->input->post('tembusan_1'),
        'tembusan_2' =>  $this->input->post('tembusan_2'),
        'tembusan_3' =>  $this->input->post('tembusan_3'),
        'tembusan_4' =>  $this->input->post('tembusan_4'),
        'tembusan_5' =>  $this->input->post('tembusan_5'),
        'tembusan_6' =>  $this->input->post('tembusan_6'),
        'id_wna'     =>  $this->input->post('id_surat'),
        'nik_pemohon' =>  $this->input->post('nik')
     );
     $this->a->insert_dt('tb_balasan_wna',$data_utama);
     redirect('admin/surat_balasan_wna');
     $this->session->set_flashdata('balasan', 'Surat Balasan Berhasil Dibuat');
     // redirect($_SERVER['HTTP_REFERER']);
    }


     public function surat_balasan_wna()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_balasan_wna'] = $this->a->data_balasan_wna();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_balasan_wna',$data);
    }


     public function lihat_balasan_wna()
    {
        // var_dump($id_ormas);
        $data['title'] = "Lihat Balasan Izin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $id_wna = $this->input->post('id_wna');
        $nik = $this->input->post('nik');
        $data['lihat_balasan_wna'] = $this->a->lihat_balasan_wna($id_wna);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_lihat_balasan_wna',$data);
    }


    public function edit_balasan_wna()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['id_surat'] = $this->input->post('id_surat');
        $id_surat = $this->input->post('id_surat');
        $data['edit_balasan_wna'] = $this->a->edit_balasan_wna($id_surat);
        $data['nik'] = $this->input->post('nik');
        $id_surat = $this->input->post('id_surat');
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kep_badan/v_edit_balasan_wna',$data);
    }

    public function update_balasan_wna() {
     $id_surat = $this->input->post('id_surat'); 
     $data_utama = array(
        'tembusan_1' => $this->input->post('tembusan_1'),
        'tembusan_2' => $this->input->post('tembusan_2'),
        'tembusan_3' => $this->input->post('tembusan_3'),
        'tembusan_4' => $this->input->post('tembusan_4'),
        'tembusan_5' => $this->input->post('tembusan_5'),
        'tembusan_6' => $this->input->post('tembusan_6')

     );
     $this->a->update_balasan_wna('tb_balasan_wna',$id_surat,$data_utama);
     $this->session->set_flashdata('izin', 'Berhasil Ubah Data Balasan WNA');
     redirect('admin/surat_balasan_wna');
     // redirect('admin/permohonan_verifikasi');
    }

    // ================= Koding Kasubag ==================== //


     public function permohonan_menunggu_kasubag()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $hakakses = $this->session->userdata('hakakses');
        $data['data_permohonan'] = $this->a->permohonan_menunggu_kasubag();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_permohonan_menunggu',$data);
    }

     public function permohonan_verifikasi_kasubag()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $hakakses = $this->session->userdata('hakakses');
        $data['data_permohonan'] = $this->a->permohonan_verifikasi_kasubag();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_permohonan_verifikasi',$data);
    }

     public function surat_balasan_izin_kasubag()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_balasan_izin'] = $this->a->data_balasan_izin();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_balasan_izin',$data);
    }

  public function cetak_balasan_izin()
    {
        $data['title'] = "Lihat Balasan Izin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $id_izin_riset = $this->input->post('id_izin_riset');
        $nik = $this->input->post('nik');
        $data['lihat_balasan_izin'] = $this->a->lihat_balasan_izin($nik);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_cetak_balasan_izin',$data);
    }

  public function update_no_izin() {
     $id_surat = $this->input->post('id_surat'); 
     $no_surat = $this->input->post('no_surat'); 
     $data_utama = array(
        'no_surat_balasan' => $no_surat
     );
     $this->a->update_dt('tb_balasan_izin',$id_surat,$data_utama);
     $this->session->set_flashdata('izin', 'Berhasil Ubah No Izin');
     redirect($_SERVER['HTTP_REFERER']);
     // redirect('admin/permohonan_verifikasi');

    }

     public function update_tgl_izin() {
     $id_surat = $this->input->post('id_surat'); 
     $tgl_surat = $this->input->post('tanggal'); 
     $data_utama = array(
        'tanggal_surat' => $tgl_surat
     );
     $this->a->update_dt('tb_balasan_izin',$id_surat,$data_utama);
     $this->session->set_flashdata('tanggal', 'Berhasil Ubah Tanggal Izin');
     redirect($_SERVER['HTTP_REFERER']);
     // redirect('admin/permohonan_verifikasi');

    }
// ==================== Balasan WNA ==================== //

     public function surat_balasan_wna_kasubag()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_balasan_wna'] = $this->a->data_balasan_wna();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_balasan_wna',$data);
    }


     public function cetak_balasan_wna()
    {
        $data['title'] = "Cetak Balasan WNA";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $id_wna = $this->input->post('id_wna');
        $nik = $this->input->post('nik');
        $data['lihat_balasan_wna'] = $this->a->lihat_balasan_wna_kasubag($nik,$id_wna);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_cetak_balasan_wna',$data);
    }

     public function update_no_wna() {
     $id_surat = $this->input->post('id_surat'); 
     $no_surat = $this->input->post('no_surat'); 
     $data_utama = array(
        'no_surat_balasan' => $no_surat
     );
     $this->a->update_dt('tb_balasan_wna',$id_surat,$data_utama);
     $this->session->set_flashdata('izin', 'Berhasil Ubah No WNA');
     redirect($_SERVER['HTTP_REFERER']);
     // redirect('admin/permohonan_verifikasi');

    }

     public function update_tgl_wna() {
     $id_surat = $this->input->post('id_surat'); 
     $tgl_surat = $this->input->post('tanggal'); 
     $data_utama = array(
        'tanggal_surat' => $tgl_surat
     );
     $this->a->update_dt('tb_balasan_wna',$id_surat,$data_utama);
     $this->session->set_flashdata('tanggal', 'Berhasil Ubah Tanggal WNA');
     redirect($_SERVER['HTTP_REFERER']);
     // redirect('admin/permohonan_verifikasi');

    }

// ==================== Balasan Ormas ==================== //


   public function surat_balasan_ormas_kasubag()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_balasan_ormas'] = $this->a->data_balasan_ormas();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_balasan_ormas',$data);
    }

  public function update_no_ormas() {
     $id_surat = $this->input->post('id_surat'); 
     $no_surat = $this->input->post('no_surat'); 
     $data_utama = array(
        'no_surat_balasan' => $no_surat
     );
     $this->a->update_dt('tb_balasan_ormas',$id_surat,$data_utama);
     $this->session->set_flashdata('izin', 'Berhasil Ubah No Ormas');
     redirect($_SERVER['HTTP_REFERER']);
     // redirect('admin/permohonan_verifikasi');

    }

     public function update_tgl_ormas() {
     $id_surat = $this->input->post('id_surat'); 
     $tgl_surat = $this->input->post('tanggal'); 
     $data_utama = array(
        'tanggal_surat' => $tgl_surat
     );
     $this->a->update_dt('tb_balasan_ormas',$id_surat,$data_utama);
     $this->session->set_flashdata('tanggal', 'Berhasil Ubah Tanggal Ormas');
     redirect($_SERVER['HTTP_REFERER']);
     // redirect('admin/permohonan_verifikasi');

    }

    public function cetak_balasan_ormas()
    {
        $data['title'] = "Cetak Balasan Ormas";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $id_ormas = $this->input->post('id_ormas');
        $nik = $this->input->post('nik');
        $data['lihat_balasan_ormas'] = $this->a->lihat_balasan_ormas($nik,$id_ormas);
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_cetak_balasan_ormas',$data);
    }

// ============== Manajemen Pengguna ============= //

    public function manajemen_pengguna()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_admin'] = $this->a->data_admin();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_manajemen_akun',$data);
    }

     public function simpan_pengguna()
    {
       $data_utama = array(
        'nama_lengkap' =>  $this->input->post('nama'),
        'nip' =>  $this->input->post('nip'),
        'jabatan' =>  $this->input->post('jabatan'),
        'password' => md5($this->input->post('password')),
        'hak_akses' =>  $this->input->post('hakakses'));
     $this->a->insert_dt('tb_admin',$data_utama);
     $this->session->set_flashdata('user', 'Pengguna Berhasil Ditambahkan');
     redirect($_SERVER['HTTP_REFERER']);
    }

    public function hapus_pengguna(){
     $id = $this->input->post('id_admin');
     $this->a->hapus_user('tb_admin',$id);
     $this->session->set_flashdata('hapus','Data berhasil dihapus');
     redirect($_SERVER['HTTP_REFERER']);
     }

     public function update_pengguna() {

     $id_admin = $this->input->post('id_admin'); 
     $password = $this->input->post('password');
     if($password != '') {
     $data_utama = array(
        'nama_lengkap' =>  $this->input->post('nama'),
        'nip' =>  $this->input->post('nip'),
        'jabatan' =>  $this->input->post('jabatan'),
        'password' => md5($this->input->post('password')),
        'hak_akses' =>  $this->input->post('hakakses')
     );
     $this->a->update_admin('tb_admin',$id_admin,$data_utama);
     $this->session->set_flashdata('ubah', 'Pengguna Berhasil Diubah');
     redirect($_SERVER['HTTP_REFERER']);
     } 
     else {

       $data_utama = array(
        'nama_lengkap' =>  $this->input->post('nama'),
        'nip' =>  $this->input->post('nip'),
        'jabatan' =>  $this->input->post('jabatan'),
        'hak_akses' =>  $this->input->post('hakakses')
     );
     $this->a->update_admin('tb_admin',$id_admin,$data_utama);
     $this->session->set_flashdata('ubah', 'Pengguna Berhasil Diubah');
     redirect($_SERVER['HTTP_REFERER']);
     }
 
    }

// ================= Laporan =================== //

    public function laporan_pemohon()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_admin'] = $this->a->data_admin();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_laporan',$data);
    }

    public function laporan_riset()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_admin'] = $this->a->data_admin();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_laporan_riset',$data);
    }

    public function laporan_wna()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_admin'] = $this->a->data_admin();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_laporan_wna',$data);
    }

    public function laporan_ormas()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_admin'] = $this->a->data_admin();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_laporan_ormas',$data);
    }

    public function laporan_izin()
    {
        $data['title'] = "Dashboard Admin";
        $data['username'] = $this->session->userdata('username');
        $data['hakakses'] = $this->session->userdata('hakakses');
        $data['data_admin'] = $this->a->data_admin();
        $data['header'] = $this->load->view('admin/dashboard/template/v_header',$data,true);     
        $data['footer'] = $this->load->view('admin/dashboard/template/v_footer',$data,true);     
        $this->load->view('admin/dashboard/kasubag/v_laporan_izin',$data);
    }




}
