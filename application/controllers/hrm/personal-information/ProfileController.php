<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{


	public function index()
	{
		$data['title'] = 'Personal Information | Profile';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('hrm/personal-information/profile');
		$this->load->view('layouts/footer');
	}
}