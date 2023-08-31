<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CalendarController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->show();
		} else {
			redirect('/login');
		}
	}

	public function show()
	{
		$data['title'] = 'e-Office | Calendar';

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('eoffice/calendar');
		$this->load->view('layouts/footer');
	}
}