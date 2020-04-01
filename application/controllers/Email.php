<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    function __construct(){
    parent::__construct();
    $this->load->model('M_Admin','a');
    }

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function email_izin()
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
        $this->email->subject('Surat permohonan telah selesai dan dapat didownload');

        // Isi email
        $this->email->message("Terimakasih sudah menggunakan layanan kami, silahkan login dengan akun anda untuk mendownload surat 
            ");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $id_balasan = $this->input->post('id_balasan');
            $id_surat = $this->input->post('id_surat');
            $data_utama = array(
            'kirim_email' =>  'Sudah',
            );
             $data_status = array(
            'status' =>  'Selesai',
            );
            $this->a->update_email_izin('tb_balasan_izin',$id_balasan,$data_utama);
            $this->a->update_status_surat('tb_surat_pengantar',$id_surat,$data_status);
             $this->session->set_flashdata('email', 'Email Berhasil Dikirim');
            redirect('admin/surat_balasan_izin_kasubag');
              redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('gagal', 'Email Gagal Dikirim');
              // redirect($_SERVER['HTTP_REFERER']);
            redirect('admin/surat_balasan_izin_kasubag');

        }
    }

     public function email_ormas()
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
        $this->email->subject('Surat permohonan telah selesai');

        // Isi email
        $this->email->message("Silahkan datang langsung ke kantor Badan Kesbangpol dengan membawa kelengkapan dokumen untuk mengambil surat permohonan, Terimakasih
            ");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $id_balasan = $this->input->post('id_balasan');
            $id_surat = $this->input->post('id_surat');
            $data_utama = array(
            'kirim_email' =>  'Sudah',
            );
             $data_status = array(
            'status' =>  'Selesai',
            );
            $this->a->update_email_ormas('tb_balasan_ormas',$id_balasan,$data_utama);
            $this->a->update_status_surat('tb_surat_pengantar',$id_surat,$data_status);
             $this->session->set_flashdata('email', 'Email Berhasil Dikirim');
            redirect('admin/surat_balasan_ormas_kasubag');
              redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('gagal', 'Email Gagal Dikirim');
              // redirect($_SERVER['HTTP_REFERER']);
            redirect('admin/surat_balasan_ormas_kasubag');

        }
    }

    public function email_wna()
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
        $this->email->subject('Surat permohonan telah selesai dan dapat didownload');

        // Isi email
        $this->email->message("Terimakasih sudah menggunakan layanan kami, silahkan login dengan akun anda untuk mendownload surat 
            ");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $id_surat = $this->input->post('id_surat');
            $id_balasan = $this->input->post('id_balasan');
            $data_utama = array(
            'kirim_email' =>  'Sudah',
            );
            $data_status = array(
            'status' =>  'Selesai',
            );
            $this->a->update_email_wna('tb_balasan_wna',$id_balasan,$data_utama);
            $this->a->update_status_surat('tb_surat_pengantar',$id_surat,$data_status);
            $this->session->set_flashdata('email', 'Email Berhasil Dikirim');
            redirect('admin/surat_balasan_wna_kasubag');
              redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('gagal', 'Email Gagal Dikirim');
              // redirect($_SERVER['HTTP_REFERER']);
            redirect('admin/surat_balasan_wna_kasubag');

        }
    }
}