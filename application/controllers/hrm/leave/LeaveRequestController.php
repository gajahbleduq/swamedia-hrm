<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeaveRequestController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Leave Request | Request';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/leave/leave_request');
        $this->load->view('layouts/footer');
    }
}