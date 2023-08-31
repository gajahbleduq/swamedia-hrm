<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WorkExperienceController extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Personal Information | Work Experience';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('hrm/personal-information/experience');
		$this->load->view('layouts/footer');
	}
}