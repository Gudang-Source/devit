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
		$status = $this->input->post('status');
		$tgl = explode(' - ', $this->input->post('tanggal'));
		
		$this->load->library('pdf');
		$this->pdf->SetHeaderData('slide.jpg', 9, 'UNIT RAWAT JALAN RS BUDILUHUR', 'RS. Budi Luhur Jl. Kebon Pelok/ Pramuka Kecamatan Harjamukti - Kota Cirebon');
		$this->pdf->AddPage();
		$this->pdf->SetFont('helvetica', '', 8);
		
		switch ($status)
		{
			case 'N':
				$item['title'] = 'DATA PERSALINAN NORMAL';
				$item['periode'] = $this->input->post('tanggal');
				$item['source'] = $this->laporan_model->get_data($status, format_ymd($tgl[1]), format_ymd($tgl[0]));
				$html = $this->load->view('report', $item, TRUE);	
			break;
			case 'C':
				$item['title'] = 'DATA PERSALINAN SESAR';
				$item['periode'] = $this->input->post('tanggal');
				$item['source'] = $this->laporan_model->get_data($status, format_ymd($tgl[1]), format_ymd($tgl[0]));
				$html = $this->load->view('report', $item, TRUE);  
			break;
		}
				
		$this->pdf->writeHTML($html, true, false, false, false, '');
		$this->pdf->Output('output.pdf', 'I');
	}
	
}
