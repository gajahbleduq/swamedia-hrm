<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard/Dashboard');
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
		$data['title'] = 'PT Swamedia Informatika | Dashboard';

		// Card Profile
		$data['user'] = $this->Dashboard->get_user();

		//Attendance Check
		$data['check_attendance'] = $this->Dashboard->attendance_check();

		//Break Work Check
		$absen_id = $this->Dashboard->attendance_check();
		if ($absen_id) {
			$id = $absen_id['id'];
			if ($id) {
				$check_break = $this->Dashboard->work_log_check($id);
				$data['check_break'] = $this->Dashboard->work_log_check($id);
			} else {
				// Tampilkan pesan error atau isi dengan nilai default
				$check_break = array();
				$data['check_break'] = array();
			}
		} else {
			// Tampilkan pesan error atau isi dengan nilai default
			$check_break = array();
			$data['check_break'] = array();
		}

		if (isset($check_break['status_absen']) && $check_break['status_absen'] == 1) {
			$this->session->set_flashdata('button_break', '<div class="col-6 col-md-6 text-center pt-50 d-flex justify-content-center mt-1">
																<a href="dashboard/work" class="btn bg-warning text-dark fw-bolder form-control">Back To Work</a>
															</div>');
		} elseif (isset($check_break['status_absen']) && $check_break['status_absen'] == 2) {
			$this->session->set_flashdata('button_break', '<div class="col-6 col-md-6 text-center pt-50 d-flex justify-content-center mt-1">
														<button type="button"
															class="btn bg-warning form-control text-dark fw-bolder"
															data-bs-toggle="modal" data-bs-target="#break_work">
															Break From Work
														</button>
													</div>');
		} else {
			$this->session->set_flashdata('button_break', '<div class="col-6 col-md-6 text-center pt-50 d-flex justify-content-center mt-1">
														<button type="button"
															class="btn bg-warning form-control text-dark fw-bolder"
															data-bs-toggle="modal" data-bs-target="#break_work">
															Break From Work
														</button>
													</div>');
		}


		$this->load->view('layouts/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function attendance_validation_submit()
	{
		if ($this->session->userdata('logged_in') == TRUE) {

			$this->form_validation->set_rules('txt_status', 'Status', 'required|trim', [
				'required' => 'Please enter a status in the status field'
			]);
			$this->form_validation->set_rules('txt_location', 'Location', 'required|trim', [
				'required' => 'Please enter a location in the location field'
			]);
			$this->form_validation->set_rules('txt_feel', 'Feel', 'required|trim', [
				'required' => 'Please enter a feel today in the feel today field'
			]);
			$this->form_validation->set_rules('txt_yesterday', 'Yesterday', 'required|trim', [
				'required' => 'Please enter a do since yesterday in the do since yesterday field'
			]);
			$this->form_validation->set_rules('txt_today', 'Today', 'required|trim', [
				'required' => 'Please enter a do today in the do today field'
			]);
			$this->form_validation->set_rules('txt_blocking', 'Blocking', 'required|trim', [
				'required' => 'Please enter a blocking your progress in the blocking your progress field'
			]);

			if ($this->form_validation->run() == false) {
				$this->show();
			} else {
				$this->_attendance_submit();
			}
		} else {
			redirect('/login');
		}
	}

	private function _attendance_submit()
	{
		$user_id = $this->session->userdata('id');

		$status = $this->input->post('txt_status', true);
		$location = $this->input->post('txt_location', true);
		$feel = $this->input->post('txt_feel', true);
		$yesterday = $this->input->post('txt_yesterday', true);
		$today = $this->input->post('txt_today', true);
		$blocking = $this->input->post('txt_blocking', true);

		$current_date = date('Y-m-d');
		$time = date('H:i');
		$current_time = strtotime($time);
		$time_plus_9_hours = strtotime('+9 hours', $current_time);
		$ip_address = getenv("REMOTE_ADDR");

		$jam_masuk = "09:00";
		$waktu_masuk = strtotime($jam_masuk);

		$telat = "";
		if ($current_time > $waktu_masuk) {
			$keterlambatan = $current_time - $waktu_masuk;
			$keterlambatan = gmdate("H:i", $keterlambatan);
			$telat = strtotime($keterlambatan);
		} else {
			$telat = 0;
		}

		$data = array(
			'tanggal' => $current_date,
			'profile_id' => $user_id,
			'masuk_input' => $current_time,
			'masuk_ip' => $ip_address,
			'jatah_pulang_log' => $time_plus_9_hours,
			'telat' => $telat,
			'status' => $status,
			'lokasi_remote' => $location,
			'perasaan_hari_ini' => $feel,
			'kerjaan_kemarin' => $yesterday,
			'kerjaan_hari_ini' => $today,
			'hambatan_kerjaan' => $blocking
		);


		$this->Dashboard->attendance_insert($data);
		redirect('/dashboard');
	}

	public function attendance_leave()
	{
		if ($this->session->userdata('logged_in') == TRUE) {

			$user_id = $this->session->userdata('id');

			$current_date = date('Y-m-d');
			$time = date('H:i');
			$current_time = strtotime($time);
			$ip_address = getenv("REMOTE_ADDR");

			$this->Dashboard->attendance_update($current_date, $user_id, $current_time, $ip_address);
			redirect('/dashboard');
		} else {
			redirect('/login');
		}
	}

	public function break_validation_submit()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->form_validation->set_rules('txt_break', 'Break', 'required|trim', [
				'required' => 'Please enter a description in the description field'
			]);

			if ($this->form_validation->run() == false) {
				$this->show();
			} else {
				$this->_break_submit();
			}
		} else {
			redirect('/login');
		}
	}

	private function _break_submit()
	{

		//Break Work Check
		$absen_id = $this->Dashboard->attendance_check();
		$id = $absen_id['id'];

		$break = $this->input->post('txt_break', true);

		$time = date('H:i');
		$current_time = strtotime($time);

		$data = array(
			'absen_id' => $id,
			'status_absen' => 1,
			'jam_mulai' => $current_time,
			'catatan' => $break
		);


		$this->Dashboard->break_insert($data);
		redirect('/dashboard');
	}

	public function work_submit()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			//Break Work Check
			$absen_id = $this->Dashboard->attendance_check();
			$id = $absen_id['id'];
			$break_data = $this->Dashboard->work_log_check($id);

			$time = date('H:i');
			$current_time = strtotime($time);

			$data = array(
				'absen_id' => $id,
				'status_absen' => 2,
				'jam_mulai' => $break_data['jam_mulai'],
				'jam_akhir' => $current_time,
				'catatan' => $break_data['catatan']
			);


			$this->Dashboard->break_insert($data);
			redirect('/dashboard');
		} else {
			redirect('/login');
		}
	}
}