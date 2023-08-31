<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InboxController extends CI_Controller {

	public function index()
	{
		$data['title'] = 'e-Office | Inbox';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('eoffice/inbox');
		$this->load->view('layouts/footer');
	}
}