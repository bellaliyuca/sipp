<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){

		parent::__construct();		
		/* m_laporan diperpendek namanya dengan m */
		$this->load->model('M_Laporan','m');
		}


	public function index()
	{
		$data['title'] = "Sistem Informasi Pelayanan Publik";
		$this->load->view('front/v_beranda',$data);
	}

	
	
}
