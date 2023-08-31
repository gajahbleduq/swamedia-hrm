<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeaveCompletedController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Leave Request | Completed';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/leave/leave_completed');
        $this->load->view('layouts/footer');
    }
}