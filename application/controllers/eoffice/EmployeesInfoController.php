<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeesInfoController extends CI_Controller {

	public function index()
	{
		$data['title'] = 'e-Office | Employees Info';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('eoffice/employees');
		$this->load->view('layouts/footer');
	}
}