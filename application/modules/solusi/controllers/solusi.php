<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solusi extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('solusi_model');
	}

	function index()
	{
		$item['solusi'] = $this->solusi_model->grid();
		$data['content'] = $this->load->view('datagrid', $item, TRUE);
		$data['script'] = $this->load->view('script', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function form($id = FALSE)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
			
		if($id)
		{
			$item = (array) $this->solusi_model->get_tritmen($id);
		}
		else
		{
			$item = array(
				'id'=>$id,
				'solusi'=>''
			);	
		}
					
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('solusi', 'solusi', 'required');
				
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form', $item, TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$save['id'] = $id;
			$save['solusi'] = $this->input->post('solusi');
						
			$this->solusi_model->save_tritmen($save);
			redirect('solusi');
		}
		
	}
	
	function delete_tritmen($id)
	{
		$this->solusi_model->delete_tritmen($id);
		redirect('solusi');
	}
	
}
