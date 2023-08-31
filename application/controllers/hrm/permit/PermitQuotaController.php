<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PermitQuotaController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Permit Request | Quota';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/permit/permit_quota');
        $this->load->view('layouts/footer');
    }
}