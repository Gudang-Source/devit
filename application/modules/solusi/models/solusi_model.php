<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solusi_model extends CI_Model {
		
	function grid()
	{
		$query = $this->db->get('solusi');
		return $query->result();
	}
	
	function get_tritmen($id)
	{
		$query = $this->db->get_where('solusi', array('id'=>$id));
		return $query->row();
	}

	function save_tritmen($data)
	{
		if($data['id'])
		{
			$this->db->update('solusi', $data, array('id'=>$data['id']));
			$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah berhasil diubah</div>');
		}
		else
		{
			$this->db->insert('solusi', $data);
			$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah berhasil ditambahkan</div>');
		}
	}
	
	function delete_tritmen($id)
	{		
		$this->db->where('id', $id);
		$this->db->delete('solusi');
		$this->session->set_flashdata('alert', '<div class="alert alert-warning"><i class="fa fa-check-circle"></i> Data telah berhasil dihapus</div>');
	}
	
}
