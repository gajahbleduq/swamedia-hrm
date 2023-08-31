<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewMessageController extends CI_Controller {

	public function index()
	{
		$data['title'] = 'e-Office | New Message';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('eoffice/new_message');
		$this->load->view('layouts/footer');
	}
}