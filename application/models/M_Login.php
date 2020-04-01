<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

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


}
