<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gejala_model extends CI_Model {
		
	function grid()
	{
		$query = $this->db->get('gejala');
		return $query->result();
	}
	
	function get_gejala($id)
	{
		$query = $this->db->get_where('gejala', array('id'=>$id));
		return $query->row();
	}
		
	function save_gejala($data)
	{
		$this->db->insert('gejala', $data);
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah ditambah</div>');
	}
	
	function update_gejala($data)
	{
		$this->db->update('gejala', $data, array('id'=>$data['id']));
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah diubah</div>');
	}
	
	function delete_gejala($id)
	{		
		$this->db->where('id', $id);
		$this->db->delete('gejala');
		$this->session->set_flashdata('alert', '<div class="alert alert-warning"><i class="fa fa-check-circle"></i> Data telah dihapus</div>');
	}
	
}
