<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('penyakit_model');
		$this->load->helper('number');
		if (!$this->session->userdata('id'))
		{
			show_404();
			exit;
		}
	}

	function index()
	{
		$item['penyakit'] = $this->penyakit_model->grid();
		$data['content'] = $this->load->view('datagrid', $item, TRUE);
		$data['script'] = $this->load->view('script', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function form_save()
	{
		$config['upload_path']		= 'userfiles';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['encrypt_name']		= true;
		$this->load->library('upload', $config);
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$item['id'] = id_penyakit($this->db->count_all('penyakit'));
											
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('penyakit', 'penyakit', 'required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
								
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form_save', $item, TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$uploaded = $this->upload->do_upload('img');
			$save['id'] =  $this->input->post('id_penyakit');
			$save['penyakit'] = $this->input->post('penyakit');
			$save['deskripsi'] = $this->input->post('deskripsi');
			
			if($uploaded)
			{
				$image = $this->upload->data();
				$this->load->library('image_lib');
				//small image
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'userfiles/'.$image['file_name'];
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 350;
				$config['height'] = 250;
				$this->image_lib->initialize($config); 
				$this->image_lib->resize();
				$this->image_lib->clear();
				//save image
				$save['img'] = $image['file_name'];
			}
			elseif(!$uploaded)
			{
				$this->penyakit_model->save_penyakit($save);
				redirect('penyakit');
			}
						
			$this->penyakit_model->save_penyakit($save);
			redirect('penyakit');
		}
	}
	
	function form_update($id)
	{
		$config['upload_path']		= 'userfiles';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['encrypt_name']		= true;
		$this->load->library('upload', $config);
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$item = (array) $this->penyakit_model->get_penyakit($id);
									
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('penyakit', 'penyakit', 'required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
						
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form_update', $item, TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$uploaded = $this->upload->do_upload('img');
			$save['id']	= $id;
			$save['penyakit'] = $this->input->post('penyakit');
			$save['deskripsi'] = $this->input->post('deskripsi');
									
			if($uploaded)
			{
				if($item['img'] != '')
				{
					$file = 'userfiles/'.$item['img'];
					if(file_exists($file))
					{
						unlink($file);
					}
				}
			}
				
			if($uploaded)
			{
				$image = $this->upload->data();
				$this->load->library('image_lib');
				//small image
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'userfiles/'.$image['file_name'];
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 350;
				$config['height'] = 250;
				$this->image_lib->initialize($config); 
				$this->image_lib->resize();
				$this->image_lib->clear();
				//save image
				$save['img'] = $image['file_name'];
			}
						
			$this->penyakit_model->update_penyakit($save);
			redirect('penyakit');
		}
	}
	
	function detail_penyakit($id)
	{
		$item = (array) $this->penyakit_model->get_penyakit($id);
		$data['content'] = $this->load->view('detail_view', $item, TRUE);
		$this->load->view('template', $data);	
	}
	
	function cetak_detail($id)
	{
		$this->load->library('pdf');
		$this->pdf->AddPage();
		$this->pdf->SetFont("helvetica", "", 12);
		
		$item = (array) $this->penyakit_model->get_penyakit($id);
		$html = $this->load->view('printout', $item, TRUE);	
		$this->pdf->writeHTML($html, true, false, false, false, '');
		$this->pdf->Output('output.pdf', 'I');
	}
	
	function delete_penyakit($id)
	{
		$item = (array) $this->penyakit_model->get_penyakit($id);
		if($item['img'] != '')
		{
			$file = 'userfiles/'.$item['img'];
			if(file_exists($file))
			{
				unlink($file);
			}
		}
		$this->penyakit_model->delete_penyakit($id);
		redirect('penyakit');
	}
	
}
