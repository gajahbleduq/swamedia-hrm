<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SkillsController extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Personal Information | Skills';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('hrm/personal-information/skills');
		$this->load->view('layouts/footer');
	}
}