<?php

function has_id_izin($id_pengantar) {
	$CI =& get_instance();
	$tb_spt = $CI->db->get_where('tb_balasan_izin', ['id_izin_riset'=> $id_pengantar]);
	return $tb_spt->num_rows();
}

function has_id_ormas($id_pengantar) {
	$CI =& get_instance();
	$tb_spt = $CI->db->get_where('tb_balasan_ormas', ['id_ormas'=> $id_pengantar]);
	return $tb_spt->num_rows();
}

function has_id_wna($id_pengantar) {
	$CI =& get_instance();
	$tb_spt = $CI->db->get_where('tb_balasan_wna', ['id_wna'=> $id_pengantar]);
	return $tb_spt->num_rows();
}

?>