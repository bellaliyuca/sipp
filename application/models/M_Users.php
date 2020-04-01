<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Users extends CI_Model {


 function __construct() {
        parent::__construct();

    }
 
   function insert_dt($tbl, $data){
     $this->db->insert($tbl, $data);
     return TRUE;
      }

    public function kode_unik()  {
     $this->db->select('Right(tb_surat_pengantar.id_surat_pengantar,5) as kode ',false);
            $this->db->order_by('id_surat_pengantar', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('tb_surat_pengantar');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
            $kodejadi  = "S_P_".$kodemax;
            return $kodejadi;
    }

public function lihat_balasan_wna($nik,$id_wna)
    {
    $query = $this->db->select('*')
     ->from('tb_wna as tb1')
     ->join('tb_balasan_wna as tb2','tb2.id_wna = tb1.id_wna')
     ->join('tb_persyaratan as tb3','tb3.id_surat_pengantar = tb1.id_wna')
     ->where('tb1.id_wna',$id_wna)
     ->where('tb1.nik_pemohon',$nik)
     ->get();
     return $query->result();
  }

public function lihat_balasan_ormas($nik,$id_ormas)
    {
    $query = $this->db->select('*')
     ->from('tb_ormas as tb1')
     ->join('tb_balasan_ormas as tb2','tb2.id_ormas = tb1.id_ormas')
     ->join('tb_persyaratan as tb3','tb3.id_surat_pengantar = tb1.id_ormas')
     ->join('tb_pemohon as tb4','tb4.nik_pemohon = tb1.nik_pemohon')
     ->where('tb1.id_ormas',$id_ormas)
     ->where('tb1.nik_pemohon',$nik)
     ->get();
     return $query->result();
  }


public function lihat_balasan_izin($nik,$id_izin)
    {
    $query = $this->db->select('*')
     ->from('tb_izin_riset as tb1')
     ->join('tb_balasan_izin as tb2','tb2.id_izin_riset = tb1.id_izin_riset')
     ->join('tb_persyaratan as tb3','tb3.id_surat_pengantar = tb1.id_izin_riset')
     ->join('tb_pemohon as tb4','tb4.nik_pemohon = tb1.nik_pemohon')
     ->where('tb1.id_izin_riset',$id_izin)
     ->where('tb1.nik_pemohon',$nik)
     ->get();
     return $query->result();
  }
    
    
 public function tampil_permohonan($limit, $start ,$nik){
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar','left')
     ->where('tb1.nik_pemohon' ,$nik)
     ->order_by('tb1.id_surat_pengantar','desc')
     ->limit($limit, $start)
     ->get();
     return $query->result();
  }


 function cari($nik, $keyword){                   
   
    $query = $this->db->select('*')
     ->from('tb_surat_pengantar as tb1')
     ->join('tb_persyaratan as tb2','tb2.id_surat_pengantar = tb1.id_surat_pengantar')
     ->where('tb1.nik_pemohon' ,$nik)
     ->like('jenis_surat',$keyword)
     ->or_like('perihal',$keyword)
     ->or_like('keperluan',$keyword)
     ->order_by('tb1.id_surat_pengantar','desc')
     ->get();
     return $query->result();

}

public function find_nik($tbl,$nik){
   $this->db->from($tbl);
   $this->db->where('nik_pemohon', $nik);
   $query = $this->db->get();
    if ($query->num_rows() == 1) {
    return $query->result();
      }
    }

 function update_akun($tbl, $id, $data)
    {
      $this->db->where('nik_pemohon', $id);
      $this->db->update($tbl, $data);
      return TRUE;
    }


}