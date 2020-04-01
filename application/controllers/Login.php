<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct(){
    parent::__construct();
    $this->load->model('M_Login','m');
    }

    public function index()
    {
        $data['title'] = "LAPOR YAI || Login";
        $this->load->view('front/login',$data);

    }

    public function proses_login(){

        $nik = $this->input->post('nik');
        $password = $this->input->post('password');
        $data = array(
            'nik_pemohon' => $nik,
            'password' => md5($password)
            );
        $cek = $this->m->cek_login("tb_pemohon",$data)->num_rows();
        if($cek> 0){

         $this->session->set_userdata('nik_pemohon', $nik);
         $this->session->set_userdata('status', 'login');

       $this->session->set_flashdata("sukses", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Username atau Password salah!!</div></div>");

        redirect($_SERVER['HTTP_REFERER']);

        }
        else{
       $this->session->set_flashdata("gagal", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Username atau Password salah!!</div></div>");
        redirect($_SERVER['HTTP_REFERER']);

        }


    }

    // public function daftar() {

    //     $nik = $this->input->post('nik');

    //     $sql = $this->db->query("SELECT nik_pemohon FROM tb_pemohon where nik_pemohon='$nik'");
    //     $cek_nik = $sql->num_rows();
    //     if ($cek_nik > 0) {
    //     $this->session->set_flashdata("nik", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Username sudah digunakan silahkan cari username yang lain</div></div>");
    //     redirect($_SERVER['HTTP_REFERER']);
    //     }

    //     else
    //     {

    //     // Batas Konfigurasi Email

    //     $config = [
    //         'mailtype'  => 'html',
    //         'charset'   => 'utf-8',
    //         'protocol'  => 'smtp',
    //         'smtp_host' => 'smtp.gmail.com',
    //         'smtp_user' => 'sippbkpp@gmail.com',  // Email gmail
    //         'smtp_pass'   => 'sippbkpp123',  // Password gmail
    //         'smtp_crypto' => 'ssl',
    //         'smtp_port'   => 465,
    //         'crlf'    => "\r\n",
    //         'newline' => "\r\n"
    //     ];

    //     // Load library email dan konfigurasinya
    //     $this->load->library('email', $config);

    //     // Email dan nama pengirim
    //     $this->email->from('sippbkpp@gmail.com', 'Admin SIPP BKPP');

    //     // Email penerima
    //     $email = $this->input->post('email');
    //     $this->email->to($email); // Ganti dengan email tujuan

    //     // Lampiran email, isi dengan url/path file
    //     $this->email->attach('https://i.ibb.co/FVn5wm6/admin.png');

    //     // Subject email
    //     $this->email->subject('Berhasil Mendaftarkan Akun');

    //     // Isi email
    //     $this->email->message("Selamat, akun anda sudah terdaftar, silahkan login ke Sistem Informasi Pelayanan Publik Badan Kesbangpol untuk melanjutkan <br>
    //         Terimakasih.
    //         ");

    //     // Tampilkan pesan sukses atau error
    //     if ($this->email->send()) {
             
    //     $data = array(

    //     'nik_pemohon' => $this->input->post('nik'),
    //     'nama_lengkap' => $this->input->post('nama'),
    //     'alamat' => $this->input->post('alamat'),
    //     'pekerjaan' => $this->input->post('pekerjaan'),
    //     'jenis_kelamin' => $this->input->post('jk'),
    //     'tanggal_lahir' => $this->input->post('tgl_lahir'),
    //     'kewarganegaraan' => $this->input->post('kwg'),
    //     'email' =>  $this->input->post('email'),
    //     'password' => md5($this->input->post('password'))

    //     );

    //     $this->m->insert_dt('tb_pemohon',$data); 
    //     $this->session->set_flashdata("daftar", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Didaftarkan, Silahkan Login</div></div>");
    //     redirect($_SERVER['HTTP_REFERER']);
            
    //     } 
    //     else {
    //         $this->session->set_flashdata('gagal', 'Email Gagal Dikirim');
    //           redirect($_SERVER['HTTP_REFERER']);

    //     }

    //     // End Batas
    //     }
       
    // }


    public function daftar()
    {
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'sippbkpp@gmail.com',  // Email gmail
            'smtp_pass'   => 'sippbkpp123',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('sippbkpp@gmail.com', 'Admin SIPP BKPP');

        // Email penerima
        $email = $this->input->post('email');
        $this->email->to($email); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('https://i.ibb.co/FVn5wm6/admin.png');

        // Subject email
        $this->email->subject('Berhasil membuat akun');

        // Isi email
        $this->email->message("Selamat, akun anda sudah terdaftar, silahkan login ke Sistem Informasi Pelayanan Publik Badan Kesbangpol untuk melanjutkan 
            ");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {


             $data_pemohon = array(

            'nik_pemohon' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'jenis_kelamin' => $this->input->post('jk'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'kewarganegaraan' => $this->input->post('kwg'),
            'email' =>  $this->input->post('email'),
            'password' => md5($this->input->post('password'))

            );
             $this->m->insert_dt('tb_pemohon',$data_pemohon); 
             $this->session->set_flashdata('daftar', 'Berhasil Dibuat');
             redirect($_SERVER['HTTP_REFERER']);
       

        } else {


            $this->session->set_flashdata('gagal', 'Email Gagal Dikirim');
              redirect($_SERVER['HTTP_REFERER']);
            // redirect('admin/surat_balasan_izin_kasubag');

        }
    }


    //  public function daftar() {

    //     $nik = $this->input->post('nik');

    //     $sql = $this->db->query("SELECT nik_pemohon FROM tb_pemohon where nik_pemohon='$nik'");
    //     $cek_nik = $sql->num_rows();
    //     if ($cek_nik > 0) {
    //     $this->session->set_flashdata("nik", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Username sudah digunakan silahkan cari username yang lain</div></div>");
    //     redirect($_SERVER['HTTP_REFERER']);
    //     }

    //     else
    //     {

    //     $data = array(

    //     'nik_pemohon' => $this->input->post('nik'),
    //     'nama_lengkap' => $this->input->post('nama'),
    //     'alamat' => $this->input->post('alamat'),
    //     'pekerjaan' => $this->input->post('pekerjaan'),
    //     'jenis_kelamin' => $this->input->post('jk'),
    //     'tanggal_lahir' => $this->input->post('tgl_lahir'),
    //     'kewarganegaraan' => $this->input->post('kwg'),
    //     'email' =>  $this->input->post('email'),
    //     'password' => md5($this->input->post('password'))

    //     );

    //     $this->m->insert_dt('tb_pemohon',$data); 
    //     $this->session->set_flashdata("daftar", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Didaftarkan, Silahkan Login</div></div>");
    //     redirect($_SERVER['HTTP_REFERER']);
            
        
    //     }
       
    // }

    public function logout(){
        $this->session->sess_destroy();
        redirect('front');
    }

}
