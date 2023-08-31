<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OutboxController extends CI_Controller {

	public function index()
	{
		$data['title'] = 'e-Office | Outbox';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('eoffice/outbox');
		$this->load->view('layouts/footer');
	}
}