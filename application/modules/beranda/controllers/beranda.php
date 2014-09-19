<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		if (!$this->session->userdata('id'))
		{
			show_404();
			exit;
		}
	}

	function index()
	{
		$data['alert'] = $this->session->flashdata('alert');
		$data['content'] = $this->load->view('content', '', TRUE);
		$this->load->view('template', $data);
	}
}
