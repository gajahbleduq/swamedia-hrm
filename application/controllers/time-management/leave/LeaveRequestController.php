<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeaveRequestController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('leave/LeaveRequest');
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
        $data['title'] = 'Leave Request';
		
		$id= $this->session->userdata('id');
        $data['all_data'] = $this->LeaveRequest->get_all_data($id);

		$this->load->view('layouts/header', $data);
        $this->load->view('time-management/leave/index', $data);
        $this->load->view('layouts/footer');
    }

    public function validation_leave_submit()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            $this->form_validation->set_rules('txt_date', 'Date', 'required|trim', [
				'required' => 'Please enter a date in the date field'
			]);
			$this->form_validation->set_rules('txt_name', 'Name', 'required|trim', [
				'required' => 'Please enter a name in the name fieldd'
			]);
			$this->form_validation->set_rules('txt_start_date', 'Start Date', 'required|trim', [
				'required' => 'Please enter a start date in the start date field'
			]);
			$this->form_validation->set_rules('txt_end_date', 'End Date', 'required|trim|callback_check_end_date', [
				'required' => 'Please enter a end date in the end date field'
			]);
			$this->form_validation->set_rules('txt_leave_type', 'Leave Type', 'required|trim', [
				'required' => 'Please select a leave type in the leave type field'
			]);
			$this->form_validation->set_rules('txt_approval_name', 'Approval Name', 'required|trim', [
				'required' => 'Please select a approver in the approver field'
			]);
			$this->form_validation->set_rules('txt_notes', 'Notes', 'required|trim', [
				'required' => 'Please enter a notes in the notes field'
			]);

			if ($this->form_validation->run() == false) {
				$this->show();
			} else {
				$this->_leave_submit();
			}
        } else {
            redirect('/login');
        }
    }

	public function check_end_date()
	{
		$start_date = strtotime($this->input->post('txt_start_date'));
		$end_date = strtotime($this->input->post('txt_end_date'));

		if ($end_date < $start_date) {
			$this->form_validation->set_message('check_end_date', 'The end date must be greater than start date');
			return false;
		}

		return true;
	}

    private function _leave_submit() {
        $user_id = $this->session->userdata('id');

		$name = $this->input->post('txt_name', true);
		$start_date = $this->input->post('txt_start_date', true);
		$end_date = $this->input->post('txt_end_date', true);
		$leave_type = $this->input->post('txt_leave_type', true);
		$approval_name = $this->input->post('txt_approval_name', true);
		$notes = $this->input->post('txt_notes', true);

        $date = date('Y-m-d');

        $data = array(
			'profile_id' => $user_id,
			'tanggal' => $date,
			'tanggal_mulai' => $start_date,
			'tanggal_selesai' => $end_date,
			'tipe' => $leave_type,
			'approver' => $approval_name,
			'catatan' => $notes,
			'status' => 0
		);

		if($this->LeaveRequest->insert_request($data)) {
			$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
															<div class="alert-body">
																Leave Request Add Successfully!
															</div>
														</div>');
		}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
															<div class="alert-body">
																Leave Request Add Not Successfully!
															</div>
														</div>');
		}

		redirect('/time-management/leave');
    }
}