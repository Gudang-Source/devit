<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('form', 'number'));
		$this->load->library('form_validation');
		$this->load->helper('date');
		$this->load->model('diagnosa_model');
	}
	
	function index()
	{
		$item['result'] = $this->diagnosa_model->grid();
		$data['content'] = $this->load->view('datagrid', $item, TRUE);
		$data['script'] = $this->load->view('grid_js', '', TRUE);
		$this->load->view('template', $data);
	}

	function check()
	{
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('kelompok', 'kelompok', 'required');
								
		if($this->form_validation->run() == FALSE)
		{
			$item['no_diagnosa'] = no_diagnosa($this->db->count_all('diagnosa'));
			$item['opt_gejala'] = $this->diagnosa_model->opt_gejala();
			$data['content'] = $this->load->view('form', $item, TRUE);
			$data['script'] = $this->load->view('script', '', TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$pasien['nama'] = $this->input->post('nama');
			$pasien['kelompok'] = $this->input->post('kelompok');
			$diagnosa['no_diagnosa'] = $this->input->post('no_diagnosa');
			$diagnosa['gejala'] = implode('|', $this->input->post('gejala'));
			$diagnosa['tanggal'] = format_ymd($this->input->post('tanggal'));
			$this->diagnosa_model->save_data($pasien, $diagnosa);
			redirect('diagnosa/periksa/'. $diagnosa['no_diagnosa']);
		}
	}
	
	function periksa($res)
	{
		$penyakit = $this->diagnosa_model->get_penyakit();
		$abc = $this->diagnosa_model->get_data($res);
		$id_gejala = explode('|', $abc['gejala']);
		$sum = count($id_gejala)-1;
		
		foreach($penyakit as $row)
		{
			$temp = 0;
			for($i=1; $i<=$sum; $i++)
			{
				$cf = $this->diagnosa_model->get_cf($row->id, $id_gejala[$i]);
				$temp += $cf++;
			}
			$save['no_diagnosa'] = $abc['no_diagnosa'];
			$save['id_pasien'] = $abc['id_pasien'];
			$save['id_penyakit'] = $row->id;
			$save['skor'] = $temp;
			$this->diagnosa_model->save_matrix($save);
		}
		$update['hasil'] = $this->diagnosa_model->get_skor($abc['no_diagnosa']);
		$this->diagnosa_model->update_hasil($update, $abc['no_diagnosa']);
		redirect('diagnosa/hasil/'.$abc['no_diagnosa']);
	}
	
	function hasil($res)
	{
		$item = (array) $this->diagnosa_model->get_data2($res);
		$data['content'] = $this->load->view('result', $item, TRUE);
		$this->load->view('template', $data);
	}

}
