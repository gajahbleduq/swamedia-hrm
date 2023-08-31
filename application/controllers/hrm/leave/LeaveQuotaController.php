<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeaveQuotaController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Leave Request | Quota';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/leave/leave_quota');
        $this->load->view('layouts/footer');
    }
}