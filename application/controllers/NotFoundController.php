<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotFoundController extends CI_Controller
{


	public function index()
	{
		$data['title'] = 'Error | 404 Page Not Found';

		$this->load->view('layouts/header', $data);
		$this->load->view('errors/error_404');
		$this->load->view('layouts/footer');
	}
}