<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {
	
	function get_data($tgl2, $tgl1)
	{
		$query = $this->db->get_where('diagnosa_view', array('tanggal <='=>$tgl2, 'tanggal >='=>$tgl1));
		return $query->result();
	}
	
	function get_skor($id_dx)
	{
		$this->db->select_max('skor');
		$query = $this->db->get_where('matrix', array('no_diagnosa'=>$id_dx))->row_array();
		return $query['skor'];
	}

}   
