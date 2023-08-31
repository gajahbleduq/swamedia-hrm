<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PermitCompletedController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Permit Request | Completed';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/permit/permit_completed');
        $this->load->view('layouts/footer');
    }
}