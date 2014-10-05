<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gejala extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('gejala_model');
		$this->load->helper('number');
	}

	function index()
	{
		$item['gejala'] = $this->gejala_model->grid();
		$data['content'] = $this->load->view('datagrid', $item, TRUE);
		$data['script'] = $this->load->view('script', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function form_save()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$item = array(
			'id'=>id_gejala($this->db->count_all('gejala')),
			'gejala'=>''
		);	
								
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('gejala', 'gejala', 'required');
										
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form_save', $item, TRUE);
			$data['script'] = $this->load->view('script', '', TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$save['id'] =  $this->input->post('id_gejala');
			$save['gejala'] = $this->input->post('gejala');
									
			$this->gejala_model->save_gejala($save);
			redirect('gejala');
		}
	}
	
	function form_update($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$item = (array) $this->gejala_model->get_gejala($id);
									
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('gejala', 'gejala', 'required');
								
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form_update', $item, TRUE);
			$data['script'] = $this->load->view('script', '', TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$save['id'] = $id;
			$save['gejala'] = $this->input->post('gejala');
									
			$this->gejala_model->update_gejala($save);
			redirect('gejala');
		}
	}
	
	function delete_gejala($id)
	{
		$this->gejala_model->delete_gejala($id);
		redirect('gejala');
	}
	
}
