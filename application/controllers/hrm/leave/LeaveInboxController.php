<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeaveInboxController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Leave Request | Inbox';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/leave/leave_inbox');
        $this->load->view('layouts/footer');
    }
}