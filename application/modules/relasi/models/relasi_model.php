<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relasi_model extends CI_Model {
		
	function grid()
	{
		$query = $this->db->get('mt_relasi');
		return $query->result();
	}
	
	function get_rules($id)
	{
		$query = $this->db->get_where('relasi', array('id'=>$id));
		return $query->row();
	}

	function opt_penyakit()
	{
		$result = $this->db->get('penyakit')->result_array();
		
		$data[''] = '-- Jenis Penyakit --' ;
		foreach($result as $row)
		{
			$data[$row['id']] = $row['penyakit'];
		}
		return $data;
	}
	
	function opt_gejala()
	{
		$result = $this->db->get('gejala')->result_array();
		
		$data[''] = '-- Gejala Penyakit --';
		foreach($result as $row)
		{
			$data[$row['id']] = $row['gejala'];
		}
		return $data;
	}	
	
	function save_rules($data)
	{
		if($data['id'])
		{
			$this->db->update('relasi', $data, array('id'=>$data['id']));
			$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah berhasil diubah</div>');
		}
		else
		{
			$this->db->insert('relasi', $data);
			$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah berhasil ditambahkan</div>');
		}
	}
	
	function delete_rule($id)
	{		
		$this->db->where('id', $id);
		$this->db->delete('aturan');
		$this->session->set_flashdata('alert', '<div class="alert alert-warning"><i class="fa fa-check-circle"></i> Data telah berhasil dihapus</div>');
	}
	
}