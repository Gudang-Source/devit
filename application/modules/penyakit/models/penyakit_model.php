<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penyakit_model extends CI_Model {
		
	function grid()
	{
		$query = $this->db->get('penyakit');
		return $query->result();
	}
	
	function get_penyakit($id)
	{
		$query = $this->db->get_where('penyakit', array('id'=>$id));
		return $query->row();
	}
		
	function save_penyakit($data)
	{
		$this->db->insert('penyakit', $data);
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah ditambah</div>');
	}
	
	function update_penyakit($data)
	{
		$this->db->update('penyakit', $data, array('id'=>$data['id']));
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah diubah</div>');
	}
	
	function delete_penyakit($id)
	{		
		$this->db->where('id', $id);
		$this->db->delete('penyakit');
		$this->session->set_flashdata('alert', '<div class="alert alert-warning"><i class="fa fa-check-circle"></i> Data telah dihapus</div>');
	}
	
}
