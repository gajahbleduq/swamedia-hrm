<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EducationController extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Personal Information | Education';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('hrm/personal-information/education');
		$this->load->view('layouts/footer');
	}
}