<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aturan extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('aturan_model');
		if (!$this->session->userdata('id'))
		{
			show_404();
			exit;
		}
	}

	function index()
	{
		$item['rules'] = $this->aturan_model->grid();
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
			$item = (array) $this->aturan_model->get_rules($id);
		}
		else
		{
			$item = array(
				'id'=>$id,
				'id_penyakit'=>'',
				'id_solusi'=>''
			);	
		}
		$item['opt_penyakit'] = $this->aturan_model->opt_penyakit();
		$item['opt_solusi'] = $this->aturan_model->opt_solusi();
							
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('id_penyakit', 'penyakit', 'required');
		$this->form_validation->set_rules('id_solusi', 'solusi', 'required');
				
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form', $item, TRUE);
			$data['script'] = $this->load->view('select', '', TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$save['id'] = $id;
			$save['id_penyakit'] = $this->input->post('id_penyakit');
			$save['id_solusi'] = $this->input->post( 'id_solusi');
			$this->aturan_model->save_rules($save);
			redirect('aturan');
		}
		
	}
	
	function delete_rule($id)
	{
		$this->aturan_model->delete_rule($id);
		redirect('aturan');
	}
	
}