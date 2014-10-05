<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('laporan_model');
		$this->load->helper('form');
		if (!$this->session->userdata('id'))
		{
			show_404();
			exit;
		}
	}

	function index()
	{
		$data['content'] = $this->load->view('form', '', TRUE);
		$data['script'] = $this->load->view('script', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function printout()
	{
		$tgl = explode(' - ', $this->input->post('tanggal'));
		
		$this->load->library('pdf');
		$this->pdf->SetHeaderData('slide.jpg', 9, 'SAUNG AL-BAROKAH', 'Majalengka');
		$this->pdf->AddPage();
		$this->pdf->SetFont('helvetica', '', 8);
		
		$item['periode'] = $this->input->post('tanggal');
		$item['source'] = $this->laporan_model->get_data(format_ymd($tgl[1]), format_ymd($tgl[0]));
		$html = $this->load->view('report', $item, TRUE);
				
		$this->pdf->writeHTML($html, true, false, false, false, '');
		$this->pdf->Output('output.pdf', 'I');
	}
	
}
