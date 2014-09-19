<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relasi extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('relasi_model');
		if (!$this->session->userdata('id'))
		{
			show_404();
			exit;
		}
	}

	function index()
	{
		$item['rules'] = $this->relasi_model->grid();
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
			$item = (array) $this->relasi_model->get_rules($id);
		}
		else
		{
			$item = array(
				'id'=>$id,
				'id_penyakit'=>'',
				'id_gejala'=>'',
				'cf'=>''
			);	
		}
		$item['opt_penyakit'] = $this->relasi_model->opt_penyakit();
		$item['opt_gejala'] = $this->relasi_model->opt_gejala();
							
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('id_penyakit', 'penyakit', 'required');
		$this->form_validation->set_rules('id_gejala', 'gejala', 'required');
		$this->form_validation->set_rules('cf', 'cf', 'required|numeric');
		
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
			$save['id_gejala'] = $this->input->post( 'id_gejala');
			$save['cf'] = $this->input->post( 'cf');
			$this->relasi_model->save_rules($save);
			redirect('relasi');
		}
		
	}
	
	function delete_rule($id)
	{
		$this->relasi_model->delete_rule($id);
		redirect('relasi');
	}
	
}
