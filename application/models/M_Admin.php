<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    var $table_pemohon = "tb_pemohon";
    var $table_wna = "tb_wna";
    var $table_izin = "tb_izin_riset";
    var $table_ormas = "tb_ormas";


	 function __construct(){
        parent::__construct();
    }

	function cek_login($table,$data){
    return $this->db->get_where($table,$data);
  }

  function insert_dt($tbl, $data){
     $this->db->insert($tbl, $data);
     return TRUE;
   }

  public function data_pemohon()
    {
    $hasil = $this->db->order_by('nik_pemohon','desc')
                  ->get('tb_pemohon');
    if($hasil->num_rows() > 0){
        return $hasil->result();
    } else {
        return false;
    }
  }

 public function permohonan_menunggu_kewasnas(){
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar')
     ->where('tb1.status','Menunggu')
      ->group_start() //this will start grouping
      ->where('tb1.jenis_surat =', "Izin Riset")
      ->or_where('tb1.jenis_surat =', "Lapor WNA")
      ->group_end() //this will end grouping    
     // ->where('tb1.jenis_surat', 'Izin_Riset' or 'tb1.jenis_surat','Lapor_WNA')    
     ->order_by('tb1.id_surat_pengantar','desc')
     
     ->get();
     return $query->result();
  }

   public function permohonan_menunggu_ketansos(){
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar')
          ->where('tb1.status','Menunggu')
     ->where('tb1.jenis_surat','Keberadaan Ormas')
     ->order_by('tb1.id_surat_pengantar','desc')
     ->get();
     return $query->result();

  }

  public function permohonan_verifikasi_kewasnas(){
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar')
     ->order_by('tb1.id_surat_pengantar','desc')
     ->where('tb1.status','Verifikasi')
      ->group_start() //this will start grouping
      ->where('tb1.jenis_surat =', "Izin Riset")
      ->or_where('tb1.jenis_surat =', "Lapor WNA")
      ->group_end() //this will end grouping   
     ->get();
     return $query->result();
  }

   public function permohonan_verifikasi_ketansos(){
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar')
     ->order_by('tb1.id_surat_pengantar','desc')
     ->where('tb1.status','Verifikasi')
     ->where('tb1.jenis_surat','Keberadaan Ormas')
     ->get();
     return $query->result();

  }

   public function permohonan_verifikasi_kepala(){
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar')
     ->order_by('tb1.id_surat_pengantar','desc')
     ->where('tb1.status','verifikasi')
     ->get();
     return $query->result();

  }


   public function data_permohonan_verifikasi(){
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar')
     ->order_by('tb1.id_surat_pengantar','desc')
     ->where('tb1.status','verifikasi')
     ->get();
     return $query->result();

  }

  function update_verifikasi($tbl, $id, $data)
    {
      $this->db->where('id_surat_pengantar', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }

public function find_nip($tbl,$nip){
   $this->db->from($tbl);
   $this->db->where('nip', $nip);
   $query = $this->db->get();
    if ($query->num_rows() == 1) {
    return $query->result();
      }
    }

  function update_akun($tbl, $id, $data)
    {
      $this->db->where('id_admin', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }

  public function data_izin($id)
    {
    $query = $this->db->select('*')
     ->from('tb_izin_riset as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_izin_riset')
     ->order_by('tb1.id_izin_riset','desc')
     ->where('tb1.id_izin_riset',$id)
     ->get();
     return $query->result();
  }


  public function data_balasan_izin()
    {
      $query = $this->db->select('*')
     ->from('tb_balasan_izin as tb1')
     ->join('tb_izin_riset as tb2','tb2.nik_pemohon = tb1.nik_pemohon')
     ->get();
     return $query->result();
  }


  public function cari_sumber_izin($id)
    {
      $query = $this->db->select('*')
     ->from('tb_izin_riset')
     ->where('id_izin_riset',$id)
     ->get();

     return $query->result();
  }

  public function lihat_balasan_izin($nik)
    {
    $query = $this->db->select('*')
     ->from('tb_pemohon as tb1')
     ->join('tb_izin_riset as tb2','tb2.nik_pemohon = tb1.nik_pemohon')
     ->join('tb_balasan_izin as tb3','tb3.nik_pemohon = tb1.nik_pemohon')
     ->join('tb_persyaratan as tb4','tb4.id_surat_pengantar = tb2.id_izin_riset')
     ->where('tb1.nik_pemohon',$nik)
     ->get();
     return $query->result();
  }


 public function data_balasan_ormas()
    {
    $query = $this->db->select('*')
     ->from('tb_balasan_ormas as tb1')
     ->join('tb_ormas as tb2','tb2.nik_pemohon = tb1.nik_pemohon')
     ->get();
     return $query->result();
  }

 public function cari_sumber_ormas($id)
    {
      $query = $this->db->select('*')
     ->from('tb_ormas')
     ->where('id_ormas',$id)
     ->get();

     return $query->result();
  }

  public function lihat_balasan_ormas($nik,$id)
    {
    $query = $this->db->select('*')
     ->from('tb_pemohon as tb1')
     ->join('tb_ormas as tb2','tb2.nik_pemohon = tb1.nik_pemohon')
     ->join('tb_balasan_ormas as tb3','tb3.nik_pemohon = tb1.nik_pemohon')
     ->join('tb_persyaratan as tb4','tb4.id_surat_pengantar = tb2.id_ormas')
     ->where('tb1.nik_pemohon',$nik)
     ->where('tb2.id_ormas',$id)
     ->get();
     return $query->result();
  }

public function data_balasan_wna()
    {
   $query = $this->db->select('*')
     ->from('tb_balasan_wna as tb1')
     ->join('tb_wna as tb2','tb2.nik_pemohon = tb1.nik_pemohon')
     ->get();
     return $query->result();
  }

 public function cari_sumber_wna($id)
    {
      $query = $this->db->select('*')
     ->from('tb_wna')
     ->where('id_wna',$id)
     ->get();

     return $query->result();
  }

public function lihat_balasan_wna($id_wna)
    {
    $query = $this->db->select('*')
     ->from('tb_wna as tb1')
     ->join('tb_balasan_wna as tb2','tb2.id_wna = tb1.id_wna')
     ->join('tb_persyaratan as tb3','tb3.id_surat_pengantar = tb1.id_wna')
     ->where('tb1.id_wna',$id_wna)
     ->get();
     return $query->result();
  }

  public function lihat_balasan_wna_kasubag($nik,$id_wna)
    {
    $query = $this->db->select('*')
     ->from('tb_pemohon as tb1')
     ->join('tb_wna as tb2','tb2.nik_pemohon = tb1.nik_pemohon')
     ->join('tb_balasan_wna as tb3','tb3.nik_pemohon = tb1.nik_pemohon')
     ->join('tb_persyaratan as tb4','tb4.id_surat_pengantar = tb2.id_wna')
     ->where('tb1.nik_pemohon',$nik)
     ->where('tb2.id_wna',$id_wna)
     ->get();
     return $query->result();
  }

 public function permohonan_menunggu_kasubag(){
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar')
     ->where('tb1.status','Menunggu')
     // ->where('tb1.jenis_surat', 'Izin_Riset' or 'tb1.jenis_surat','Lapor_WNA')    
     ->order_by('tb1.id_surat_pengantar','desc')
     
     ->get();
     return $query->result();
  }

  public function permohonan_verifikasi_kasubag(){
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar')
     ->where('tb1.status','Verifikasi')
     // ->where('tb1.jenis_surat', 'Izin_Riset' or 'tb1.jenis_surat','Lapor_WNA')    
     ->order_by('tb1.id_surat_pengantar','desc')
     
     ->get();
     return $query->result();
  }

function update_dt($tbl, $id, $data)
    {
      $this->db->where('id_balasan', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }

public function data_admin()
    {
    $hasil = $this->db->order_by('id_admin','desc')
                  ->get('tb_admin');
    if($hasil->num_rows() > 0){
        return $hasil->result();
    } else {
        return false;
    }
  }

  public function hapus_user($tbl, $id){
      $this->db->where('id_admin', $id);
      $this->db->delete($tbl);
      if ($this->db->affected_rows() == 1) {
        return TRUE;
        }
      return FALSE;
    }

function update_admin($tbl, $id, $data)
    {
      $this->db->where('id_admin', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }

function update_email_izin($tbl, $id, $data)
    {
      $this->db->where('id_balasan', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }


function update_email_ormas($tbl, $id, $data)
    {
      $this->db->where('id_balasan', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }
function update_email_wna($tbl, $id, $data)
    {
      $this->db->where('id_balasan', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }

function update_status_surat($tbl, $id, $data)
    {
      $this->db->where('id_surat_pengantar', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }

// Beranda

     public function getDataPemohonTotal(){
        $data = $this->db->get($this->table_pemohon);
        $this->db->from($this->table_pemohon);
        $query = $this->db->get();
        return $query;
    }


 public function getDataIzinTotal(){
        $data = $this->db->get($this->table_izin);
        $this->db->from($this->table_izin);
        $query = $this->db->get();
        return $query;
    }


 public function getDataWnaTotal(){
        $data = $this->db->get($this->table_wna);
        $this->db->from($this->table_wna);
        $query = $this->db->get();
        return $query;
    }


 public function getDataOrmasTotal(){
        $data = $this->db->get($this->table_ormas);
        $this->db->from($this->table_ormas);
        $query = $this->db->get();
        return $query;
    }

public function edit_balasan_izin($idsurat){
  $query = $this->db->select('*')
     ->from('tb_balasan_izin as tb1')
     ->join('tb_izin_riset as tb2','tb2.nik_pemohon = tb1.nik_pemohon')
     ->where('tb1.id_izin_riset', $idsurat)
     ->get();
     return $query->result();  
    }

public function edit_balasan_ormas($idsurat){
  $query = $this->db->select('*')
     ->from('tb_balasan_ormas as tb1')
     ->join('tb_ormas as tb2','tb2.nik_pemohon = tb1.nik_pemohon')
     ->where('tb1.id_ormas', $idsurat)
     ->get();
     return $query->result();  
    }


public function edit_balasan_wna($idsurat){
 $query = $this->db->select('*')
     ->from('tb_balasan_wna as tb1')
     ->join('tb_wna as tb2','tb2.nik_pemohon = tb1.nik_pemohon')
     ->where('tb1.id_wna', $idsurat)
     ->get();
     return $query->result();  
}

function update_balasan_ormas($tbl, $id, $data)
    {
      $this->db->where('id_ormas', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }

function update_balasan_izin($tbl, $id, $data)
    {
      $this->db->where('id_izin_riset', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }

function update_balasan_wna($tbl, $id, $data)
    {                                                                                                                                                                                                                                                              
      $this->db->where('id_wna', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }


}
