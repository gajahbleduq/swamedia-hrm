<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('/dashboard');
		} else {
			$this->_show();
		}
	}

	private function _show()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim', [
			'required' => 'This username field is required'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'This password field is required'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';

			$this->load->view('layouts/header', $data);
			$this->load->view('auth/login');
			$this->load->view('layouts/footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = htmlspecialchars($this->input->post('username', true));
		$password = $this->input->post('password');

		$user = $this->db->get_where('hrd_profile', ['username' => $username])->row_array();

		if ($user) {
			// if (password_verify($password, $user['pwd'])) {
			if (md5($password) == $user['pwd']) {
				$data = [
					'logged_in' => TRUE,
					'id' => $user['id'],
					'nik' => $user['nik'],
					'nama' => $user['nama'],
					'jabatan_id' => $user['jabatan_id'],
					'dept_id' => $user['dept_id'],
					'id_role' => $user['id_role'],
					'group_akses' => $user['group_akses']
				];

				$this->session->set_userdata($data);

				redirect('/dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
															<div class="alert-body">
																Wrong password!
															</div>
														</div>');
				redirect('/login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
														<div class="alert-body">
															Username is not registered!
														</div>
													</div>');
			redirect('/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
													<div class="alert-body">
														You have been logged out!
													</div>
												</div>');

		redirect('/login');
	}

	public function update()
	{
		// $new_password = password_hash($this->input->post('password2'), PASSWORD_DEFAULT);

		$new_password = md5($this->input->post('password2'));
		$this->db->update('hrd_profile', array('pwd' => $new_password), array('id' => 17));

		redirect('login');
	}
}