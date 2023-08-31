<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PermitRequestController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Permit Request | Request';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/permit/permit_request');
        $this->load->view('layouts/footer');
    }
}