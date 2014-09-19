<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class diagnosa_model extends CI_Model {
		
	function opt_gejala()
	{
		$result = $this->db->get('gejala')->result_array();
		
		foreach($result as $row)
		{
			$data[$row['id']] = $row['gejala'];
		}
		return $data;
	}
	
	function get_data($res)
	{
		$query = $this->db->get_where('diagnosa', array('no_diagnosa'=>$res));
		return $query->row();	
	}
	
	function get_penyakit()
	{
		$query = $this->db->get('penyakit');
		return $query->result();	
	}
	
	function get_cf($id_penyakit, $id_gejala)
	{
		$this->db->select('cf');
		$result = $this->db->get_where('relasi', array('id_penyakit'=>$id_penyakit, 'id_gejala'=>$id_gejala));
		
		if ($result->num_rows() > 0)
		{
			$cf = $result->row();
			return $cf->cf;
		}
		else
		{
			return 0;
		}
	}
	
	function save_data($pasien, $diagnosa)
	{
		$this->db->trans_start();
		$this->db->insert('pasien', $pasien);
		$diagnosa['id_pasien'] = $this->db->insert_id();
		$this->db->insert('diagnosa', $diagnosa);
		$this->db->trans_complete();
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah disimpan</div>');
	}

}
