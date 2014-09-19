<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {
	
	function get_data($status, $tgl2, $tgl1)
	{
		$query = $this->db->get_where('pasien', array('status'=>$status, 'tanggal <='=>$tgl2, 'tanggal >='=>$tgl1));
		return $query->result();
	}

}   
