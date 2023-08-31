<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RulesController extends CI_Controller {

	public function index()
	{
		$data['title'] = 'e-Office | Rules';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('eoffice/rules');
		$this->load->view('layouts/footer');
	}
}