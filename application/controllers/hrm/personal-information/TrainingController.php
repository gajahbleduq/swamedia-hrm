<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TrainingController extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Personal Information | Training';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('hrm/personal-information/training');
		$this->load->view('layouts/footer');
	}
}