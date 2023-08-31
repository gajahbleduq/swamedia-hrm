<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FamilyController extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Personal Information | Family';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('hrm/personal-information/family');
		$this->load->view('layouts/footer');
	}
}