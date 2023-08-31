<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeaveReviewController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Leave Request | In Review';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/leave/leave_review');
        $this->load->view('layouts/footer');
    }
}